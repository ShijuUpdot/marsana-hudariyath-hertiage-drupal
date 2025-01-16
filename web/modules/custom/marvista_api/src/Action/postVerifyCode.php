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

class postVerifyCode
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
    Request $request,
    $action
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

        $connection = \Drupal::database();
        $code = $dataBody['code'];

        if($action == 'active'){
          // Send code for active account
          $user = $this->updateData($dataBody);
          if(!empty($user)){
            // Insert login account log
            $user_data = [
              'uid' => $user->id(),
              'device_id' => '',
              'type' => 'email',
            ];

            $insertData = $this->insertData($user_data);
            $data['access_token'] = $insertData;

            $status = 200;
            $message = 'Success';
          } else {
            $status = 404;
            $message = 'Not Found: code not found';
          }

        } else if($action == 'forgot'){
          $select = $connection->select('user_changed_password')
            ->fields('user_changed_password')
            ->condition('code', $code)
            ->execute()->fetch();

          // Send code for forgot password
          if(!empty($select)){
            $token_code = $select->token_code;
            $status = 200;
            $message = 'Success';
            $data['token_code'] = $token_code;
          } else {
            $status = 404;
            $message = 'Not Found: code not found';
          }

        } else {
          // No action send code
          $status = 404;
          $message = 'Not Found';
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

  private function updateData($data) {
    $connection = \Drupal::database();
    $expiredAt = time() + 3600; // 1 hour
    $select = $connection->select('user_active_logs')
      ->fields('user_active_logs')
      ->condition('code', $data['code'])
      ->execute()->fetch();

    try {
      if(!empty($select)) {
        $user = User::load($select->uid);
        $user->set('status', 1);
        $changed = $user->save();

        if($changed){
          $query = \Drupal::database()->delete('user_active_logs');
          $query->condition('code', $data['code']);
          $query->execute();
          return $user;
        }
      }
    }
    catch (\Exception $e) {}

    return FALSE;


  }

  private function _hasError($data){
    $error = 0;

    if( empty( $data['code'] ) || $data['code'] == ''){
      $error = 1;
    }

    return $error;
  }


}
