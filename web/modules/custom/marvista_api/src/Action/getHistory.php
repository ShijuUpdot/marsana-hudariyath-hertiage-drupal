<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getHistory
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
    global $base_url;
    $icon = $base_url . drupal_get_path('module', 'marvista_api') . '/images/demo/image_lorem.png';
    $data = [
      0 => [
        'id' => 1,
        'title' => 'Starbucks',
        'type' => 'Cafe',
        'image' => $icon,
        'date' => '20/11/2020',
        'url' => '',
      ],
      1 => [
        'id' => 2,
        'title' => 'Costa Coffee',
        'type' => 'Cafe',
        'image' => $icon,
        'date' => '20/11/2020',
        'url' => '',
      ],
      2 => [
        'id' => 3,
        'title' => 'Burger King',
        'type' => 'Dining',
        'image' => $icon,
        'date' => '20/11/2020',
        'url' => '',
      ],
    ];

    return $data;
  }

}