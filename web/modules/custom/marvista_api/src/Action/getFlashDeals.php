<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getFlashDeals
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
        'title' => 'Grab 2 drinks at Starbucks',
        'open' => '',
        'close' => '',
        'image' => $icon,
        'url' => '',
        'price' => '10.00',
        'currency' => 'USD',
      ],
      1 => [
        'id' => 2,
        'title' => 'Grab 2 drinks at Starbucks',
        'open' => '',
        'close' => '',
        'image' => $icon,
        'url' => '',
        'price' => '10.00',
        'currency' => 'USD',
      ],
      2 => [
        'id' => 3,
        'title' => 'Grab 2 drinks at Starbucks',
        'open' => '',
        'close' => '',
        'image' => $icon,
        'url' => '',
        'price' => '10.00',
        'currency' => 'USD',
      ],
    ];

    return $data;
  }

}
