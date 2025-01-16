<?php

namespace Drupal\marvista_api\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class RegisterWelcomeConfigForm.
 */
class RegisterWelcomeConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'marvista_api.welcomeconfigform',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'welcome_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $config = $this->config('marvista_api.welcomeconfigform');

    $form['register'] = [
      '#type' => 'vertical_tabs',
    ];
    $form['user'] = [
      '#type' => 'details',
      '#title' => $this
        ->t('User'),
      '#group' => 'register',
    ];
    $form['admin'] = [
      '#type' => 'details',
      '#title' => $this
        ->t('Admin'),
      '#group' => 'register',
    ];

    $form['user']['user_welcome_mail_subject'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Subject'),
      '#default_value' => $config->get('user_welcome_mail_subject'.$language),
    ];
    $text = $config->get('user_welcome_mail_body'.$language);
    $form['user']['user_welcome_mail_body'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Body'),
      '#format' => 'full_html',
      '#default_value' => !empty($text) ? $text : '',
      '#description' => '
            <br/>[user_display_name]: User display name
            <br/>[email]: User email,
            <br/>[first_name]: First name,
            <br/>[last_name]: Last name,
            <br/>[contact_number]: Contact number,
            '
    ];
    $form['admin']['admin_config_mail_address'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Email'),
      '#default_value' => $config->get('admin_config_mail_address'),
      '#description' => 'admin1@gmail.com,admin2@gmail.com',
    ];
    $form['admin']['admin_mail_subject'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Subject'),
      '#default_value' => $config->get('admin_mail_subject'.$language),
    ];
    $text = $config->get('admin_mail_body'.$language);
    $form['admin']['admin_mail_body'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Body'),
      '#format' => 'full_html',
      '#default_value' => !empty($text) ? $text : '',
      '#description' => '
            <br/>[user_display_name]: User display name
            <br/>[email]: User email,
            <br/>[first_name]: First name,
            <br/>[last_name]: Last name,
            <br/>[contact_number]: Contact number,
            '
    ];


    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $this->config('marvista_api.welcomeconfigform')
      ->set('user_welcome_mail_subject' . $language, $form_state->getValue('user_welcome_mail_subject'))
      ->set('user_welcome_mail_body' . $language, $form_state->getValue('user_welcome_mail_body')['value'])
      ->set('admin_config_mail_address', $form_state->getValue('admin_config_mail_address'))
      ->set('admin_mail_subject' . $language, $form_state->getValue('admin_mail_subject'))
      ->set('admin_mail_body' . $language, $form_state->getValue('admin_mail_body')['value'])
      //      ->set('mail_register_active_code_body', $form_state->getValue('mail_register_active_code_body')['value'])
      //      ->set('resend_mail_register_active_code_body', $form_state->getValue('resend_mail_register_active_code_body')['value'])
      ->save();
  }

}
