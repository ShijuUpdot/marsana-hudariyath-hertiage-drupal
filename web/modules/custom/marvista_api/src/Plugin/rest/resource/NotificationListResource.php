<?php

namespace Drupal\marvista_api\Plugin\rest\resource;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\flag\FlagInterface;
use Drupal\marvista_api\AccessCheck;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\user\Entity\User;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides FileUpload.
 *
 * @RestResource(
 *   id = "notification_list_resource",
 *   label = @Translation("Notification list"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/notifications"
 *   }
 * )
 */
class NotificationListResource extends ResourceBase {


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
    $collection->addRequirements(['_custom_access' => AccessCheck::class . '::access']);
    return $collection;
  }

  /**
   * {@inheritDoc}
   */
  public function get(Request $request, $version, $lang) {
    $params = $request->query->all();
    $results = $this->loadMessageByQueryString($params);

    $response = new ResourceResponse([
      'status' => 200,
      'data' => array_values($results),
      'message' => 'ok',
    ], 200);
    $response->addCacheableDependency([$params]);
    $response->setMaxAge(3600);
    return $response;
  }

  /**
   * Load post by query string.
   *
   * @param array $params
   *
   * @return array
   */
  protected function loadMessageByQueryString(array $params) {
    $uid = \Drupal::currentUser()->id();
    $list_ignore = [];
    $user = User::load($uid);
    if ( !empty($uid) && $user->hasField('field_action') ) {
      $list_action = $user->get('field_action')->getString();
      if($list_action) {
        $list_action = json_decode($list_action);
        foreach ($list_action as $item) {
          $list_ignore[] = $item->message_id;
        }
      }
    }

    $entity_storage = $this->entityTypeManager->getStorage('message');
    $query = $entity_storage->getQuery();
    if($list_ignore){
      $query->condition('mid', $list_ignore, 'NOT IN');
    }

    foreach ($params['filter'] as $key => $filter) {
      if (!empty($filter['operator'])) {
        $query->condition($key, $filter['value'], $filter['operator']);
      }
      else {
        $query->condition($key, $filter['value']);
      }
    }
    $group = $query->orConditionGroup();

    if ($uid != 0) {
      $group->condition('uid', $uid);
    }
    $group->condition('uid', 0);

    $query->condition($group);

    $limit = !empty($params['limit']) ? intval($params['limit']) : 20;

    if($params['sort']){
      foreach ($params['sort'] as $key => $sort) {
        $query->sort($key, $sort);
      }
    } else {
      // Set Default
      $query->sort('created', 'DESC');
    }
    $query->pager($limit);
    $results = $entity_storage->loadMultiple($query->execute());
    return $results;
  }

}
