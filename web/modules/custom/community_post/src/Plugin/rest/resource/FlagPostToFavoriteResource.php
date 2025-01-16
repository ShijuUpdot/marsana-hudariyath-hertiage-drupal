<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\Component\Serialization\Json;
use Drupal\flag\Entity\Flag;
use Drupal\marvista_api\AccessCheck;
use Drupal\node\Entity\Node;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides FlagPostToFavoriteResource.
 *
 * @RestResource(
 *   id = "community_post_favorite_resource",
 *   label = @Translation("Post favorite Resource"),
 *   uri_paths = {
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/favourite"
 *   }
 * )
 */
class FlagPostToFavoriteResource extends ResourceBase {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $collection = parent::routes();
    $collection->addRequirements(['_custom_access' => AccessCheck::class . '::access']);
    return $collection;
  }

  /**
   * Responds to entity POST requests.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Symfony\Component\HttpFoundation\Request.
   * @param null $version
   *   Version.
   * @param null $lang
   *   Language.
   *
   * @return \Drupal\rest\ModifiedResourceResponse
   *   Drupal\rest\ModifiedResourceResponse.
   */
  public function post(Request $request, $version, $lang) {
    $data = Json::decode($request->getContent());
    $response = [];
    if (empty($data['id'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid id',
        'status' => 400,
      ], 400);
    }
    if (empty($data['action'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid action',
        'status' => 400,
      ], 400);
    }
    if (empty($data['entity_type'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid entity_type',
        'status' => 400,
      ], 400);
    }
    $account = \Drupal::currentUser();

    $experiences = NULL;
    if ('community_post' == $data['entity_type']) {
      $entity = CommunityPost::load(intval($data['id']));
      $flag_id = 'community_post_favorite';
      if ($entity->hasField(CommunityPost::FIELD_EXPERIENCE)) {
        $experiences = $entity->get(CommunityPost::FIELD_EXPERIENCE)
          ->referencedEntities();
      }
    }

    if ('node' == $data['entity_type']) {
      $entity = Node::load(intval($data['id']));
      $flag_id = 'node_favorite';
      if ($entity->hasField('field_amenity_experience')) {
        $experiences = $entity->get('field_amenity_experience')
          ->referencedEntities();
      }
    }

    if (empty($entity) || empty($flag_id)) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid entity or flag id',
        'status' => 400,
      ], 400);
    }

    try {
      /** @var \Drupal\flag\FlagService $flag_service */
      $flag_service = \Drupal::service('flag');
      $flag = $flag_service->getFlagById($flag_id);
      $flagging = $flag_service->getFlagging($flag, $entity, $account);
      if ($data['action'] == 'add' && !$flagging) {
        $flagging = $flag_service->flag($flag, $entity, $account);
        if (!empty($experiences)) {
          $flagging->set('field_experience', $experiences);
          $flagging->save();
        }
      }
      elseif ($data['action'] == 'remove' && $flagging) {
        $flag_service->unflag($flag, $entity, $account);
      }
      $response['status'] = 200;
      $response['message'] = 'success';
      if (1 == $request->get('debug')) {
        $response['data'] = ['entity' => $entity];
      }
    }
    catch (\Exception $e) {
      $response['message'] = $e->getMessage();
      $response['status'] = 500;
    }
    return new ModifiedResourceResponse($response, $response['status']);
  }

}
