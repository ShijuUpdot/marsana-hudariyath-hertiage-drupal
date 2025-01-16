<?php

namespace Drupal\marvista_api\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ActiveCodeConfigForm.
 */
class ActiveCodeConfigForm extends ConfigFormBase
{
  /** @var string $_language */
  protected $_language;

  /** Get current language
   * @return string
   */
  protected function getCurrentLanguage()
  {
    if ($this->_language) {
      return $this->_language;
    }
    $this->_language = \Drupal::languageManager()->getCurrentLanguage()->getId();

    return $this->_language;
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames()
  {
    return [
      'marvista_api.activecodeconfig',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId()
  {
    return 'active_code_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $language = $this->getCurrentLanguage();
    $config   = $this->config('marvista_api.activecodeconfig');

    $form['register']    = array(
      '#type' => 'vertical_tabs',
    );
    $form['mail']        = [
      '#type'  => 'details',
      '#title' => $this
        ->t('Active code'),
      '#group' => 'register',
    ];
    $form['resend_mail'] = [
      '#type'  => 'details',
      '#title' => $this
        ->t('Resend active code'),
      '#group' => 'register',
    ];

    $form['mail']['mail_register_active_code_subject'] = [
      '#type'          => 'textfield',
      '#title'         => $this->t('Subject'),
      '#default_value' => $config->get('mail_register_active_code_subject_' . $language),
    ];
    $text                                              = $config->get('mail_register_active_code_body_' . $language);
    $form['mail']['mail_register_active_code_body']    = [
      '#type'          => 'text_format',
      '#title'         => $this->t('Body'),
      '#format'        => 'full_html',
      '#default_value' => ! empty($text) ? $text : '',
      '#description'   => '[code]: Active code generated.
            <br/>[user_display_name]: User display name
            <br/>[user_email]: User email',
    ];

    $form['resend_mail']['resend_mail_register_active_code_subject'] = [
      '#type'          => 'textfield',
      '#title'         => $this->t('Subject'),
      '#default_value' => $config->get('resend_mail_register_active_code_subject_' . $language),
    ];
    $text                                                            = $config->get('resend_mail_register_active_code_body_' . $language);
    $form['resend_mail']['resend_mail_register_active_code_body']    = [
      '#type'          => 'text_format',
      '#title'         => $this->t('Body'),
      '#format'        => 'full_html',
      '#default_value' => ! empty($text) ? $text : '',
      '#description'   => '[code]: Active code generated.
            <br/>[user_display_name]: User display name
            <br/>[user_email]: User email',
    ];


    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    parent::submitForm($form, $form_state);
    $language = $this->getCurrentLanguage();
    $this->config('marvista_api.activecodeconfig')
         ->set('mail_register_active_code_subject_' . $language,
           $form_state->getValue('mail_register_active_code_subject'))
         ->set('resend_mail_register_active_code_subject_' . $language,
           $form_state->getValue('resend_mail_register_active_code_subject'))
         ->set('mail_register_active_code_body_' . $language,
           $form_state->getValue('mail_register_active_code_body')['value'])
         ->set('resend_mail_register_active_code_body_' . $language,
           $form_state->getValue('resend_mail_register_active_code_body')['value'])
         ->save();
  }

}
