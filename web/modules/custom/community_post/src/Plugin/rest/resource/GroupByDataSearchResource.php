<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\marvista_api\AccessCheck;
use Drupal\recent_search_log\Entity\RecentSearchEntity;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\views\Views;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides GroupByDataSearchResource.
 *
 * @RestResource(
 *   id = "search_with_group_resource",
 *   label = @Translation("Search Group by Resource"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/search/group-by"
 *   }
 * )
 */
class GroupByDataSearchResource extends ResourceBase {

  /**
   * Drupal\Core\Entity\EntityTypeManagerInterface.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   *   Drupal\Core\Entity\EntityTypeManagerInterface.
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    array $serializer_formats,
    LoggerInterface $logger,
    EntityTypeManagerInterface $entityTypeManager
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $serializer_formats, $logger);

    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->getParameter('serializer.formats'),
      $container->get('logger.factory')->get('rest'),
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $collection = parent::routes();
    $collection->addRequirements(['_custom_access' => AccessCheck::class . '::anonymousAccess']);
    return $collection;
  }

  /**
   * Create recent search.
   *
   * @param string $content
   *   Search content.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  private static function createRecentSearchContent($content) {
    $user = \Drupal::currentUser();
    $entity = RecentSearchEntity::create([
      'content' => $content,
      'name' => 'Recent search of: ' . $user->getDisplayName(),
      'page' => 'home',
      'user_id' => $user->id(),
    ]);
    $entity->save();
  }

  /**
   * Get asset details.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Symfony\Component\HttpFoundation\Request.
   * @param string $version
   *   String.
   * @param string $lang
   *   String.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   Symfony\Component\HttpFoundation\JsonResponse.
   *
   * @throws \Drupal\search_api\SearchApiException
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function get(Request $request, $version, $lang) {
    $params = $request->query->all();

    if (!empty($params['experience_id'])) {
      $experience_id = !empty($params['experience_id']) ? $params['experience_id'] : NULL;
      unset($params['experience_id']);
    }
    $event_params = ['node_type' => 'event_details'] + $params;
    if (!empty($event_params['post_type'])) {
      unset($event_params['post_type']);
    }
    $community = [
        'post_type' => [
          'photo',
          'review',
        ],
      ] + $params;
    if (!empty($community['node_type'])) {
      unset($community['node_type']);
    }

    $amenities_params = ['node_type' => 'amenities_details'] + $params;
    if (!empty($amenities_params['post_type'])) {
      unset($amenities_params['post_type']);
    }

    if (!empty($experience_id)) {
      $event_params['node_experience_id'] = $experience_id;
      $amenities_params['node_experience_id'] = $experience_id;
      $community['post_experience_id'] = $experience_id;
    }
    if (!empty($lang)) {
      $community['post_langcode'] = $lang;
      $event_params['node_langcode'] = $lang;
      $amenities_params['node_langcode'] = $lang;
    }

    if($params['type'] == 'amenities_details'){
      $output = [
        'data' => self::getDataContent($amenities_params),
        'status' => 200,
      ];
    } else {
      $output = [
        'data' => [
          'events' => self::getDataContent($event_params),
          'amenities' => self::getDataContent($amenities_params),
          'communities' => self::getDataContent($community),
        ],
        'status' => 200,
      ];
    }
    if (!empty($params['content'])) {
      try {
        self::createRecentSearchContent($params['content']);
      }
      catch (\Exception $e) {
        \Drupal::logger('search_homepage')->error(var_export($e, TRUE));
      }
    }
    $response = new JsonResponse($output);
    return $response;
  }

  /**
   * Get events.
   *
   * @param array $params
   *   Argument.
   *
   * @return array
   *   Result.
   *
   * @throws \Drupal\search_api\SearchApiException
   */
  public static function getDataContent(array $params = []) {
    if (isset($params['node_type'])) {
      $params['search_api_datasource'] = 'entity:node';
    }
    elseif (isset($params['post_type'])) {
      $params['search_api_datasource'] = 'entity:community_post';
    }
    $view = Views::getView('search');
    $view->setDisplay('rest_export_1');
    $view->setExposedInput($params);
    /** @var \Drupal\search_api\Plugin\views\query\SearchApiQuery $query */
    $query = $view->getQuery();
    if (!empty($params['node_type'])) {
      $query->addCondition('node_type', $params['node_type'], 'IN');
    }
    elseif (!empty($params['post_type'])) {
      $query->addCondition('post_type', $params['post_type'], 'IN');
    }
    if (!empty($params['node_experience_id'])) {
      $query->addCondition('node_experience_id', $params['node_experience_id'], '=');
    }
    if (!empty($params['post_experience_id'])) {
      $query->addCondition('post_experience_id', $params['post_experience_id'], '=');
    }
    if (!empty($params['post_langcode'])) {
      $query->addCondition('post_langcode', $params['post_langcode'], '=');
    }
    if (!empty($params['node_langcode'])) {
      $query->addCondition('node_langcode', $params['node_langcode'], '=');
    }


    $view->execute();
    $rows = [];
    foreach ($view->result as $row_index => $row) {
      /** @var  \Drupal\search_api\Item\Item $item */
      $item = $row->_item;
      $entity = $item->getOriginalObject()
        ->getValue();
      $rows[] = $entity;
    }
    /** @var \Drupal\jsonapi\Serializer\Serializer $serializer */
    $serializer = \Drupal::service('serializer');
    $data = $serializer->normalize($rows, 'json');
    return $data;
  }

}
