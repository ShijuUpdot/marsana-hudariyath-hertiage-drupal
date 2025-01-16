<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Entity\EntityInterface;
use Drupal\flag\FlagInterface;
use Drupal\marvista_api\AccessCheck;
use Drupal\node\Entity\Node;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides FileUpload.
 *
 * @RestResource(
 *   id = "asset_node_resource",
 *   label = @Translation("Asset Resource"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/asset-details/{id}"
 *   }
 * )
 */
class AssetNodeResource extends ResourceBase {

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
   * @param int $id
   *   Int.
   *
   * @return array|\Drupal\rest\ModifiedResourceResponse|\Drupal\rest\ResourceResponse
   *   Array|\Drupal\rest\ModifiedResourceResponse|\Drupal\rest\ResourceResponse.
   */
  public function get(Request $request, $version, $lang, $id) {
    $response = [];
    $params = $request->query->all();
    if (empty($id)) {
      $response['message'] = 'Invalid id';
      $response['status'] = 400;
      return ModifiedResourceResponse::create($response, 400);
    }

    $asset = Node::load($id);
    if ($asset->hasTranslation($lang)) {
      $asset = $asset->getTranslation($lang);
    }
    if (empty($asset)) {
      $response['message'] = 'Invalid id';
      $response['status'] = 400;
      return ModifiedResourceResponse::create($response, 400);
    }


    $response = new ResourceResponse([
      'status' => 200,
      'data' => $asset,
      'message' => 'ok',
    ], 200);
    $response->addCacheableDependency([$asset, $params]);
    $response->setMaxAge(3600);

    return $response;
  }

}
