<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\marvista_api\Helper\UserAccessTokenManager;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class postNewPassword {

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
    $token = $request->headers->get('X-CSRF-Token');
    if ($token) {
      $checkAccessToken = $this->helper->_checkAccessToken($token);
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

        if ($this->_hasError($dataBody)) {
          return new JsonResponse(
            [
              'status' => 400,
              'message' => 'Bad Request',
            ]
          );
        }
        $dataBody['access_token'] = $token;
        // Check Token code to do update new password for user
        $changed = $this->updateData($dataBody);
        if ($changed > 0) {
          $status = 200;
          $message = 'Success';

        }
        else {
          $status = 100;
          $message = 'Something went wrong';
        }


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
    $connection = \Drupal::database();
    $expiredAt = time() + 3600; // 1 hour
    $select = $connection->select('user_changed_password')
      ->fields('user_changed_password')
      ->condition('token_code', $data['token_code'])
      ->execute()->fetch();

    try {
      if (!empty($select)) {
        $user = User::load($select->uid);
        $user->setPassword($data['new_password']);
        $changed = $user->save();

        if ($changed) {
          $query = \Drupal::database()->delete('user_changed_password');
          $query->condition('token_code', $data['token_code']);
          $query->execute();

          UserAccessTokenManager::clearUserAccessToken($user, $data['access_token']);

          return $changed;
        }
      }
    }
    catch (\Exception $e) {
      \Drupal::logger('user_change_password')->error($e->getMessage());
    }

    return FALSE;


  }

  private function _hasError($data) {
    $error = 0;

    if (empty($data['new_password']) || $data['new_password'] == '') {
      $error = 1;
    }

    if (empty($data['new_password']) || $data['confirm_password'] == '') {
      $error = 1;
    }

    if (empty($data['token_code']) || $data['token_code'] == '') {
      $error = 1;
    }

    if ($data['new_password'] != $data['confirm_password']) {
      $error = 1;
    }

    return $error;
  }
}
