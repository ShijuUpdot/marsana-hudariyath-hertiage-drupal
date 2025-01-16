<?php /** @noinspection ALL */

namespace Drupal\Tests\marvista_tests\Functional;

use Drupal;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Url;
use Drupal\message\Entity\Message;

/**
 * Class SignupTest.
 *
 * @package Drupal\Tests\marvista_tests\Functional
 */
class UserTest extends Drupal\Tests\marvista_tests\ExistingSiteBase {

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();
  }

  public function testUserPushNotification() {
    $user = Drupal\user\Entity\User::create([
      'name' => $this->getRandomGenerator()->string(),
    ]);
    $user->save();
    $db = \Drupal::database();
    $device_id = $this->getRandomGenerator()->string();
    $db->insert('users_access_token')->fields([
      'uid' => $user->id(),
      'device_id' => $device_id,
      'created' => time(),
      'expired' => time() + 99999,
      'status' => 1,
    ])->execute();
    $device_id_2 = $this->getRandomGenerator()->string();
    $db->insert('users_access_token')->fields([
      'uid' => $user->id(),
      'device_id' => $device_id_2,
      'created' => time(),
      'expired' => time() + 99999,
      'status' => 1,
    ])->execute();
    dump($user->id());
    $token = Drupal\marvista_api\Helper\UserAccessTokenManager::loadDeviceIdByUser($user);

    $message = Message::create([
      'template' => 'community_post_approved_notific',
      'uid' => $user->id(),
      'message_channel' => 'push_notification',
    ]);
    $message->save();
    /** @var \Drupal\message_notify\MessageNotifier $notifier */
    $notifier = \Drupal::service('message_notify.sender');
    $notifier->send($message, [], 'firebase_cloud_messaging');
  }

  public function testMessagePushNotiWithSerial() {
    $user = Drupal\user\Entity\User::create([
      'name' => $this->getRandomGenerator()->string(),
    ]);
    $user->save();
    $db = \Drupal::database();
    $device_id = $this->getRandomGenerator()->string();
    $db->insert('users_access_token')->fields([
      'uid' => $user->id(),
      'device_id' => $device_id,
      'created' => time(),
      'expired' => time() + 99999,
      'status' => 1,
    ])->execute();

    $post = Drupal\community_post\Entity\CommunityPost::create([
      'type' => 'review',
      'name' => $this->getRandomGenerator()->string(),
    ]);
    $post->save();

    $message = Message::create([
      'template' => 'community_post_approved_notific',
      'uid' => $user->id(),
      'message_channel' => 'push_notification',
      'ref_entity_id' => $post->id(),
      'ref_entity_type' => $post->getEntityTypeId(),
      'ref_entity_bundle' => $post->bundle(),
      'message_channel' => 'push_notification',
      'field_action' => 'approved',
    ]);
    $message->save();

    $serialization = \Drupal::service('serializer');
    /** @var \Drupal\message_notify\MessageNotifier $notifier */
    $notifier = \Drupal::service('message_notify.sender');
    $notifier->send($message, [], 'firebase_cloud_messaging');
    //dump($serialization->normalize($message, 'json'));
  }


}
