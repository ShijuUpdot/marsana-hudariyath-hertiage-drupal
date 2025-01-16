<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\marvista_api\ScheduleItemProcessor\EventReminder;
use Drupal\marvista_api\ScheduleItemProcessor\WelcomeMailSender;
use Drupal\schedule_item\Entity\ScheduleItem;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Database\Database;

class postRegisterForm {

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

        // Check Account Active
        $full_name = $dataBody['first_name'] . ' ' . $dataBody['last_name'];
        $first_name = $dataBody['first_name'];
        $last_name = $dataBody['last_name'];
        $phone_number = $dataBody['phone_number'];
        $email = $dataBody['email'];
        $day_of_birth = $dataBody['day_of_birth'];
        $marital_status = $dataBody['marital_status'];
        $password = $dataBody['password'];
        $type = $dataBody['type'];
        $social_id = $dataBody['social_id'];
        $hasSocialEmail = $dataBody['hasSocialEmail'];
        $dial_code = $dataBody['dial_code'];
        $active = 0;
        if ($hasSocialEmail == 1) {
          $active = 1;
          $password = 'P@ssw0rd8888';
        }

        $user = user_load_by_mail($email);
        if (empty($user)) {
          $userData = User::create(
            [
              'name' => $email,
              'pass' => $password,
              'status' => $active,
              'mail' => $email,
              'field_full_name' => $full_name,
              'field_first_name' => $first_name,
              'field_last_name' => $last_name,
              'field_phone_number' => $phone_number,
              'field_day_of_birth' => $day_of_birth,
              'field_marital_status' => $marital_status,
              'field_type_registration' => $type,
              'field_social_id' => $social_id,
              'field_dial_code' => $dial_code,
            ]
          );
          $res = $userData->save();

          // $schedule_item = ScheduleItem::create([
          //   'queued' => \Drupal::time()->getCurrentTime(),
          //   'name' => 'Welcome mail for: ' . $userData->getDisplayName(),
          //   'execute_function' => WelcomeMailSender::class . '::process_' . $language,
          //   'entity_type' => $userData->getEntityTypeId(),
          //   'entity_id' => $userData->id(),
          // ]);
          // $schedule_item->save();

          if ($res > 0) {
            $uid = \Drupal::service('user.auth')->authenticate(
              $email,
              $password
            );
            if ($hasSocialEmail == 1) {
              // Insert login account log
              $user_data = [
                'uid' => $uid,
                'device_id' => '',
                'type' => $type,
              ];

              $insertData = $this->insertUserAccessToken($user_data);
              $data['access_token'] = $insertData;

            }
            else {
              // Send Code to Email
              $code = $this->helper->generateRandomCode(6);
              $token_code = $this->helper->generateRandomString(32);
              $subject = 'Your code of forgot password';
              //$message = 'Your code here: ' . $data['code'];
              $to = $email;
              //$this->helper->sendEmail($subject, $message, $to);
              MarvistaHelper::sendOTPEmail(['code' => $code], User::load($uid));
              $user_data = [
                'uid' => $uid,
                'email' => $email,
                'code' => $code,
                'token_code' => $token_code,
              ];
              $result = $this->insertLogsData($user_data);
              if ($result) {
                $code = $result->code;
                $token_code = $result->token_code;
              }
              $data['code'] = $code;
              $data['token_code'] = $token_code;
            }

            $status = 200;
            $message = 'Success';
          }
          else {
            $status = 100;
            $message = 'Something went wrong';
          }

        }
        else {
          if ($user && $user->isActive() == 0) {
            // Send code active
            $code = $this->helper->generateRandomCode(6);
            $token_code = $this->helper->generateRandomString(32);
            //          $subject = 'Your code of active account';
            //          $message = 'Your code here: ' . $data['code'];
            //          $to = $email;
            MarvistaHelper::sendOTPEmail(['code' => $code], $user);

            //$this->helper->sendEmail($subject, $message, $to);

            // Save uid, email and generate token for user need to change password
            $user_data = [
              'uid' => $user->id(),
              'email' => $email,
              'code' => $code,
              'token_code' => $token_code,
            ];
            $result = $this->checkAccountActive($user_data);
            if ($result) {
              $code = $result->code;
              $token_code = $result->token_code;
            }
            $data['code'] = $code;
            $data['token_code'] = $token_code;

            $status = 100;
            $message = 'Something went wrong: user is not activated';
          }
          else {
            if ($user && $user->isActive() == 1) {
              $status = 200;
              $message = 'Success';
            }
            else {
              $status = 100;
              $message = 'Something went wrong';
            }
          }
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

  private function insertLogsData($data) {
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
      if (empty($select)) {
        $last_id = $this->db->query('SELECT MAX(id) FROM user_active_logs')->fetchField();
        $entry['id'] = $last_id ? $last_id + 1 : 1;
        $connection->insert('user_active_logs')
          ->fields($entry)
          ->execute();
      }
    }
    catch (\Exception $e) {
    }

    return $select;
  }

  private function checkAccountActive($data) {
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
      if (empty($select)) {
        $last_id = $this->db->query('SELECT MAX(id) FROM user_active_logs')->fetchField();
        $entry['id'] = $last_id ? $last_id + 1 : 1;
        $connection->insert('user_active_logs')
          ->fields($entry)
          ->execute();
      }
    }
    catch (\Exception $e) {
    }

    return $select;
  }

  private function insertUserAccessToken($data) {
    $connection = \Drupal::database();
    $expiredAt = time() + 3600; // 1 hour
    $access_token = md5(user_password());
    if (isset($data['uid'])) {
      $uid = $data['uid'];
      $select = $connection->select('users_access_token')
        ->fields('users_access_token')
        ->condition('uid', $data['uid'])
        ->condition('type_login', $data['type'])
        ->execute()->fetch();

      try {
        if (empty($select)) {
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
        }
        else {
          $access_token = $select->access_token;
        }

      }
      catch (\Exception $e) {
      }
    }

    return $access_token ?? NULL;
  }

  private function _hasError($data) {
    $error = 0;

    if (empty($data['first_name']) || $data['first_name'] == '') {
      $error = 1;
    }

//    if (empty($data['last_name']) || $data['last_name'] == '') {
//      $error = 1;
//    }

    if (empty($data['email']) || $data['email'] == '') {
      $error = 1;
    }

    if (empty($data['day_of_birth']) || $data['day_of_birth'] == '') {
      $error = 1;
    }

    if (empty($data['marital_status']) || $data['marital_status'] == '') {
      $error = 1;
    }

    if($data['hasSocialEmail'] == 0){
      if (empty($data['password']) || $data['password'] == '') {
        $error = 1;
      }
    }

    if (empty($data['type']) || $data['type'] == '') {
      $error = 1;
    }

    return $error;
  }

}
