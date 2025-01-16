<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class postPersonalization
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
        $updateData = [
          'access_token' => $request->headers->get('X-CSRF-Token'),
          'personalization' => $dataBody
        ];

        $data = $this->updateData($updateData);
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

  private function updateData($data) {
    $entry = [
      'personalization' => json_encode($data['personalization']['personal_list'])
    ];

    try {
      $connection = \Drupal::database();
      $select = $connection->select('users_access_token')
        ->fields('users_access_token')
        ->condition('access_token', $data['access_token'])
        ->execute()->fetch();

      if( !empty($select) ){
        $count = $connection->update('users_access_token')
          ->fields($entry)
          ->condition('access_token', $data['access_token'])
          ->execute();

        if($select->uid){
          $user = User::load($select->uid);
          if ($user->hasField('field_has_fill_personalization') ) {
            $user->set('field_has_fill_personalization', $entry['personalization']);
            $user->save();
            $count = 2;
          }

        }

      }

    }
    catch (\Exception $e) {}

    return $count ?? NULL;
  }

  private function _hasError($data){
    $error = 0;

    if( empty( $data['personal_list'] ) || $data['personal_list'] == ''){
      $error = 1;
    }

    return $error;
  }
}
