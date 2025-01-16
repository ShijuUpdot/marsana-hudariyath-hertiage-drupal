<?php

namespace Drupal\marvista_api\Normalizer;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\message\Entity\Message;
use Drupal\node\Entity\Node;
use Drupal\serialization\Normalizer\EntityNormalizer;
use Drupal\user\Entity\User;

/**
 * Class Community Post Normalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class MessageNormalizer extends EntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\message\entity\Message';

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {

    if ($format != 'json') {
      return parent::normalize($object, $format, $context);
    }
    /** @var \Drupal\message\Entity\Message $message */
    $message = $object;
    $text = $message->getText();
    $helper = new MarvistaHelper();
    $created = DrupalDateTime::createFromTimestamp($message->getCreatedTime());
    $entity_id = $message->get('ref_entity_id')->getString();
    $entity_type = $message->get('ref_entity_type')->getString();
    $bundle = $message->get('ref_entity_bundle')->getString();
    $template = $message->get('template')->getString();
    $data = [];
    $data['content'] = !empty($text) ? $helper->clean($text[0]) : '';
    if ($entity_type == 'community_post') {
      $data['status'] = $message->get('field_action')->getString();
      $data['post_id'] = (int)$entity_id;
      if($template == 'amenity_reminder'){
        $entity = CommunityPost::load(intval($entity_id));
        $data['post_id'] = (int)$entity->get('field_place')->target_id;
        $entity_type = 'amenity';
      }

    }
    if ($entity_type == 'comment') {
      if ($message->hasField('field_post')) {
        $data['post_id'] = (int)$message->get('field_post')->getString();
      }
      $data['comment_id'] = (int)$entity_id;
    }
    if($bundle == 'event_details'){
      $data['event_id'] = (int)$entity_id;
      $image = NULL;
      $entity_type = $bundle;
      $node = Node::load($entity_id);
      if ($node->hasField('field_hero_image') && count($node->field_hero_image->entity->uri) > 0) {
        $image['id'] = (int) $node->field_hero_image->entity->id();
        $image['name'] = $node->field_hero_image->entity->getFilename();
        $image['url'] = file_create_url($node->field_hero_image->entity->getFileUri());
      }
      $data['image'] = $image;
    }
    $is_new = TRUE;
    $account = \Drupal::currentUser();
    if ( !empty($account->id()) && $message->hasField('field_read') ) {
      $field_read = $message->get('field_read')->getString();
      $field_read = json_decode($field_read);

      if($field_read->is_new == -1){
        $is_new = FALSE;
      }

      $uids = [];
      if(!empty($field_read->uid) && is_array($field_read->uid)){
        $uids = $field_read->uid;
        if(!in_array($account->id(), $uids, true)){
          array_push($uids, $account->id());
        }
      } else {
        $uids[] = $account->id();
      }

      $read = [
        'uid' => $uids,
        'is_new' => '-1'
      ];

      $message->set('field_read', json_encode($read));
      $message->save();

    }

    return [
      'id' => (int) $message->id(),
      'is_new' => $is_new,
      'datetime' => (int) $message->getCreatedTime(),
      'datetime_format' => $created->format('d M, Y - h:i'),
      'uid' => (int) $message->getOwnerId(),
      'type' => !empty($entity_type) ? $entity_type : NULL,
      'bundle' => !empty($bundle) ? $bundle : NULL,
      'data' => $data,
    ];

  }

}
