<?php

namespace Drupal\marvista_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\marvista_api\Action\getConfig;
use Drupal\marvista_api\Action\getStaticContent;
use Drupal\marvista_api\Action\getExperiences;
use Drupal\marvista_api\Action\getSuggestion;
use Drupal\marvista_api\Action\getPlaces;
use Drupal\marvista_api\Action\getFeaturedPlaces;
use Drupal\marvista_api\Action\getRating;
use Drupal\marvista_api\Action\getEvents;
use Drupal\marvista_api\Action\getEventDetail;
use Drupal\marvista_api\Action\getEventAlsoLike;
use Drupal\marvista_api\Action\getEventCategories;
use Drupal\marvista_api\Action\getHistory;
use Drupal\marvista_api\Action\getFlashDeals;
use Drupal\marvista_api\Action\getPersonalization;
use Drupal\marvista_api\Action\getProfile;
use Drupal\marvista_api\Action\getLocation;
use Drupal\marvista_api\Action\getWeekendActivities;
use Drupal\marvista_api\Action\getWeekendActivitiesDetail;
use Drupal\marvista_api\Action\getWeekendActivitiesAlsoLike;
use Drupal\marvista_api\Action\getAmenitiesAlsoLike;
use Drupal\marvista_api\Action\postRegisterForm;
use Drupal\marvista_api\Action\postLoginForm;
use Drupal\marvista_api\Action\postLoginSocialForm;
use Drupal\marvista_api\Action\postLinkAccount;
use Drupal\marvista_api\Action\postPersonalization;
use Drupal\marvista_api\Action\postForgotPasswordForm;
use Drupal\marvista_api\Action\postVerifyCode;
use Drupal\marvista_api\Action\postNewPassword;
use Drupal\marvista_api\Action\resendVerifyCode;
use Drupal\marvista_api\Action\postSearch;
use Drupal\marvista_api\Action\postFilter;
use Drupal\marvista_api\Action\notificationSetting;

/**
 * Implementing our example JSON api.
 */
class JsonApiController extends ControllerBase
{
  public $config;
  public $events;
  public $event_detail;
  public $event_also_like;
  public $event_categories;
  public $static_content;
  public $areas;
  public $suggestion;
  public $places;
  public $featured_places;
  public $rating;
  public $history;
  public $flash_deals;
  public $personalization;
  public $location;
  public $profile;
  public $weekend_activities;
  public $weekend_activities_detail;
  public $weekend_activities_also_like;

  /* GET API */
  public function getConfig($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->config = new getConfig();
    return $this->config->all($this, $version, $language, $request);
  }

  public function getStaticContent($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->static_content = new getStaticContent();
    return $this->static_content->all($this, $version, $language, $request);
  }

  public function getExperiences($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->experiences = new getExperiences();
    return $this->experiences->all($this, $version, $language, $request);
  }

  public function getSuggestion($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->suggestion = new getSuggestion();
    return $this->suggestion->all($this, $version, $language, $request);
  }

  public function getPlaces($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->places = new getPlaces();
    return $this->places->all($this, $version, $language, $request);
  }

  public function getFeaturedPlaces($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->featured_places = new getFeaturedPlaces();
    return $this->featured_places->all($this, $version, $language, $request);
  }

  public function getRating($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->rating = new getRating();
    return $this->rating->all($this, $version, $language, $request);
  }

  public function getEvents($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->events = new getEvents();
    return $this->events->all($this, $version, $language, $request);
  }

  public function getEventDetail($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->event_detail = new getEventDetail();
    return $this->event_detail->all($this, $version, $language, $request);
  }

  public function getEventAlsoLike($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->event_also_like = new getEventAlsoLike();
    return $this->event_also_like->all($this, $version, $language, $request);
  }

  public function getEventCategories($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->event_categories = new getEventCategories();
    return $this->event_categories->all($this, $version, $language, $request);
  }

  public function getHistory($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->history = new getHistory();
    return $this->history->all($this, $version, $language, $request);
  }

  public function getFlashDeals($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->flash_deals = new getFlashDeals();
    return $this->flash_deals->all($this, $version, $language, $request);
  }

  public function getPersonalization($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->personalization = new getPersonalization();
    return $this->personalization->all($this, $version, $language, $request);
  }

  public function getLocation($version = 'v1', $language = 'en') {
    $request = \Drupal::request();
    $this->location = new getLocation();
    return $this->location->all($this, $version, $language, $request);
  }

  public function getProfile($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $this->profile = new getProfile();
    return $this->profile->all($this, $version, $language, $request);
  }

  public function getWeekendActivities($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $this->weekend_activities = new getWeekendActivities();
    return $this->weekend_activities->all($version, $language, $request);
  }

  public function getWeekendActivitiesDetail($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $this->weekend_activities_detail = new getWeekendActivitiesDetail();
    return $this->weekend_activities_detail->all($version, $language, $request);
  }

  public function getWeekendActivitiesAlsoLike($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $this->weekend_activities_also_like = new getWeekendActivitiesAlsoLike();
    return $this->weekend_activities_also_like->all($version, $language, $request);
  }

  public function getAmenitiesAlsoLike($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $amenities_also_like = new getAmenitiesAlsoLike();
    return $amenities_also_like->all($version, $language, $request);
  }


  /* POST API */
  public function postRegisterForm($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postRegisterForm = new postRegisterForm();
    return $postRegisterForm->all($this, $version, $language, $request);
  }

  public function postLoginForm($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postLoginForm = new postLoginForm();
    return $postLoginForm->all($this, $version, $language, $request);
  }

  public function postLoginSocialForm($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postLoginSocialForm = new postLoginSocialForm();
    return $postLoginSocialForm->all($this, $version, $language, $request);
  }

  public function postLinkAccount($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postLinkAccount = new postLinkAccount();
    return $postLinkAccount->all($this, $version, $language, $request);
  }

  public function postPersonalization($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postPersonalization = new postPersonalization();
    return $postPersonalization->all($this, $version, $language, $request);
  }

  public function postForgotPasswordForm($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postForgotPasswordForm = new postForgotPasswordForm();
    return $postForgotPasswordForm->all($this, $version, $language, $request);
  }

  public function postVerifyCode($version = 'v1', $language = 'en', $action){
    $request = \Drupal::request();
    $postVerifyCode = new postVerifyCode();
    return $postVerifyCode->all($this, $version, $language, $request, $action);
  }

  public function postNewPassword($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postNewPassword = new postNewPassword();
    return $postNewPassword->all($this, $version, $language, $request);
  }

  public function resendVerifyCode($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $resendVerifyCode = new resendVerifyCode();
    return $resendVerifyCode->all($this, $version, $language, $request);
  }

  public function postSearch($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postSearch = new postSearch();
    return $postSearch->all($this, $version, $language, $request);
  }

  public function postFilter($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $postFilter = new postFilter();
    return $postFilter->all($this, $version, $language, $request);
  }

  public function notificationSetting($version = 'v1', $language = 'en'){
    $request = \Drupal::request();
    $notificationSetting = new notificationSetting();
    return $notificationSetting->all($this, $version, $language, $request);
  }
}
