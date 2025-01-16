<?php

namespace Drupal\hudayriyat_social_feeds\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Tweets settings for this site.
 */
class SocialFeedSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'social_feeds_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'hudayriyat_social_feeds.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $social_feeds_settings = $this->config('hudayriyat_social_feeds.settings');
    $form['instagram_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Instagram Settings'),
      '#collapsible' => FALSE,
      '#collapsed' => TRUE,
    ];
    $form['instagram_settings']['vr_instagram_hashtag'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Hashtag'),
      '#default_value' => $social_feeds_settings->get('instagram_hashtag'),
    ];
    // $form['instagram_settings']['vr_instagram_client_id'] = [
    //   '#type' => 'textfield',
    //   '#title' => $this->t('User Id'),
    //   '#default_value' => $social_feeds_settings->get('instagram_client_id'),
    // ];
    // $form['instagram_settings']['vr_instagram_client_secret'] = [
    //   '#type' => 'textfield',
    //   '#title' => $this->t('Hashtag Id'),
    //   '#default_value' => $social_feeds_settings->get('instagram_client_secret'),
    // ];
    $form['instagram_settings']['vr_instagram_access_token'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Access Token'),
      '#default_value' => $social_feeds_settings->get('instagram_access_token'),
    ];
    $form['instagram_settings']['vr_instagram_limit'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Instagram Media Limit'),
      '#default_value' => $social_feeds_settings->get('instagram_limit'),
    ];
    $form['instagram_settings']['vr_content_modaration_enable_status'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable Content Moderation'),
      '#default_value' => $social_feeds_settings->get('content_modaration_enable_status'),
    ];
    $form['instagram_settings']['social_insta_cron'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Pull Instagram Posts'),
      '#description' => $this->t('<a href="/fetchinstagramfeed">Sync Data Now</a>'),
      '#default_value' => $social_feeds_settings->get('social_insta_cron'),
    ];
    $form['instagram_settings']['social_insta_delete'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Delete Instagram Posts'),
      '#description' => $this->t('<a href="/deleteinstagramfeed">Delete Data Now</a>'),
      '#default_value' => $social_feeds_settings->get('social_insta_delete'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    if ($form_state->hasAnyErrors()) {
      return;
    }
    else {
      $values = $form_state->getValues();
      $this->config('hudayriyat_social_feeds.settings')
        // ->set('instagram_client_id', $values['vr_instagram_client_id'])
        // ->set('instagram_client_secret', $values['vr_instagram_client_secret'])
        ->set('instagram_access_token', $values['vr_instagram_access_token'])
        ->set('instagram_limit', $values['vr_instagram_limit'])
        ->set('instagram_hashtag', $values['vr_instagram_hashtag'])
        ->set('content_modaration_enable_status', $values['vr_content_modaration_enable_status'])
        ->set('social_insta_cron', $values['social_insta_cron'])
        ->set('social_insta_delete', $values['social_insta_delete'])
        ->save();
      parent::submitForm($form, $form_state);
    }
  }

}
