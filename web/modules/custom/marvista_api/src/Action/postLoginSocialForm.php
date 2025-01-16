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
use Drupal\marvista_api\Action\notificationSetting;
use Drupal\Core\Database\Database;

class postLoginSocialForm
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
        // Check social id exists or not
        $user = $this->checkAccountExist($dataBody);

        if($user){
          // Check Account Active
          if( !is_array($user) && $user->isActive() == 0 ){
            // User Exists
            notificationSetting::insertParagraphItem($user);
            // Send code active
            $code = $this->helper->generateRandomCode(6);
            $token_code = $this->helper->generateRandomString(32);
            /*$subject = 'Your code of active account';
            $message = 'Your code here: ' . $data['code'];
            $to = $user->getEmail();*/
            MarvistaHelper::sendOTPEmail(['code' => $code], $user);
            //$this->helper->sendEmail($subject, $message, $to);

            // Save uid, email and generate token for user need to change password
            $user_data = [
              'uid' => $user->id(),
              'email' => $user->getEmail(),
              'code' => $code,
              'token_code' => $token_code,
              'device_id' => $dataBody['device_id'],
              'type' => $dataBody['type'],
            ];
            $result = $this->checkAccountActive($user_data);
            if($result){
              $code = $result->code;
              $token_code = $result->token_code;
            }
            $data['code'] = $code;
            $data['token_code'] = $token_code;

            $status = 200;
            $message = 'Success';

          } else if( is_array($user) && $user['status'] == 101) {
            // return other field for link account
            return new JsonResponse(
              [
                'responseCode' => $user['responseCode'],
                'status' => $user['status'],
                'message' => $user['message']
              ]
            );


          } else {
            // Insert login account log
            $user_data = [
              'uid' => $user->id(),
              'device_id' => $dataBody['device_id'],
              'type' => $dataBody['type'],
            ];

            $insertData = $this->insertData($user_data);
            $data['access_token'] = $insertData;

            $status = 200;
            $message = 'Success';
          }

        } else {
          // not exists
          $status = 100;
          $message = 'Something went wrong: user does not exists';
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

  private function checkAccountExist($data) {
    $connection = \Drupal::database();
    $select = $connection->select('user__field_social_id')
      ->fields('user__field_social_id')
      ->condition('entity_id', 0, '>')
      ->condition('field_social_id_value', $data['social_id'])
      ->execute()->fetch();

    try {
      if(!empty($select)){
        return User::load($select->entity_id);
      } else if( !empty($data['email']) ) {
        // Load user by email to link account api
        $user = user_load_by_mail($data['email']);
        if(!empty($user)){
          $response = [
            'status' => 101,
            'responseCode' => 'link_account',
            'message' => 'Link Account'
          ];
          return $response;
        }
      } else {
        return FALSE;
      }

    }
    catch (\Exception $e) {}

    return FALSE;
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

  private function insertData($data) {
    $connection = \Drupal::database();
    $expiredAt = time() + 3600; // 1 hour
    $access_token = md5(user_password());
    if( isset($data['uid']) ){
      $uid = $data['uid'];
      $select = $connection->select('users_access_token')
        ->fields('users_access_token')
        ->condition('uid', $data['uid'])
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
      'access_token' => $access_token,
      'device_id' => $data['device_id'],
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
        $access_token = $select->access_token;
      }

    }
    catch (\Exception $e) {}

    return $access_token ?? NULL;
  }

  private function _hasError($data){
    $error = 0;

    if( empty( $data['type'] ) || $data['type'] == ''){
      $error = 1;
    }

    if($data['type'] != 'user' ){
      if( empty( $data['social_id'] ) || $data['social_id'] == ''){
        $error = 1;
      }
    }

    if( empty( $data['device_id'] ) || $data['device_id'] == ''){
      $error = 1;
    }

    return $error;
  }
}
