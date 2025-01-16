<?php

namespace Drupal\community_post\Normalizer;

use Drupal\comment\Entity\Comment;
use Drupal\community_post\Entity\CommunityPost;
use Drupal\community_post\Normalizer\node\AmenitiesNodeNormalizer;
use Drupal\Core\TypedData\ComplexDataInterface;
use Drupal\Core\TypedData\TypedDataInternalPropertiesHelper;
use Drupal\jsonapi\ResourceResponse;
use Drupal\jsonapi\Serializer\Serializer;
use Drupal\serialization\Normalizer\EntityNormalizer;
use Drupal\user\Entity\User;

/**
 * Class CommentNormalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class CommentNormalizer extends EntityNormalizer {

  protected $supportedInterfaceOrClass = 'Drupal\comment\CommentInterface';

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    if ($format != 'json') {
      return parent::normalize($object, $format, $context);
    }
    $serialize_reply = [];
    $pid = $object->get('pid')->getString();

    if (intval($pid) == 0) {
      $entity_storage = \Drupal::entityTypeManager()->getStorage('comment');
      $query = $entity_storage->getQuery();
      $query->condition('pid', $object->id());
      $query->sort('created', 'desc');
      $query->range(0, 5);
      $reply_ids = $query->execute();
      if (!empty($reply_ids)) {
        $reply = $entity_storage->loadMultiple($query->execute());
        /** @var \Drupal\jsonapi\Serializer\Serializer $serializer */
        $serializer = \Drupal::service('serializer');
        $serialize_reply = $serializer->normalize(array_values($reply), 'json');
      }
    }
    $account = \Drupal::currentUser();
    $flagging = FALSE;
    if ($account->isAuthenticated()) {
      $flag_service = \Drupal::service('flag');
      $flag = $flag_service->getFlagById('like_comment');
      $flagging = $flag_service->getFlagging($flag, $object, $account);
    }

    $user = user_load_by_mail($object->getAuthorName());
    if($user){
      $username = $user->field_first_name->value . ' ' . $user->field_last_name->value;
      if(empty(trim($user->field_first_name->value))){
        $username = $user->field_full_name->value;
      }
      $photo = AmenitiesNodeNormalizer::serializeFileField($user, 'user_picture', FALSE);
    }

    return [
      'id' => intval($object->id()),
      'comment' => trim($object->get('comment_body')->getString()),
      'create_date_time' => date('d/m/Y h:i:s', $object->getCreatedTime()),
      'created' => $object->getCreatedTime(),
      'username' => $username,
      'liked' => boolval($flagging),
      'replied' => $serialize_reply,
      'pid' => $pid ? intval($pid) : 0,
      'image' => $photo['url'] ? $photo['url'] : null,
    ];
  }

}
