<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getConfig
{
  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all(JsonApiController $controller, $version, $language, Request $request)
  {
    $data = [];
    $checkAccessToken = $request->headers->get('X-CSRF-Token');
    if($checkAccessToken){
      $checkAccessToken = $this->helper->_checkAccessToken($checkAccessToken);
      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      } elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      } else {
        $results = $this->getResults();
        if(!empty($results)){
          $data = $results;
        }
        $status = 200;
        $message = 'success';
      }
    } else {
      $status = 401;
      $message = 'Unauthorized';
    }


    return new JsonResponse([
      'data' => $data,
      'status' => $status,
      'message' => $message,
    ]);
  }

  private function getResults() {
    $config = \Drupal::config('hudayriyat_custom_configs.settings');
    $marital_status = array(
      0 => array(
        'id' => 1,
        'name_en' => $config->get('marital_status_single_en'),
        'name_ar' => $config->get('marital_status_single_ar'),
      ),
      1 => array(
        'id' => 2,
        'name_en' => $config->get('marital_status_family_en'),
        'name_ar' => $config->get('marital_status_family_ar'),
      ),
      2 => array(
        'id' => 3,
        'name_en' => $config->get('marital_status_kids_en'),
        'name_ar' => $config->get('marital_status_kids_ar'),
      )
    );

    $default_location = array(
      'lat' => $config->get('default_location_lat_en'),
      'lon' => $config->get('default_location_lon_en')
    );

    $default_distance_nearby = $config->get('default_distance_nearby_en');

    $help_message = array(
      'title_en' => $config->get('help_message_title_en'),
      'title_ar' => $config->get('help_message_title_ar'),
      'sub_title_en' => $config->get('help_message_sub_title_en'),
      'sub_title_ar' => $config->get('help_message_sub_title_ar')
    );

    $report_message = array(
      'title_en' => $config->get('report_message_title_en'),
      'title_ar' => $config->get('report_message_title_ar'),
      'sub_title_en' => $config->get('report_message_sub_title_en'),
      'sub_title_ar' => $config->get('report_message_sub_title_ar')
    );

    $data = array(
      'marital_status' => $marital_status,
      'default_location' => $default_location,
      'default_distance_nearby' => $default_distance_nearby,
      'help_message' => $help_message,
      'title_social_media_en' => $config->get('title_social_media_en'),
      'title_social_media_ar' => $config->get('title_social_media_ar'),
      'link_facebook' => $config->get('link_facebook'),
      'link_instagram' => $config->get('link_instagram'),
      'link_twitter' => $config->get('link_twitter'),
    );

    return $data;

  }

}
