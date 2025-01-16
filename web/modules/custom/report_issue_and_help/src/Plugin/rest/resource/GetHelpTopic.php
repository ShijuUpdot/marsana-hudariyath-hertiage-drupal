<?php

namespace Drupal\report_issue_and_help\Plugin\rest\resource;

use Drupal\community_post\Plugin\rest\resource\GetPostsResource;
use Drupal\marvista_api\AccessCheck;
use Drupal\rest\ResourceResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides FileUpload.
 *
 * @RestResource(
 *   id = "get_help_topic_resource",
 *   label = @Translation("Help topic"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/taxonomy/help-topic"
 *   }
 * )
 */
class GetHelpTopic extends GetPostsResource {

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
    $query = $this->buildEntityQuery('taxonomy_term', $params);
    $query->condition('vid', 'help_topic');
    $query->condition('status', 1);
    $storage = $this->entityTypeManager->getStorage('taxonomy_term');
    $results =  $storage->loadMultiple($query->execute());
    $output = [
      'data' => array_values($results),
      'status' => 200,
    ];
    $response = new ResourceResponse($output, 200);
    $response->addCacheableDependency($params);
    $response->setMaxAge(3600);

    return $response;
  }

}
