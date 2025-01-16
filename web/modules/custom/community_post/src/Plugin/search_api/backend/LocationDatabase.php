<?php

namespace Drupal\community_post\Plugin\search_api\backend;

use Drupal\search_api\Query\QueryInterface;
use Drupal\search_api\SearchApiException;
use Drupal\search_api_db\Event\QueryPreExecuteEvent;
use Drupal\search_api_db\Event\SearchApiDbEvents;
use Drupal\search_api_db\Plugin\search_api\backend\Database;

/**
 * @SearchApiBackend(
 *   id = "search_location_api_db",
 *   label = @Translation("Location database"),
 *   description = @Translation("Indexes items in the database. Supports
 *   several advanced features, but should not be used for large sites.")
 * )
 */
class LocationDatabase extends Database {

  /**
   * {@inheritdoc}
   */
  protected function sqlType($type) {
    switch ($type) {
      case 'text':
        return ['type' => 'varchar', 'length' => 30];

      case 'string':
      case 'uri':
        return ['type' => 'varchar', 'length' => 255];

      case 'integer':
      case 'duration':
      case 'date':
        // 'datetime' sucks. Therefore, we just store the timestamp.
        return ['type' => 'int', 'size' => 'big'];

      case 'decimal':
        return ['type' => 'float', 'precision' => 18, 'scale' => 12];

      case 'boolean':
        return ['type' => 'int', 'size' => 'tiny'];

      default:
        throw new SearchApiException("Unknown field type '$type'.");
    }
  }

