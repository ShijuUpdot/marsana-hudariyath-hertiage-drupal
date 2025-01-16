<?php

namespace Drupal\heritage_custom_configs\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Tweets settings for this site.
 */
class CustomConfigsSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_configs_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'heritage_custom_configs.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $custom_configs_settings = $this->config('heritage_custom_configs.settings');
    $form['heritage_custom_configs_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Contact Configurations'),
      '#collapsible' => FALSE,
      '#collapsed' => TRUE,
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_name_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_name_en'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_name_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_name_ar'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_email_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_email_en'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_email_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_email_ar'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_contactNo_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Phone Number Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_contactNo_en'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_contactNo_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Phone Number Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_contactNo_ar'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_message_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Message Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_message_en'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_message_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Message Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_message_ar'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_invalidemail_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Invalid Email Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_invalidemail_en'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_invalidemail_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Invalid Email Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_invalidemail_ar'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_success_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Success Message EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_success_en'),
    ];
    $form['heritage_custom_configs_settings']['vr_custom_configs_contact_success_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Success Message AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_success_ar'),
    ];

    $form['heritage_custom_configs_settings1'] = [
      '#type' => 'details',
      '#title' => $this->t('Mail Configurations'),
      '#collapsible' => FALSE,
      '#collapsed' => TRUE,
    ];
    $form['heritage_custom_configs_settings1']['vr_custom_configs_email_username'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail UserName'),
      '#default_value' => $custom_configs_settings->get('custom_configs_email_username'),
    ];
    $form['heritage_custom_configs_settings1']['vr_custom_configs_email_password'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Password'),
      '#description' => $this->t('The Password is hidden in this field for security reason; If you need to change it, just add it again.'),
     // '#default_value' => $custom_configs_settings->get('custom_configs_email_password'),
    ];
    $form['heritage_custom_configs_settings1']['vr_custom_configs_email_host'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Host'),
      '#default_value' => $custom_configs_settings->get('custom_configs_email_host'),
    ];
    $form['heritage_custom_configs_settings1']['vr_custom_configs_email_port'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Port'),
      '#default_value' => $custom_configs_settings->get('custom_configs_email_port'),
    ];
    $form['heritage_custom_configs_settings1']['vr_custom_configs_email_SMTPSecure'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail SMTPSecure'),
      '#default_value' => $custom_configs_settings->get('custom_configs_email_SMTPSecure'),
    ];
    $form['heritage_custom_configs_settings1']['vr_custom_configs_from_mail'] = [
      '#type' => 'textfield',
      '#title' => $this->t('From Mail'),
      '#default_value' => $custom_configs_settings->get('custom_configs_from_mail'),
    ];
    $form['heritage_custom_configs_settings1']['vr_custom_configs_subject_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Subject EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_subject_en'),
    ];
    $form['heritage_custom_configs_settings1']['vr_custom_configs_subject_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Subject AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_subject_ar'),
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
      $this->config('heritage_custom_configs.settings')
        ->set('custom_configs_email_username', $values['vr_custom_configs_email_username'])
        //->set('custom_configs_email_password', $values['vr_custom_configs_email_password'])
        ->set('custom_configs_email_host', $values['vr_custom_configs_email_host'])
        ->set('custom_configs_email_port', $values['vr_custom_configs_email_port'])
        ->set('custom_configs_email_SMTPSecure', $values['vr_custom_configs_email_SMTPSecure'])
        ->set('custom_configs_from_mail', $values['vr_custom_configs_from_mail'])
        ->set('custom_configs_subject_en', $values['vr_custom_configs_subject_en'])
        ->set('custom_configs_subject_ar', $values['vr_custom_configs_subject_ar'])
        ->set('custom_configs_contact_name_en', $values['vr_custom_configs_contact_name_en'])
        ->set('custom_configs_contact_name_ar', $values['vr_custom_configs_contact_name_ar'])
        ->set('custom_configs_contact_email_en', $values['vr_custom_configs_contact_email_en'])
        ->set('custom_configs_contact_email_ar', $values['vr_custom_configs_contact_email_ar'])
        ->set('custom_configs_contact_contactNo_en', $values['vr_custom_configs_contact_contactNo_en'])
        ->set('custom_configs_contact_contactNo_ar', $values['vr_custom_configs_contact_contactNo_ar'])
        ->set('custom_configs_contact_message_en', $values['vr_custom_configs_contact_message_en'])
        ->set('custom_configs_contact_message_ar', $values['vr_custom_configs_contact_message_ar'])
        ->set('custom_configs_contact_invalidemail_en', $values['vr_custom_configs_contact_invalidemail_en'])
        ->set('custom_configs_contact_invalidemail_ar', $values['vr_custom_configs_contact_invalidemail_ar'])
        ->set('custom_configs_contact_success_en', $values['vr_custom_configs_contact_success_en'])
        ->set('custom_configs_contact_success_ar', $values['vr_custom_configs_contact_success_ar'])
        ->save();
		if($values['vr_custom_configs_email_password'] != '') {
          $this->config('heritage_custom_configs.settings')
               ->set('custom_configs_email_password', $values['vr_custom_configs_email_password'])
               ->save();
        }
      parent::submitForm($form, $form_state);
      drupal_flush_all_caches();
    }
  }

}
