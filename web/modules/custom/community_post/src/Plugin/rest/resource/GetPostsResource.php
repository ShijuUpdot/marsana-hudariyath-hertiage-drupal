<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Entity\Query\QueryInterface;
use Drupal\flag\FlagInterface;
use Drupal\marvista_api\AccessCheck;
use Drupal\node\Entity\Node;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides FileUpload.
 *
 * @RestResource(
 *   id = "get_community_post_resource",
 *   label = @Translation("Get Community Post Resource"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/community"
 *   }
 * )
 */
class GetPostsResource extends ResourceBase {

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
   * Get asset details.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Symfony\Component\HttpFoundation\Request.
   * @param string $version
   *   String.
   * @param string $lang
   *   String.
   *
   * @return array|\Drupal\rest\ModifiedResourceResponse|\Drupal\rest\ResourceResponse
   *   Array|\Drupal\rest\ModifiedResourceResponse|\Drupal\rest\ResourceResponse.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function get(Request $request, $version, $lang) {
    $params = $request->query->all();
    $results = $this->loadPostByQueryString($params);
    $trending = $this->loadTrendingPost($params);
    $output = [
      'data' => [
        'trending_post' => array_values($trending),
        'all_post' => array_values($results),
      ],
      'status' => 200,
    ];
    $response = new ResourceResponse($output, 200);
    $response->addCacheableDependency($params);
    $response->setMaxAge(3600);

    return $response;
  }

  public function loadTrendingPost(array $params) {
    $list_remove = null;
    $account = \Drupal::currentUser();
    if ($account->isAuthenticated()) {
      $connection = \Drupal::database();
      $query = $connection->select('flagging', 'f');
      $query->fields('f', ['id', 'entity_id'] );
      $query->condition('flag_id', 'users_removed_post');
      $query->condition('entity_type', 'community_post');
      $query->condition('uid', $account->id());
      $entity_ids = $query->execute();
      if (count($entity_ids) > 0) {
        foreach ($entity_ids as $item) {
          $list_remove[] = $item->entity_id;
        }
      }
    }

    $entity_storage = $this->entityTypeManager->getStorage('community_post');
    $query = $entity_storage->getQuery();
    $query->condition(CommunityPost::FIELD_APPROVAL_STATE, CommunityPost::STATE_APPROVED);
    if($list_remove){
      $query->condition('id', $list_remove, 'NOT IN');
    }
    foreach ($params['filter'] as $key => $filter) {

      if($key == 'field_place'){
        $query->condition($key, $filter['value']);
      }

    }

    $query->range(0, 3);
    $query->sort('created', 'desc');
    $results = $entity_storage->loadMultiple($query->execute());
    return $results;

  }

  /**
   * Build entity query.
   *
   * @param string $entity_type_id
   *   Entity type.
   * @param array $params
   *   Param.
   *
   * @return \Drupal\Core\Entity\Query\QueryInterface
   *   Drupal\Core\Entity\Query\QueryInterface.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  protected function buildEntityQuery($entity_type_id, array $params) {
    $entity_storage = $this->entityTypeManager->getStorage($entity_type_id);
    $query = $entity_storage->getQuery();
    $query = $this->buildFilter($query, $params);
    $query = $this->buildPager($query, $params);
    $query = $this->buildSort($query, $params);
    return $query;
  }

  /**
   * Load post by query string.
   *
   * @param array $params
   *   Param.
   *
   * @return array
   *   Result.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  protected function loadPostByQueryString(array $params) {
    $entity_storage = $this->entityTypeManager->getStorage('community_post');
    $query = $this->buildEntityQuery('community_post', $params);
    $query = $this->buildStateFilter($query, $params);
    $results = $entity_storage->loadMultiple($query->execute());
    return $results;
  }

  /**
   * Build filter.
   *
   * @param \Drupal\Core\Entity\Query\QueryInterface $query
   *   Drupal\Core\Entity\Query\QueryInterface.
   * @param array $params
   *   Parameters.
   *
   * @return \Drupal\Core\Entity\Query\QueryInterface
   *   Drupal\Core\Entity\Query\QueryInterface.
   */
  protected function buildFilter(QueryInterface $query, array $params) {
    foreach ($params['filter'] as $key => $filter) {
      if (!empty($filter['operator'])) {
        $query->condition($key, $filter['value'], $filter['operator']);
      }
      else {
        $query->condition($key, $filter['value']);
      }
    }
    return $query;
  }

  /**
   * Build filter.
   *
   * @param \Drupal\Core\Entity\Query\QueryInterface $query
   *   Drupal\Core\Entity\Query\QueryInterface.
   * @param array $params
   *   Parameters.
   *
   * @return \Drupal\Core\Entity\Query\QueryInterface
   *   Drupal\Core\Entity\Query\QueryInterface.
   */
  protected function buildPager(QueryInterface $query, array $params) {
    $limit = !empty($params['limit']) ? intval($params['limit']) : 20;
    $query->pager($limit);
    return $query;
  }

  /**
   * Build filter.
   *
   * @param \Drupal\Core\Entity\Query\QueryInterface $query
   *   Drupal\Core\Entity\Query\QueryInterface.
   * @param array $params
   *   Parameters.
   *
   * @return \Drupal\Core\Entity\Query\QueryInterface
   *   Drupal\Core\Entity\Query\QueryInterface.
   */
  protected function buildSort(QueryInterface $query, array $params) {
    foreach ($params['sort'] as $key => $sort) {
      $query->sort($key, $sort);
    }
    return $query;
  }

  /**
   * Build filter.
   *
   * @param \Drupal\Core\Entity\Query\QueryInterface $query
   *   Drupal\Core\Entity\Query\QueryInterface.
   * @param array $params
   *   Parameters.
   *
   * @return \Drupal\Core\Entity\Query\QueryInterface
   *   Drupal\Core\Entity\Query\QueryInterface.
   */
  protected function buildStateFilter(QueryInterface $query, array $params) {
    $query->condition(CommunityPost::FIELD_APPROVAL_STATE, CommunityPost::STATE_APPROVED);
    return $query;
  }

}