  /**
   * {@inheritdoc}
   */
  public function createDbQuery(QueryInterface $query, array $fields) {
    $keys = &$query->getKeys();
    $keys_set = (boolean) $keys;
    $tokenizer_active = $query->getIndex()->isValidProcessor('tokenizer');
    $keys = $this->prepareKeys($keys, $tokenizer_active);
    $add_to_group_by = FALSE;
    // Only filter by fulltext keys if there are any real keys present.
    if ($keys && (!is_array($keys) || count($keys) > 2 || (!isset($keys['#negation']) && count($keys) > 1))) {
      // Special case: if the outermost $keys array has "#negation" set, we
      // can't handle it like other negated subkeys. To avoid additional
      // complexity later, we just wrap $keys so it becomes a subkey.
      if (!empty($keys['#negation'])) {
        $keys = [
          '#conjunction' => 'AND',
          $keys,
        ];
      }

      $fulltext_fields = $this->getQueryFulltextFields($query);
      if (!$fulltext_fields) {
        throw new SearchApiException('Search keys are given but no fulltext fields are defined.');
      }

      $fulltext_field_information = [];
      foreach ($fulltext_fields as $name) {
        if (!isset($fields[$name])) {
          throw new SearchApiException("Unknown field '$name' specified as search target.");
        }
        if (!$this->getDataTypeHelper()->isTextType($fields[$name]['type'])) {
          $types = $this->getDataTypePluginManager()->getInstances();
          $type = $types[$fields[$name]['type']]->label();
          throw new SearchApiException("Cannot perform fulltext search on field '$name' of type '$type'.");
        }
        $fulltext_field_information[$name] = $fields[$name];
      }

      $db_query = $this->createKeysQuery($keys, $fulltext_field_information, $fields, $query->getIndex());
      $add_to_group_by = TRUE;
    }
    elseif ($keys_set) {
      $msg = $this->t('No valid search keys were present in the query.');
      $this->warnings[(string) $msg] = 1;
    }

    if (!isset($db_query)) {
      $db_info = $this->getIndexDbInfo($query->getIndex());
      $db_query = $this->database->select($db_info['index_table'], 't');
      $db_query->addField('t', 'item_id', 'item_id');
      $db_query->addExpression(':score', 'score', [':score' => self::SCORE_MULTIPLIER]);
      $db_query->distinct();
    }

    $condition_group = $query->getConditionGroup();
    $this->addLanguageConditions($condition_group, $query);
    if ($condition_group->getConditions()) {
      $condition = $this->createDbCondition($condition_group, $fields, $db_query, $query->getIndex());
      if ($condition) {
        $db_query->condition($condition);
      }
    }

    $db_query->addTag('search_api_db_search');
    $db_query->addMetaData('search_api_query', $query);
    $db_query->addMetaData('search_api_db_fields', $fields);

    // Allow subclasses and other modules to alter the query (before a count
    // query is constructed from it).
    $event_base_name = SearchApiDbEvents::QUERY_PRE_EXECUTE;
    $event = new QueryPreExecuteEvent($db_query, $query);
    $this->getEventDispatcher()->dispatch($event_base_name, $event);
    $db_query = $event->getDbQuery();

    $description = 'This hook is deprecated in search_api:8.x-1.16 and is removed from search_api:2.0.0. Please use the "search_api_db.query_pre_execute" event instead. See https://www.drupal.org/node/3103591';
    $this->getModuleHandler()
      ->alterDeprecated($description, 'search_api_db_query', $db_query, $query);
    $this->preQuery($db_query, $query);

    $parameters = \Drupal::request()->query->all();
    if (!empty($parameters['lat']) && !empty($parameters['lon'])) {
      // 6371 km
      // 3958 mile
      $db_query->addExpression('( 6371 * acos( cos( radians(:lat) ) * cos( radians( location.lat ) )
      * cos( radians( location.lon ) - radians(:lon) ) + sin( radians(:lat) )
      * sin( radians( location.lat ) ) ) )', 'distance', [
        ':lat' => $parameters['lat'],
        ':lon' => $parameters['lon'],
      ]);
      $db_info = $this->getIndexDbInfo($query->getIndex());

      $db_query->addJoin('LEFT OUTER', $db_info['index_table'], 'location', 't.item_id = location.item_id');
      $db_query->orderBy('distance', 'ASC');
      if (!empty($parameters['distance'])) {
        $db_query->where('( 6371 * acos( cos( radians(:lat) ) * cos( radians( location.lat ) )
      * cos( radians( location.lon ) - radians(:lon) ) + sin( radians(:lat) )
      * sin( radians( location.lat ) ) ) ) < :distance', [
          ':lat' => $parameters['lat'],
          ':lon' => $parameters['lon'],
          ':distance' => $parameters['distance'],
        ]);
      }
      if ($add_to_group_by) {
        $db_query->groupBy('location.lat');
        $db_query->groupBy('location.lon');
      }
    }
    return $db_query;
  }

  /**
   * {@inheritdoc}
   */
  public function search(QueryInterface $query) {
    $this->ignored = $this->warnings = [];
    $index = $query->getIndex();
    $db_info = $this->getIndexDbInfo($index);

    if (!isset($db_info['field_tables'])) {
      $index_id = $index->id();
      throw new SearchApiException("No field settings saved for index with ID '$index_id'.");
    }
    $fields = $this->getFieldInfo($index);
    $fields['search_api_id'] = [
      'column' => 'item_id',
    ];

    $db_query = $this->createDbQuery($query, $fields);

    $results = $query->getResults();

    $skip_count = $query->getOption('skip result count');
    $count = NULL;
    if (!$skip_count) {
      $count_query = $db_query->countQuery();
      $count = $count_query->execute()->fetchField();
      $results->setResultCount($count);
    }

    // With a "min_count" of 0, some facets can even be available if there are
    // no results.
    if ($query->getOption('search_api_facets')) {
      $facets = $this->getFacets($query, clone $db_query, $count);
      $results->setExtraData('search_api_facets', $facets);
    }
    // Everything else can be skipped if the count is 0.
    if ($skip_count || $count) {
      $query_options = $query->getOptions();
      if (isset($query_options['offset']) || isset($query_options['limit'])) {
        $offset = isset($query_options['offset']) ? $query_options['offset'] : 0;
        $limit = isset($query_options['limit']) ? $query_options['limit'] : 1000000;
        $db_query->range($offset, $limit);
      }

      $this->setQuerySort($query, $db_query, $fields);
      try {
        $result = $db_query->execute();

      }
      catch (\Exception $exception) {
        \Drupal::logger('location_near_by')->error($exception->getMessage());
        throw $exception;
      }

      foreach ($result as $row) {
        $item = $this->getFieldsHelper()->createItem($index, $row->item_id);
        $item->setScore($row->score / self::SCORE_MULTIPLIER);

        if (property_exists($row, 'distance')) {
          // Add distance calculated for each item.
          $item->distance = $row->distance;
        }
        $results->addResultItem($item);
      }
      if ($skip_count && !empty($item)) {
        $results->setResultCount(1);
      }
    }

    // Add additional warnings and ignored keys.
    $metadata = [
      'warnings' => 'addWarning',
      'ignored' => 'addIgnoredSearchKey',
    ];
    foreach ($metadata as $property => $method) {
      foreach (array_keys($this->$property) as $value) {
        $results->$method($value);
      }
    }
  }

}
