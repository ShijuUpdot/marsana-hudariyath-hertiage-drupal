<?php

namespace Drupal\marvista_api\ScheduleItemProcessor;

use Drupal\Core\Entity\EntityInterface;
use Drupal\firebase_cloud_messaging\PushNotificationSender;
use Drupal\marvista_api\Helper\ContentEntityManager;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\message\Entity\Message;
use Drupal\node\Entity\Node;
use Drupal\schedule_item\Entity\ScheduleItem;
use Drupal\user\Entity\User;

class WelcomeMailSender {

  /**
   * Process schedule item.
   */
  public static function process_en(ScheduleItem $item) {
    self::process($item, 'en');
  }

  /**
   * Process schedule item.
   */
  public static function process_ar(ScheduleItem $item) {
    self::process($item, 'ar');
  }

  /**
   * Process schedule item.
   */
  public static function process(ScheduleItem $item, $lang) {
    $entity_id = $item->get('entity_id')->getString();
    $user = User::load($entity_id);
    if (empty($user)) {
      return;
    }
    MarvistaHelper::sendWelcomeMail(['lang' => $lang], $user);
    MarvistaHelper::sendWelcomeMailAdmin(['lang' => $lang], $user);
  }

}
