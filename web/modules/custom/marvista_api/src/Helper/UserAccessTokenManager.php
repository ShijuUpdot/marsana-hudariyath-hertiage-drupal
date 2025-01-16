<?php

namespace Drupal\marvista_api\Helper;

use Drupal\user\Entity\User;
use Drupal\user\UserInterface;
use Drupal\Core\Database\Database;

/**
 * Class UserAccessTokenManager.
 *
 * @package Drupal\marvista_api\Helper
 */
class UserAccessTokenManager {

  const USERS_ACCESS_TOKEN_TABLE = 'users_access_token';
  private $db;

  public function __construct() {
    $this->db = \Drupal::database();
  }
  /**
   * Load device id by user token.
   */
  public static function loadDeviceIdByUser(UserInterface $user) {
    $database = \Drupal::database();
    $query = $database->select(self::USERS_ACCESS_TOKEN_TABLE);
    $query->fields(self::USERS_ACCESS_TOKEN_TABLE, [
      'uid',
      'device_id',
      'device_token',
      'status',
      'expired',
    ]);
    $query->condition('uid', $user->id(), '=');
    $query->condition('device_id', NULL, 'IS NOT NULL');
    $query->condition('status', 1);
    $result = $query->execute()->fetchAll();
    return $result;
  }

  /**
   * Insert password token.
   */
  public static function insertPasswordToken($data) {
    $connection = \Drupal::database();
    $expiredAt = time() + 3600;
    $select = $connection->select('user_changed_password')
      ->fields('user_changed_password')
      ->condition('uid', $data['uid'])
      ->condition('email', $data['email'])
      ->execute()->fetch();
    if (!empty($select)) {
      $connection->delete('user_changed_password')
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
      $last_id = \Drupal::database()->query('SELECT MAX(id) FROM user_changed_password')->fetchField();
      $entry['id'] = $last_id ? $last_id + 1 : 1;
      $select = $connection->insert('user_changed_password')
        ->fields($entry)
        ->execute();
    }
    catch (\Exception $e) {
      \Drupal::logger('user_changed_password')->error($e->getMessage());
    }

    return $select;
  }

  public static function clearUserAccessToken(User $user, $keep_access_token = NULL) {
    try {
      $database = \Drupal::database();
      $query = $database->delete(self::USERS_ACCESS_TOKEN_TABLE)
        ->condition('uid', $user->id());
      if (!empty($keep_access_token)) {
        $query->condition('access_token', $keep_access_token, '<>');
      }
      $query->execute();
      return TRUE;

    }
    catch (\Exception $exception) {
      \Drupal::logger('user_access_token')->error($exception->getMessage());
    }
    return FALSE;
  }

  public static function generateTokenCode() {
    $helper = new MarvistaHelper();
    $code = $helper->generateRandomCode(6);
    $token_code = $helper->generateRandomString(32);
    return ['code' => $code, 'token' => $token_code];
  }

  public static function updateUserDeviceToken(User $user, $data) {
    try {
      $database = \Drupal::database();
      $query = $database->update(self::USERS_ACCESS_TOKEN_TABLE)
        ->condition('uid', $user->id())
        ->condition('device_id', $data['device_id'])
        ->fields(['device_token' => $data['device_token']]);
      $query->execute();
      return TRUE;
    }
    catch (\Exception $exception) {
      \Drupal::logger('user_access_token')->error($exception->getMessage());
    }
    return FALSE;
  }

}
