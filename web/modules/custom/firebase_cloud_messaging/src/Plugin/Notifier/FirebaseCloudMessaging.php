<?php

namespace Drupal\firebase_cloud_messaging\Plugin\Notifier;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\Core\Mail\MailManagerInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\firebase_cloud_messaging\PushNotificationSender;
use Drupal\marvista_api\Helper\UserAccessTokenManager;
use Drupal\message\MessageInterface;
use Drupal\message_notify\Exception\MessageNotifyException;
use Drupal\message_notify\Plugin\Notifier\MessageNotifierBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Firebase Cloud Messaging notifier.
 *
 * @Notifier(
 *   id = "firebase_cloud_messaging",
 *   title = @Translation("Firebase Cloud Messaging"),
 *   description = @Translation("Firebase Cloud Messaging"),
 *   viewModes = {
 *     "default",
 *   }
 * )
 */
class FirebaseCloudMessaging extends MessageNotifierBase {

  /**
   * The mail manager service.
   *
   * @var \Drupal\Core\Mail\MailManagerInterface
   */
  protected $mailManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, LoggerChannelInterface $logger, EntityTypeManagerInterface $entity_type_manager, RendererInterface $render, MessageInterface $message = NULL, MailManagerInterface $mail_manager) {
    // Set configuration defaults.
    $configuration += [
      'language override' => FALSE,
    ];

    parent::__construct($configuration, $plugin_id, $plugin_definition, $logger, $entity_type_manager, $render, $message);

    $this->mailManager = $mail_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition, MessageInterface $message = NULL) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('logger.channel.message_notify'),
      $container->get('entity_type.manager'),
      $container->get('renderer'),
      $message,
      $container->get('plugin.manager.mail')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function deliver(array $output = []) {
    /** @var \Drupal\user\UserInterface $account */
    $account = $this->message->getOwner();
    $tokens = UserAccessTokenManager::loadDeviceIdByUser($account);
    if (empty($tokens) && !$account->id()) {
      // The message has no owner and no mail was passed. This will cause an
      // exception, we just make sure it's a clear one.
      throw new MessageNotifyException('It is not possible to send a Message to an anonymous owner. You may set an owner using ::setOwner() or pass a "mail" to the $options array.');
    }
    $options = [];
    /*$options['title'] = '';
    if ($this->message->hasField('field_message_title')) {
      $options['title'] = $this->message->get('field_message_title')
        ->getString();
    }*/
    $config = \Drupal::config('system.site');
    $options['title'] = $config->get('name');
    if (!$this->configuration['language override']) {
      $language = $account->getPreferredLangcode();
    }
    else {
      $language = $this->message->language()->getId();
    }

    $options['body'] = $this->message->getText($language);
    if (!empty($options['body'])) {
      $options['body'] = strip_tags($options['body'][0]);
    }

    $serialization = \Drupal::service('serializer');
    $options['data'] = $serialization->normalize($this->message, 'json');
    // dump($serialization->normalize($message, 'json'));
    //$options['data'] = $data;

    $device_ids = [];
    foreach ($tokens as $token) {
      PushNotificationSender::send($token->device_token, $options);
    }

    return TRUE;
  }

}
