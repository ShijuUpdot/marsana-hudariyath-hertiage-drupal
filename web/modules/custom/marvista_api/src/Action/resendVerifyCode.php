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
use Drupal\Core\Database\Database;

class resendVerifyCode {

  private $helper;
  private $db;

  public function __construct() {
    $this->helper = new MarvistaHelper();
    $this->db = \Drupal::database();
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

        if ($this->_hasError($dataBody)) {
          return new JsonResponse(
            [
              'status' => 400,
              'message' => 'Bad Request',
            ]
          );
        }

        $email = $dataBody['email'];
        // Check email exists
        $user = user_load_by_mail($email);

        if ($user && $user->isActive() == 0) {
          // Send Code to Email
          $code = $this->helper->generateRandomCode(6);
          $token_code = $this->helper->generateRandomString(32);
          /*$subject = 'Your code of active account';
          $message = 'Your code here: ' . $data['code'];
          $to = $email;*/
          MarvistaHelper::sendOTPEmail([
            'code' => $code,
            'resend' => TRUE,
          ], $user);
          //$this->helper->sendEmail($subject, $message, $to);

          // Save uid, email and generate token for user need to change password
          $user_data = [
            'uid' => $user->id(),
            'email' => $email,
            'code' => $code,
            'token_code' => $token_code,
          ];
          $result = $this->insertData($user_data);
          $data['code'] = $code;
          $data['token_code'] = $token_code;

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

  private function insertData($data) {
    $connection = \Drupal::database();
    $expiredAt = time() + 3600; // 1 hour
    $select = $connection->select('user_active_logs')
      ->fields('user_active_logs')
      ->condition('uid', $data['uid'])
      ->condition('email', $data['email'])
      ->execute()->fetch();
    if (!empty($select)) {
      $connection->delete('user_active_logs')
        ->condition('uid', $data['uid'])
        ->condition('email', $data['email'])
        ->execute();
    }
    $entry = [
      'uid' => $data['uid'],
      'email' => $data['email'],
      'code' => $data['code'],
      'token_code' => $data['token_code'],
      'created' => time(),
      'expired' => $expiredAt,
      'status' => 1,
    ];

    try {
      $last_id = $this->db->query('SELECT MAX(id) FROM user_active_logs')->fetchField();
      $entry['id'] = $last_id ? $last_id + 1 : 1;
      $connection->insert('user_active_logs')
        ->fields($entry)
        ->execute();
    }
    catch (\Exception $e) {
    }

    return $select;
  }

  private function _hasError($data) {
    $error = 0;

    if (empty($data['email']) || $data['email'] == '') {
      $error = 1;
    }

    $isValid = \Drupal::service('email.validator')->isValid($data['email']);
    if ($isValid == 0 || empty($isValid)) {
      $error = 1;
    }

    return $error;
  }
}
