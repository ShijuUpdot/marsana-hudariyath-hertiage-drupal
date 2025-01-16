<?php

namespace Drupal\firebase_cloud_messaging\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FirebaseCloudMessagingConfigForm.
 */
class FirebaseCloudMessagingConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'firebase_cloud_messaging.firebasecloudmessagingconfig',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'firebase_cloud_messaging_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('firebase_cloud_messaging.firebasecloudmessagingconfig');
    $form['firebase_enable'] = [
      '#type' => 'radios',
      '#title' => 'Status',
      '#options' => [
        '1' => 'Yes',
        '0' => 'No',
      ],
      '#default_value' => $config->get('enable'),
    ];
    $form['firebase_url'] = [
      '#type' => 'textfield',
      '#title' => 'Firebase Url',
      '#default_value' => $config->get('url'),
    ];
    $form['firebase_key'] = [
      '#type' => 'textarea',
      '#title' => 'Key',
      '#default_value' => $config->get('key'),
    ];
    $form['event_subscribe_topic'] = [
      '#type' => 'textfield',
      '#title' => 'Event subscribe topic',
      '#default_value' => $config->get('event_subscribe_topic'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('firebase_cloud_messaging.firebasecloudmessagingconfig')
      ->set('enable', $form_state->getValue('firebase_enable'))
      ->set('url', $form_state->getValue('firebase_url'))
      ->set('key', $form_state->getValue('firebase_key'))
      ->set('event_subscribe_topic', $form_state->getValue('event_subscribe_topic'))
      ->save();
  }

}
