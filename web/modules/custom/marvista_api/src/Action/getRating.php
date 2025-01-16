<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getRating
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
    $data = [
      0 => [
        'id' => 1,
        'title' => 'FLYP',
        'lat' => '',
        'long' => '',
        'image' => '',
        'url' => '',
        'rate' => '',
      ],
      1 => [
        'id' => 2,
        'title' => 'Hard Rock Cafe',
        'lat' => '',
        'long' => '',
        'image' => '',
        'url' => '',
        'rate' => '',
      ],
      2 => [
        'id' => 3,
        'title' => 'Starbucks',
        'lat' => '',
        'long' => '',
        'image' => '',
        'url' => '',
        'rate' => '',
      ],
      3 => [
        'id' => 4,
        'title' => 'Hard Cafe',
        'lat' => '',
        'long' => '',
        'image' => '',
        'url' => '',
        'rate' => '',
      ],
      4 => [
        'id' => 5,
        'title' => 'Starbucks 1',
        'lat' => '',
        'long' => '',
        'image' => '',
        'url' => '',
        'rate' => '',
      ],
    ];

    return $data;
  }

}
