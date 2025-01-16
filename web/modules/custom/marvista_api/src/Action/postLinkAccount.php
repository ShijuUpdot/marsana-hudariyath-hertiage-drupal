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

class postLinkAccount
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
        if($user) {
          // Insert login account log
          $user_data = [
            'uid' => $user->id(),
            'device_id' => '',
            'type' => $dataBody['type'],
          ];

          $insertData = $this->insertData($user_data);
          $data['access_token'] = $insertData;

          $status = 200;
          $message = 'Success';

        } else {
          // not exists
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

  private function checkAccountExist($data) {
    try {
      // Verify user with email and password after link account with social_id
      $email = $data['email'];
      $password = $data['password'];
      $uid = \Drupal::service('user.auth')->authenticate($email, $password);
      if($uid > 0){
        // Update social id to account
        $user = User::load($uid);
        $user->set('field_social_id', $data['social_id']);
        $user->save();
        return $user;
      }
    }
    catch (\Exception $e) {}

    return FALSE;
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

      try {
        if(empty($select)){
          $last_id = $this->db->query('SELECT MAX(id) FROM users_access_token')->fetchField();          
          $entry = [
            'id' => $last_id ? $last_id + 1 : 1,
            'uid' => $uid,
            'access_token' => $access_token,
            'device_id' => $data['device_id'],
            'type_login' => $data['type'],
            'created' => time(),
            'expired' => $expiredAt,
            'status' => 1,
          ];

          $connection->insert('users_access_token')
            ->fields($entry)
            ->execute();
        } else {
          $access_token = $select->access_token;
        }

      }
      catch (\Exception $e) {}
    }

    return $access_token ?? NULL;
  }

  private function _hasError($data){
    $error = 0;

    if( empty( $data['social_id'] ) || $data['social_id'] == ''){
      $error = 1;
    }

    if( empty( $data['type'] ) || $data['type'] == ''){
      $error = 1;
    }

    if( empty( $data['email'] ) || $data['email'] == ''){
      $error = 1;
    }

    if( empty( $data['password'] ) || $data['password'] == ''){
      $error = 1;
    }

    return $error;
  }
}
