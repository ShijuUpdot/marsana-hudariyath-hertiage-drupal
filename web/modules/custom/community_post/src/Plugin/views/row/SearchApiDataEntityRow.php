<?php

namespace Drupal\community_post\Plugin\views\row;

use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Language\LanguageManagerInterface;
use Drupal\paragraphs\ParagraphInterface;
use Drupal\rest\Plugin\views\row\DataEntityRow;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Plugin which displays entities as raw data.
 *
 * @ingroup views_row_plugins
 *
 * @ViewsRow(
 *   id = "search_api_data_entity",
 *   title = @Translation("Node: Search API Data entity."),
 *   help = @Translation("Node: Search API Data entity."),
 *   display_types = {"data"}
 * )
 */
class SearchApiDataEntityRow extends DataEntityRow {

  protected $requestStack;
  protected $request;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    array $plugin_definition,
    EntityTypeManagerInterface $entity_type_manager,
    LanguageManagerInterface $language_manager,
    EntityRepositoryInterface $entity_repository,
    RequestStack $requestStack
  ) {
    parent::__construct(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $entity_type_manager,
      $language_manager,
      $entity_repository
    );
    $this->requestStack = $requestStack;
    $this->request = $requestStack->getCurrentRequest();
  }

  /**
   * {@inheritdoc}
   */
  public static function create(
    ContainerInterface $container,
    array $configuration,
    $plugin_id,
    $plugin_definition
  ) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('entity_type.manager'),
      $container->get('language_manager'),
      $container->get('entity.repository'),
      $container->get('request_stack')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function render($row) {
    /** @var  \Drupal\search_api\Item\Item $item */
    $item = $row->_item;
    /** @var \Drupal\Core\Entity\EntityInterface $entity */
    $entity = $item->getOriginalObject()
      ->getValue();
    if ($entity instanceof ParagraphInterface && $entity->getType() == 'location_details') {
      return $entity;
    }
    return $this->getEntityTranslation($item->getOriginalObject()
      ->getValue(), $row);
  }

  /**
   * {@inheritdoc}
   */
  public function getEntityTypeId() {
//    dump($this);
    return 'node';
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    parent::query();
    $params = $this->request->query->all();
    if (!empty($params['sort'])) {
      /** @var \Drupal\search_api\Plugin\views\query\SearchApiQuery $query */
      $query = $this->view->getQuery();

      foreach ($params['sort'] as $key => $sort) {
        $query->sort($key, $sort);
      }
    }
  }

}
