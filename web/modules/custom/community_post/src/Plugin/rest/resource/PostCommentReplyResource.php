<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\comment\Entity\Comment;
use Drupal\community_post\Entity\CommunityPost;
use Drupal\Component\Serialization\Json;
use Drupal\marvista_api\AccessCheck;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides Post Comment Reply.
 *
 * @RestResource(
 *   id = "community_post_comment_reply_resource",
 *   label = @Translation("Post Comment Reply Resource"),
 *   uri_paths = {
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/comment/reply"
 *   }
 * )
 */
class PostCommentReplyResource extends ResourceBase {

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
    if (empty($data['comment_id'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid comment_id',
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
    $comment_parent = Comment::load(intval($data['comment_id']));
    if (empty($comment_parent)) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid comment_id',
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
      'pid' => $comment_parent->id(),
      'status' => TRUE,
    ]);

    try {
      $comment->save();
      PostCommentResource::createNotification($post, $comment);
      $response['data'] = [
        'id' => $comment->id(),
        'parent_id' => $comment_parent->id(),
      ];
      $response['status'] = 201;
      $response['message'] = 'Created a reply';
    }
    catch (\Exception $e) {
      $response['message'] = $e->getMessage();
      $response['status'] = 500;
    }
    return new ModifiedResourceResponse($response, $response['status']);
  }

}
