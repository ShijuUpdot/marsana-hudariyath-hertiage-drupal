<?php

namespace Drupal\firebase_cloud_messaging\Plugin\MessageNotifyUiSenderSettingsForm;

use Drupal\Core\Form\FormStateInterface;
use Drupal\message_notify\MessageNotifier;
use Drupal\message_notify_ui\MessageNotifyUiSenderSettingsFormBase;
use Drupal\message_notify_ui\MessageNotifyUiSenderSettingsFormInterface;

/**
 * Message notify plugin form for firebase_cloud_messaging.
 *
 * @MessageNotifyUiSenderSettingsForm(
 *  id = "message_notify_ui_sender_firebase_cloud_messaging_settings_form",
 *  label = @Translation("The plugin MessageNotifyUiSenderFirebaseCloudMessagingSettingsForm ID."),
 *  notify_plugin = "firebase_cloud_messaging"
 * )
 */
class MessageNotifyUiSenderFirebaseCloudMessagingSettingsForm extends MessageNotifyUiSenderSettingsFormBase implements MessageNotifyUiSenderSettingsFormInterface {

  /**
   * {@inheritdoc}
   */
  public function form() {
    return [
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function validate(array $form, FormStateInterface $formState) {

  }

  /**
   * {@inheritdoc}
   */
  public function submit(MessageNotifier $notifier, FormStateInterface $formState) {
    $settings = [];
    if ($notifier->send($this->getMessage(), $settings, 'firebase_cloud_messaging')) {
      drupal_set_message(t('The app notify successfully.'));
    }
  }

}
