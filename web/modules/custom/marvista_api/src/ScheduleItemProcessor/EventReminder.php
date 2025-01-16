<?php

namespace Drupal\marvista_api\ScheduleItemProcessor;

use Drupal\Core\Entity\EntityInterface;
use Drupal\firebase_cloud_messaging\PushNotificationSender;
use Drupal\marvista_api\Helper\ContentEntityManager;
use Drupal\message\Entity\Message;
use Drupal\node\Entity\Node;
use Drupal\schedule_item\Entity\ScheduleItem;

class EventReminder {

  /**
   * Process schedule item.
   */
  public static function process(ScheduleItem $item) {
    $entity_id = $item->get('entity_id')->getString();
    $node = Node::load($entity_id);
    if (empty($node)) {
      return;
    }
    self::sendMessage($node, self::getReminderTemplate($node));

  }

  public static function getReminderTemplate(EntityInterface $node) {
    $template = '';
    if ($node->bundle() == 'event_details') {
      $template = 'event_reminder';
    }
    if ($node->bundle() == 'amenities_details') {
      $template = 'amenity_reminder';
    }
    return $template;
  }

  /**
   * Send message for node.
   *
   * @param \Drupal\node\Entity\Node $node
   *   Node.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public static function sendMessage(Node $node, $template_id) {

    $message = Message::create([
      'template' => $template_id,
      'uid' => 0,
      'message_channel' => 'push_notification',
      'field_node' => $node->id(),
      'ref_entity_id' => $node->id(),
      'ref_entity_type' => $node->getEntityTypeId(),
      'ref_entity_bundle' => $node->bundle(),
    ]);
    $opening = ContentEntityManager::getEventOpeningTime($node);
    if (!empty($opening)) {
      /** @var \Drupal\Core\Datetime\DrupalDateTime $start_time */
      $start_time = $opening['start_time'];
      if (!empty($start_time)) {
        $message->set('field_start_time', $start_time->format('d/m/Y h:i:s'));
      }
      /** @var \Drupal\Core\Datetime\DrupalDateTime $end_time */
      $end_time = $opening['end_time'];
      if (!empty($end_time)) {
        $message->set('field_end_time', $end_time->format('d/m/Y h:i:s'));
      }
    }
    $message->save();

    $options = [];
    $options['title'] = $node->getTitle();
    $options['body'] = $message->getText();
    if (!empty($options['body'])) {
      $options['body'] = strip_tags($options['body'][0]);
    }

    $options['data']['id'] = $node->id();
    $options['data']['type'] = $node->bundle();

//    $serialization = \Drupal::service('serializer');
//    $options['data'] = $serialization->normalize($message, 'json');

    $app_config = \Drupal::config('firebase_cloud_messaging.firebasecloudmessagingconfig');
    $event_topic = $app_config->get('event_subscribe_topic');
    PushNotificationSender::send($event_topic, $options);
  }

}
