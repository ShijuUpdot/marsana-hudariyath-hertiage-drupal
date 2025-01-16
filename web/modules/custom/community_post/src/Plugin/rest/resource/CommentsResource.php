<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\comment\Entity\Comment;
use Drupal\community_post\Entity\CommunityPost;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Routing\AccessAwareRouterInterface;
use Drupal\marvista_api\AccessCheck;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides Comments Resource.
 *
 * @RestResource(
 *   id = "get_comment_of_a_community",
 *   label = @Translation("Get comment of a post"),
 *   uri_paths = {
 *     "canonical" = "/json-api/{version}/{lang}/comments",
 *   }
 * )
 */
class CommentsResource extends ResourceBase {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $collection = parent::routes();
    $collection->addRequirements(['_custom_access' => AccessCheck::class . '::anonymousAccess']);
    return $collection;
  }

  /**
   * Get comments.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Symfony\Component\HttpFoundation\Request.
   *
   * @return \Drupal\rest\ResourceResponse
   *   Drupal\rest\ModifiedResourceResponse.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function get(Request $request) {
    $params = $request->query->all();
    $entity_storage = \Drupal::entityTypeManager()->getStorage('comment');
    $query = $entity_storage->getQuery();
    foreach ($params['filter'] as $key => $filter) {
      if (!empty($filter['operator'])) {
        $query->condition($key, $filter['value'], $filter['operator']);
      }
      else {
        $query->condition($key, $filter['value']);
      }
    }
    $limit = !empty($params['limit']) ? intval($params['limit']) : 20;

    foreach ($params['sort'] as $key => $sort) {
      $query->sort($key, $sort);
    }

    $query->pager($limit);
    $results = $entity_storage->loadMultiple($query->execute());
    $output = [
      'data' => [
        'result' => array_values($results),
      ],
      'status' => 200,
    ];
    $response = new ResourceResponse($output, 200);
    $response->addCacheableDependency($params);
    $response->setMaxAge(3600);
    return $response;
  }

}
