<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\comment\Entity\Comment;
use Drupal\community_post\Entity\CommunityPost;
use Drupal\Component\Serialization\Json;
use Drupal\marvista_api\AccessCheck;
use Drupal\message\Entity\Message;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides Post Comment Resource.
 *
 * @RestResource(
 *   id = "community_post_comment_resource",
 *   label = @Translation("Post Comment Resource"),
 *   uri_paths = {
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/comment"
 *   }
 * )
 */
class PostCommentResource extends ResourceBase {

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
   * @param null|string $version
   *   Version.
   * @param null|string $lang
   *   Language.
   *
   * @return \Drupal\rest\ModifiedResourceResponse
   *   Drupal\rest\ModifiedResourceResponse.
   */
  public function post(Request $request, $version = NULL, $lang = NULL) {
    $data = Json::decode($request->getContent());
    $response = [];
    if (empty($data['post_id'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid post_id',
        'status' => 400,
      ], 400);
    }
    $post = CommunityPost::load(intval($data['post_id']));
    if (empty($post)) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid post_id',
        'status' => 400,
      ], 400);
    }
    if (empty($data['comment'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid message',
        'status' => 400,
      ], 400);
    }

    $comment = Comment::create([
      'type' => 'community_post_comment',
      'entity_id' => $post->id(),
      'entity_type' => 'community_post',
      'field_name' => 'field_comment',
      'comment_body' => $data['comment'],
      'status' => TRUE,
    ]);

    try {
      $comment->save();
//      self::createNotification($post, $comment);

      $response['data'] = [
        'id' => $comment->id(),
      ];
      $response['status'] = 201;
      $response['message'] = 'Created comment';
    }
    catch (\Exception $e) {
      $response['message'] = $e->getMessage();
      $response['status'] = 500;
    }
    return new ModifiedResourceResponse($response, $response['status']);
  }

  /**
   * Create notification for comment.
   *
   * @param \Drupal\community_post\Entity\CommunityPost $post
   *   Drupal\community_post\Entity\CommunityPost.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public static function createNotification(CommunityPost $post, Comment $comment) {
    $owner_id = $post->getOwnerId();
    if ($owner_id == \Drupal::currentUser()->id()) {
      return;
    }
    $message = Message::create([
      'template' => 'new_comment',
      'uid' => $owner_id,
      'ref_entity_id' => $comment->id(),
      'ref_entity_type' => $comment->getEntityTypeId(),
      'ref_entity_bundle' => $comment->bundle(),
      'message_channel' => 'push_notification',
      'field_action' => 'new_comment',
      'field_ref_user' => \Drupal::currentUser()->id(),
      'field_post' => $post->id(),
    ]);
    $message->save();
    $notifier = \Drupal::service('message_notify.sender');
    $notifier->send($message);
  }

}
