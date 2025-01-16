<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\community_post\Normalizer\node\AmenitiesNodeNormalizer;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Entity\EntityInterface;
use Drupal\flag\FlagInterface;
use Drupal\marvista_api\AccessCheck;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides FileUpload.
 *
 * @RestResource(
 *   id = "community_post_resource",
 *   label = @Translation("Post Resource"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/community/{id}",
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/community/{type}"
 *   }
 * )
 */
class PostResource extends ResourceBase {

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
  public function post(Request $request, $version, $lang, $type) {
    $data = Json::decode($request->getContent());
    $response = [];
    if (empty($data['caption'])) {
      $response['message'] = 'Invalid caption';
      $response['status'] = 400;
      return ModifiedResourceResponse::create($response, 400);
    }
//    if (empty($data['image'])) {
//      $response['message'] = 'Invalid image';
//      $response['status'] = 400;
//      return ModifiedResourceResponse::create($response, 400);
//    }
    $entity_type = CommunityPost::TYPE_PHOTO;
    if (CommunityPost::TYPE_RATING == $type) {
      if (!array_key_exists('rating', $data)) {
        $response['message'] = 'Invalid rating';
        $response['status'] = 400;
        return ModifiedResourceResponse::create($response, 400);
      }
      $entity_type = CommunityPost::TYPE_RATING;
    }
    $post = CommunityPost::create([
      'type' => $entity_type,
    ]);
    $post->set('name', 'Post ' . date('dmY') . ' of ' . \Drupal::currentUser()
        ->id());
    $post->setOwnerId(\Drupal::currentUser()->id());
    $post->setFieldByJson($data);
    $post->setApprovalState('draft');
    $post->setPublished(FALSE);
    try {
      $post->save();
      $response['data'] = [
        'id' => $post->id(),
      ];
      $response['status'] = 201;
      $response['message'] = 'Created post';
    }
    catch (\Exception $e) {
      $response['message'] = $e->getMessage();
      $response['status'] = 500;
    }
    return new ModifiedResourceResponse($response, $response['status']);
  }

  public function get(Request $request, $version, $lang, $id) {
    $params = $request->query->all();
    $response = [];

    if (empty($id)) {
      $response['message'] = 'Invalid id';
      $response['status'] = 400;
      return ModifiedResourceResponse::create($response, 400);
    }

    $post = CommunityPost::load($id);
    if (empty($post)) {
      $response['message'] = 'Invalid id';
      $response['status'] = 400;
      return ModifiedResourceResponse::create($response, 400);
    }

    $flag_service = \Drupal::service('flag');
    /** @var \Drupal\flag\FlagService $flag */
    $flag = $flag_service->getFlagById('community_post_favorite');
    $users = $this->getFlaggingUsers($post, $flag);
    $favourite_list = [];
    /** @var \Drupal\user\Entity\User $user */
    foreach ($users as $user) {
      $username = $user->field_first_name->value . ' ' . $user->field_last_name->value;
      $photo = AmenitiesNodeNormalizer::serializeFileField($user, 'user_picture', FALSE);
      $favourite_list[] = [
        'username' => $username,
        'id' => $user->id(),
        'photo' => $photo['url'] ? $photo['url'] : null,
      ];
    }
    $post->favourite_list = $favourite_list;

    $response = new ResourceResponse([
      'status' => 200,
      'data' => $post,
      'message' => 'ok',
    ], 200);
    $response->addCacheableDependency([$post, $params]);
    $response->setMaxAge(3600);

    return $response;
  }

  /**
   * Get favorite user.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   Drupal\Core\Entity\EntityInterface.
   * @param \Drupal\flag\FlagInterface|null $flag
   *   Drupal\flag\FlagInterface.
   *
   * @return \Drupal\Core\Entity\EntityInterface[]
   *   Drupal\Core\Entity\EntityInterface.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function getFlaggingUsers(EntityInterface $entity, FlagInterface $flag = NULL) {
    $entity_type_manager = \Drupal::entityTypeManager();
    $query = $entity_type_manager->getStorage('flagging')->getQuery();
    $query->condition('entity_type', $entity->getEntityTypeId())
      ->condition('entity_id', $entity->id());

    if (!empty($flag)) {
      $query->condition('flag_id', $flag->id());
    }
    $query->range(0, 5);
    $query->sort('created', 'desc');
    $ids = $query->execute();
    $flaggings = $entity_type_manager->getStorage('flagging')
      ->loadMultiple($ids);

    $user_ids = [];
    foreach ($flaggings as $flagging) {
      $user_ids[] = $flagging->get('uid')->first()->getValue()['target_id'];
    }

    return $entity_type_manager->getStorage('user')
      ->loadMultiple($user_ids);
  }

}
