<?php

namespace Drupal\marvista_api\Action;

use Drupal\Core\Session\AccountProxyInterface;
use Drupal\dbtng_example\DbtngExampleRepository;
use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvista_api\MarvistaAPIRepository;
use Drupal\Core\Database\Connection;

class postFilter
{

  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all(
    JsonApiController $controller,
    $version,
    $language,
    Request $request
  ) {
    $data = [];
    $checkAccessToken = $request->headers->get('X-CSRF-Token');
    if ($checkAccessToken) {
      $checkAccessToken = $this->helper->_checkAccessToken($checkAccessToken);
      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      }
      elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      }
      else {
        $dataBody = $request->getContent();
        $dataBody = json_decode($dataBody, TRUE);

        if( $this->_hasError($dataBody) ){
          return new JsonResponse(
            [
              'status' => 400,
              'message' => 'Bad Request',
            ]
          );
        }

        $status = 200;
        $message = 'Success';


      }
    }
    else {
      $status = 401;
      $message = 'Unauthorized';
    }

    return new JsonResponse(
      [
        'data' => $data,
        'status' => $status,
        'message' => $message,
      ]
    );
  }

  private function _hasError($data){
    $error = 0;

    if( empty( $data['filters'] ) || $data['filters'] == ''){
      $error = 1;
    }

    return $error;
  }


}
