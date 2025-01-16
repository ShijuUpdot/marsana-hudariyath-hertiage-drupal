<?php

namespace Drupal\hudayriyat_custom_configs\Form;

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
      'hudayriyat_custom_configs.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $custom_configs_settings = $this->config('hudayriyat_custom_configs.settings');

    $form['hudayriyat_custom_configs_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Mail Configurations'),
      '#collapsible' => FALSE,
      '#collapsed' => TRUE,
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_email_username'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail UserName'),
      '#default_value' => $custom_configs_settings->get('custom_configs_email_username'),
      '#prefix'     => '<div style="width:40%; float:left; margin-right:10px">',
      '#suffix'     => '</div>',
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_email_password'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Password'),
      '#description' => $this->t('The Password is hidden in this field for security reason; If you need to change it, just add it again.'),
      //'#default_value' => $custom_configs_settings->get('custom_configs_email_password'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_email_host'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Host'),
      '#default_value' => $custom_configs_settings->get('custom_configs_email_host'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_email_port'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Port'),
      '#default_value' => $custom_configs_settings->get('custom_configs_email_port'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_email_SMTPSecure'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail SMTPSecure'),
      '#default_value' => $custom_configs_settings->get('custom_configs_email_SMTPSecure'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_from_mail'] = [
      '#type' => 'textfield',
      '#title' => $this->t('From Mail'),
      '#default_value' => $custom_configs_settings->get('custom_configs_from_mail'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_general_mail'] = [
      '#type' => 'textfield',
      '#title' => $this->t('General Information Mail'),
      '#default_value' => $custom_configs_settings->get('custom_configs_general_mail'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_leasing_mail'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Leasing Mail'),
      '#default_value' => $custom_configs_settings->get('custom_configs_leasing_mail'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_info_mail'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Info Mail'),
      '#default_value' => $custom_configs_settings->get('custom_configs_info_mail'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_subject_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Subject EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_subject_en'),
    ];
    $form['hudayriyat_custom_configs_settings']['vr_custom_configs_subject_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Mail Subject AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_subject_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1'] = [
      '#type' => 'details',
      '#title' => $this->t('Static Translations'),
      '#collapsible' => FALSE,
      '#collapsed' => TRUE,
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_opening_hours_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Opening Hours EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_opening_hours_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_opening_hours_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Opening Hours AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_opening_hours_ar'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_book_now_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Book Now EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_book_now_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_book_now_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Book Now AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_book_now_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_available_at_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Available At EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_available_at_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_available_at_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Available At AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_available_at_ar'),
    ];
     $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_available_sports_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Available Sports EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_available_sports_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_available_sports_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Available Sports AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_available_sports_ar'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_other_sports_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Other Sports EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_other_sports_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_other_sports_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Other Sports AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_other_sports_ar'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_other_facilities_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Other Facilities EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_other_facilities_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_other_facilities_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Other Facilities AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_other_facilities_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_other_articles_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Other Articles Title EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_other_articles_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_other_articles_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Other Articles Title AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_other_articles_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_discover_events_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Discover Events Title EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_discover_events_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_discover_events_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Discover Events Title AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_discover_events_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_discover_offers_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Discover Offers Title EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_discover_offers_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_discover_offers_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Discover Offers Title AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_discover_offers_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_events_listing_title_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Events Listing Title EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_events_listing_title_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_events_listing_title_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Events Listing Title AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_events_listing_title_ar'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_promotions_listing_title_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Promotions Listing Title EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_promotions_listing_title_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_promotions_listing_title_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Promotions Listing Title AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_promotions_listing_title_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_offers_listing_title_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Offers Listing Title EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_offers_listing_title_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_offers_listing_title_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Offers Listing Title AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_offers_listing_title_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_directions_title_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Location Directions Title EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_directions_title_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_directions_title_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Location Directions Title AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_directions_title_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_recommendation_en'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Interactive Map recommendation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_recommendation_en'),
    ];
    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_recommendation_ar'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Interactive Map recommendation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_recommendation_ar'),
    ];

    $form['hudayriyat_custom_configs_settings1']['vr_custom_configs_cookie_lifetime'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Cookie Lifetime'),
      '#default_value' => $custom_configs_settings->get('custom_configs_cookie_lifetime'),
    ];

    $form['hudayriyat_custom_configs_settings2'] = [
      '#type' => 'details',
      '#title' => $this->t('Contact Form Configurations'),
      '#collapsible' => FALSE,
      '#collapsed' => TRUE,
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_name_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First Name Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_name_en'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_name_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First Name Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_name_ar'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_last_name_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last Name Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_last_name_en'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_last_name_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last Name Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_last_name_ar'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_email_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_email_en'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_email_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_email_ar'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_contactNo_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Phone Number Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_contactNo_en'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_contactNo_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Phone Number Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_contactNo_ar'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_message_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Message Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_message_en'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_message_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Message Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_message_ar'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_invalidemail_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Invalid Email Validation EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_invalidemail_en'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_invalidemail_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Invalid Email Validation AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_invalidemail_ar'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_success_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Success Message EN'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_success_en'),
    ];
    $form['hudayriyat_custom_configs_settings2']['vr_custom_configs_contact_success_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Success Message AR'),
      '#default_value' => $custom_configs_settings->get('custom_configs_contact_success_ar'),
    ];


    $form['hudayriyat_custom_configs_settings4'] = [
      '#type' => 'details',
      '#title' => $this->t('Mobile APP Static Translations'),
      '#collapsible' => FALSE,
      '#collapsed' => TRUE,
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_marital_status_single_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Single EN'),
      '#default_value' => $custom_configs_settings->get('marital_status_single_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_marital_status_single_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Single AR'),
      '#default_value' => $custom_configs_settings->get('marital_status_single_ar'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_marital_status_family_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Family EN'),
      '#default_value' => $custom_configs_settings->get('marital_status_family_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_marital_status_family_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Family AR'),
      '#default_value' => $custom_configs_settings->get('marital_status_family_ar'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_marital_status_kids_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Family with kids EN'),
      '#default_value' => $custom_configs_settings->get('marital_status_kids_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_marital_status_kids_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Family with kids AR'),
      '#default_value' => $custom_configs_settings->get('marital_status_kids_ar'),
    ];

    $form['hudayriyat_custom_configs_settings4']['vr_default_location_lat_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default Location Latitude EN'),
      '#default_value' => $custom_configs_settings->get('default_location_lat_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_default_location_lat_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default Location Latitude AR'),
      '#default_value' => $custom_configs_settings->get('default_location_lat_ar'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_default_location_lon_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default Location Longitude EN'),
      '#default_value' => $custom_configs_settings->get('default_location_lon_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_default_location_lon_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default Location Longitude AR'),
      '#default_value' => $custom_configs_settings->get('default_location_lon_ar'),
    ];

    $form['hudayriyat_custom_configs_settings4']['vr_default_distance_nearby_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default Distance Nearby EN'),
      '#default_value' => $custom_configs_settings->get('default_distance_nearby_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_default_distance_nearby_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default Distance Nearby AR'),
      '#default_value' => $custom_configs_settings->get('default_distance_nearby_ar'),
    ];

    $form['hudayriyat_custom_configs_settings4']['vr_help_message_title_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Help Message Title EN'),
      '#default_value' => $custom_configs_settings->get('help_message_title_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_help_message_title_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Help Message Title AR'),
      '#default_value' => $custom_configs_settings->get('help_message_title_ar'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_help_message_sub_title_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Help Message Sub Title EN'),
      '#default_value' => $custom_configs_settings->get('help_message_sub_title_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_help_message_sub_title_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Help Message Sub Title AR'),
      '#default_value' => $custom_configs_settings->get('help_message_sub_title_ar'),
    ];

    $form['hudayriyat_custom_configs_settings4']['vr_report_message_title_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Report Message Title EN'),
      '#default_value' => $custom_configs_settings->get('report_message_title_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_report_message_title_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Report Message Title AR'),
      '#default_value' => $custom_configs_settings->get('report_message_title_ar'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_report_message_sub_title_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Report Message Sub Title EN'),
      '#default_value' => $custom_configs_settings->get('report_message_sub_title_en'),
    ];
    $form['hudayriyat_custom_configs_settings4']['vr_report_message_sub_title_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Report Message Sub Title AR'),
      '#default_value' => $custom_configs_settings->get('report_message_sub_title_ar'),
    ];
	
	$form['hudayriyat_custom_configs_settings4']['vr_title_social_media_en'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Title Social Media EN'),
      '#default_value' => $custom_configs_settings->get('title_social_media_en'),
    ];
	
	$form['hudayriyat_custom_configs_settings4']['vr_title_social_media_ar'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Title Social Media AR'),
      '#default_value' => $custom_configs_settings->get('title_social_media_ar'),
    ];
	
	$form['hudayriyat_custom_configs_settings4']['vr_link_facebook'] = [
      '#type' => 'textfield',
      '#title' => $this->t('link_facebook'),
      '#default_value' => $custom_configs_settings->get('link_facebook'),
    ];
	
	$form['hudayriyat_custom_configs_settings4']['vr_link_instagram'] = [
      '#type' => 'textfield',
      '#title' => $this->t('link_instagram'),
      '#default_value' => $custom_configs_settings->get('link_instagram'),
    ];
	
	$form['hudayriyat_custom_configs_settings4']['vr_link_twitter'] = [
      '#type' => 'textfield',
      '#title' => $this->t('link_twitter'),
      '#default_value' => $custom_configs_settings->get('link_twitter'),
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
      $this->config('hudayriyat_custom_configs.settings')
        ->set('custom_configs_email_username', $values['vr_custom_configs_email_username'])
        //->set('custom_configs_email_password', $values['vr_custom_configs_email_password'])
        ->set('custom_configs_email_host', $values['vr_custom_configs_email_host'])
        ->set('custom_configs_email_port', $values['vr_custom_configs_email_port'])
        ->set('custom_configs_email_SMTPSecure', $values['vr_custom_configs_email_SMTPSecure'])
        ->set('custom_configs_general_mail', $values['vr_custom_configs_general_mail'])
        ->set('custom_configs_leasing_mail', $values['vr_custom_configs_leasing_mail'])
        ->set('custom_configs_info_mail', $values['vr_custom_configs_info_mail'])
        ->set('custom_configs_from_mail', $values['vr_custom_configs_from_mail'])
        ->set('custom_configs_opening_hours_en', $values['vr_custom_configs_opening_hours_en'])
        ->set('custom_configs_opening_hours_ar', $values['vr_custom_configs_opening_hours_ar'])
        ->set('custom_configs_book_now_en', $values['vr_custom_configs_book_now_en'])
        ->set('custom_configs_book_now_ar', $values['vr_custom_configs_book_now_ar'])
        ->set('custom_configs_available_at_en', $values['vr_custom_configs_available_at_en'])
        ->set('custom_configs_available_at_ar', $values['vr_custom_configs_available_at_ar'])
        ->set('custom_configs_available_sports_en', $values['vr_custom_configs_available_sports_en'])
        ->set('custom_configs_available_sports_ar', $values['vr_custom_configs_available_sports_ar'])
        ->set('custom_configs_other_sports_en', $values['vr_custom_configs_other_sports_en'])
        ->set('custom_configs_other_sports_ar', $values['vr_custom_configs_other_sports_ar'])
        ->set('custom_configs_other_facilities_en', $values['vr_custom_configs_other_facilities_en'])
        ->set('custom_configs_other_facilities_ar', $values['vr_custom_configs_other_facilities_ar'])
        ->set('custom_configs_other_articles_en', $values['vr_custom_configs_other_articles_en'])
        ->set('custom_configs_other_articles_ar', $values['vr_custom_configs_other_articles_ar'])
        ->set('custom_configs_discover_events_en', $values['vr_custom_configs_discover_events_en'])
        ->set('custom_configs_discover_events_ar', $values['vr_custom_configs_discover_events_ar'])
        ->set('custom_configs_discover_offers_en', $values['vr_custom_configs_discover_offers_en'])
        ->set('custom_configs_discover_offers_ar', $values['vr_custom_configs_discover_offers_ar'])
        ->set('custom_configs_events_listing_title_en', $values['vr_custom_configs_events_listing_title_en'])
        ->set('custom_configs_events_listing_title_ar', $values['vr_custom_configs_events_listing_title_ar'])
        ->set('custom_configs_promotions_listing_title_en', $values['vr_custom_configs_promotions_listing_title_en'])
        ->set('custom_configs_promotions_listing_title_ar', $values['vr_custom_configs_promotions_listing_title_ar'])
        ->set('custom_configs_offers_listing_title_en', $values['vr_custom_configs_offers_listing_title_en'])
        ->set('custom_configs_offers_listing_title_ar', $values['vr_custom_configs_offers_listing_title_ar'])
        ->set('custom_configs_directions_title_en', $values['vr_custom_configs_directions_title_en'])
        ->set('custom_configs_directions_title_ar', $values['vr_custom_configs_directions_title_ar'])
        ->set('custom_configs_recommendation_en', $values['vr_custom_configs_recommendation_en'])
        ->set('custom_configs_recommendation_ar', $values['vr_custom_configs_recommendation_ar'])
        ->set('custom_configs_subject_en', $values['vr_custom_configs_subject_en'])
        ->set('custom_configs_subject_ar', $values['vr_custom_configs_subject_ar'])
        ->set('custom_configs_contact_name_en', $values['vr_custom_configs_contact_name_en'])
        ->set('custom_configs_contact_name_ar', $values['vr_custom_configs_contact_name_ar'])
        ->set('custom_configs_contact_last_name_en', $values['vr_custom_configs_contact_last_name_en'])
        ->set('custom_configs_contact_last_name_ar', $values['vr_custom_configs_contact_last_name_ar'])
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
        ->set('marital_status_single_en', $values['vr_marital_status_single_en'])
        ->set('marital_status_single_ar', $values['vr_marital_status_single_ar'])
        ->set('marital_status_family_en', $values['vr_marital_status_family_en'])
        ->set('marital_status_family_ar', $values['vr_marital_status_family_ar'])
        ->set('marital_status_kids_en', $values['vr_marital_status_kids_en'])
        ->set('marital_status_kids_ar', $values['vr_marital_status_kids_ar'])
        ->set('default_location_lat_en', $values['vr_default_location_lat_en'])
        ->set('default_location_lat_ar', $values['vr_default_location_lat_ar'])
        ->set('default_location_lon_en', $values['vr_default_location_lon_en'])
        ->set('default_location_lon_ar', $values['vr_default_location_lon_ar'])
        ->set('default_distance_nearby_en', $values['vr_default_distance_nearby_en'])
        ->set('default_distance_nearby_ar', $values['vr_default_distance_nearby_ar'])
        ->set('help_message_title_en', $values['vr_help_message_title_en'])
        ->set('help_message_title_ar', $values['vr_help_message_title_ar'])
        ->set('help_message_sub_title_en', $values['vr_help_message_sub_title_en'])
        ->set('help_message_sub_title_ar', $values['vr_help_message_sub_title_ar'])
        ->set('report_message_title_en', $values['vr_report_message_title_en'])
        ->set('report_message_title_ar', $values['vr_report_message_title_ar'])
        ->set('report_message_sub_title_en', $values['vr_report_message_sub_title_en'])
        ->set('report_message_sub_title_ar', $values['vr_report_message_sub_title_ar'])
        ->set('custom_configs_cookie_lifetime', $values['vr_custom_configs_cookie_lifetime'])
        ->set('title_social_media_en', $values['vr_title_social_media_en'])
        ->set('title_social_media_ar', $values['vr_title_social_media_ar'])
        ->set('link_facebook', $values['vr_link_facebook'])
        ->set('link_instagram', $values['vr_link_instagram'])
        ->set('link_twitter', $values['vr_link_twitter'])
        ->save();
		if($values['vr_custom_configs_email_password'] != '') {
          $this->config('hudayriyat_custom_configs.settings')
               ->set('custom_configs_email_password', $values['vr_custom_configs_email_password'])
               ->save();
        }
      parent::submitForm($form, $form_state);
      drupal_flush_all_caches();
    }
  }

}
