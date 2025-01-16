<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getSuggestion
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
        'title' => 'Visit the pool',
        'image' => $icon,
        'url' => '',
        'note' => 'Suitable for kids',
      ],
      1 => [
        'id' => 2,
        'title' => 'Visit the pool',
        'image' => $icon,
        'url' => '',
        'note' => 'Suitable for kids',
      ],
      2 => [
        'id' => 3,
        'title' => 'Visit the pool',
        'image' => $icon,
        'url' => '',
        'note' => 'Suitable for kids',
      ],
    ];

    return $data;

  }

}
