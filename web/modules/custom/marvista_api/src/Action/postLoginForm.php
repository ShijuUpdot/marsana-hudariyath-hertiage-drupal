<?php

namespace Drupal\marvista_api\Action;

use Drupal\Core\Session\AccountProxyInterface;
use Drupal\dbtng_example\DbtngExampleRepository;
use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvista_api\MarvistaAPIRepository;
use Drupal\Core\Database\Connection;
use Drupal\Core\Database\Database;

class postLoginForm
{
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
        $message = 'Unauthorized: AccessToken';
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

        if($dataBody['type'] == 'guest'){
          $insertData = $this->insertData($dataBody);
          $data['access_token'] = $insertData;
          $status = 200;
          $message = 'Success';

          return new JsonResponse(
            [
              'data' => $data,
              'status' => $status,
              'message' => $message,
            ]
          );
        }


        $email = $dataBody['email'];
        $password = $dataBody['password'];
        $uid = \Drupal::service('user.auth')->authenticate($email, $password);
        if( !empty($uid) ){
          $user = User::load($uid);
          notificationSetting::insertParagraphItem($user);

          // Check Account Active
          if($user->isActive() == 0){
            // Send code active
            $code = $this->helper->generateRandomCode(6);
            $token_code = $this->helper->generateRandomString(32);
//            $subject = 'Your code of active account';
//            $message = 'Your code here: ' . $data['code'];
//            $to = $email;
            // $this->helper->sendEmail($subject, $message, $to);
            MarvistaHelper::sendOTPEmail(['code' => $code], $user);

            // Save uid, email and generate token for user need to change password
            $user_data = [
              'uid' => $user->id(),
              'email' => $email,
              'code' => $code,
              'token_code' => $token_code,
              'device_id' => $dataBody['device_id'],
              'device_token' => $dataBody['device_token'],
              'type' => $dataBody['type'],
            ];
            $result = $this->checkAccountActive($user_data);
            if($result){
              $code = $result->code;
              $token_code = $result->token_code;
            }
            $data['code'] = $code;
            $data['token_code'] = $token_code;

            $insertData = $this->insertData($user_data);
            $data['access_token'] = $insertData;



            $status = 200;
            $message = 'Success';

          } else {
            $user_data = [
              'uid' => $uid,
              'device_id' => $dataBody['device_id'],
              'device_token' => $dataBody['device_token'],
              'type' => $dataBody['type'],
            ];

            $insertData = $this->insertData($user_data);
            $data['access_token'] = $insertData;

            $status = 200;
            $message = 'Success';
          }


        } else {
          return new JsonResponse(
            [
              'status' => 403,
              'message' => 'Invalid Email Or Password',
            ]
          );
        }

      }
    }
    else {
      $status = 401;
      $message = 'Unauthorized: X-CSRF-Token';
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
    $access_token = md5(user_password());
    if( isset($data['uid']) ){
      $uid = $data['uid'];
      $select = $connection->select('users_access_token')
        ->fields('users_access_token')
        ->condition('uid', $data['uid'])
        ->condition('device_id', $data['device_id'])
        ->condition('type_login', $data['type'])
        ->execute()->fetch();
    } else {
      $uid = 0;
      $select = $connection->select('users_access_token')
        ->fields('users_access_token')
        ->condition('device_id', $data['device_id'])
        ->condition('type_login', $data['type'])
        ->execute()->fetch();
    }
    $entry = [
      'uid' => $uid,
      'access_token' => $select->access_token ? $select->access_token : $access_token,
      'device_id' => $data['device_id'],
      'device_token' => $data['device_token'],
      'type_login' => $data['type'],
      'created' => time(),
      'expired' => $expiredAt,
      'status' => 1,
    ];

    try {
      if(empty($select)){
        $last_id = $this->db->query('SELECT MAX(id) FROM users_access_token')->fetchField();
        $entry['id'] = $last_id ? $last_id + 1 : 1;

        $connection->insert('users_access_token')
          ->fields($entry)
          ->execute();
      } else {
        $connection->update('users_access_token')
          ->condition('uid', $data['uid'])
          ->condition('device_id', $data['device_id'])
          ->condition('type_login', $data['type'])
          ->fields($entry)->execute();
        $access_token = $select->access_token;
      }

    }
    catch (\Exception $e) {}
    return $access_token ?? NULL;
  }

  private function checkAccountActive($data){
    $connection = \Drupal::database();
    $expiredAt = time() + 3600; // 1 hour
    $select = $connection->select('user_active_logs')
      ->fields('user_active_logs')
      ->condition('uid', $data['uid'])
      ->condition('email', $data['email'])
      ->execute()->fetch();

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
      if(empty($select)) {
        $last_id = $this->db->query('SELECT MAX(id) FROM user_active_logs')->fetchField();
        $entry['id'] = $last_id ? $last_id + 1 : 1;
        $connection->insert('user_active_logs')
          ->fields($entry)
          ->execute();
      }
    }
    catch (\Exception $e) {}

    return $select;
  }

  private function _hasError($data){
    $error = 0;

    if( empty( $data['type'] ) || $data['type'] == ''){
      $error = 1;
    }

    if($data['type'] != 'guest' ){
      if( empty( $data['email'] ) || $data['email'] == ''){
        $error = 1;
      }

      if( empty( $data['password'] ) || $data['password'] == ''){
        $error = 1;
      }
    }

    if( empty( $data['device_id'] ) || $data['device_id'] == ''){
      $error = 1;
    }

    return $error;
  }
}
