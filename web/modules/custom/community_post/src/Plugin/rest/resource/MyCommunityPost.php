<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\Core\Entity\Query\QueryInterface;
use Drupal\rest\ResourceResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides FileUpload.
 *
 * @RestResource(
 *   id = "get_my_community_post_resource",
 *   label = @Translation("Get My Community Post Resource"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/user/community"
 *   }
 * )
 */
class MyCommunityPost extends GetPostsResource {

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
    /** @var \Symfony\Component\Serializer\Serializer $serialize */
    $serialize = \Drupal::service('serializer');
    $context = ['fields' => ['created']];
    $output = [
      'data' => $serialize->normalize(array_values($results), 'json', $context),
      'status' => 200,
    ];
    $response = new JsonResponse($output, 200);
    //    $response->addCacheableDependency($params);
    //    $response->setMaxAge(3600);

    return $response;
  }

  /**
   * {@inheritdoc}
   */
  protected function buildStateFilter(QueryInterface $query, array $params) {
    $query->condition('user_id', \Drupal::currentUser()->id());
    return $query;
  }

}
