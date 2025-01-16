<?php

namespace Drupal\marvista_api\Action;

use Drupal\community_post\Normalizer\node\AmenitiesNodeNormalizer;
use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getProfile {

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
        $access_token = $request->headers->get('X-CSRF-Token');

        $connection = \Drupal::database();
        $select = $connection->select('users_access_token')
          ->fields('users_access_token')
          ->condition('access_token', $access_token)
          ->execute()->fetch();
        if (!empty($select->uid) || $select->uid > 0) {
          $user = User::load($select->uid);
          $photo = NULL;
          if ($user->hasField('user_picture')) {
            $photo = AmenitiesNodeNormalizer::serializeFileField($user, 'user_picture', FALSE);
          }
          $hasPassword = 1;
          if(($user->field_type_registration->value == 'facebook' || $user->field_type_registration->value == 'google') && $user->getEmail() != $user->field_social_id->value){
            $hasPassword = 0;
          }
          $data = [
            'full_name' => $user->field_full_name->value,
            'first_name' => $user->field_first_name->value,
            'last_name' => $user->field_last_name->value,
            'phone_number' => $user->field_phone_number->value,
            'email' => $user->getEmail(),
            'is_active' => $user->isActive() ? 1 : 0,
            'day_of_birth' => $user->field_day_of_birth->value,
            'marital_status' => $user->field_marital_status->value,
            'type_registration' => $user->field_type_registration->value,
            'social_id' => $user->field_social_id->value,
            'has_fill_personalization' => $user->field_has_fill_personalization->value ? 1 : 0,
            'role' => 'user',
            'dial_code' => $user->get('field_dial_code')->getString(),
            'photo' => $photo ? $photo : NULL,
            'has_password' => $hasPassword,
          ];
        }
        elseif (!empty($select->access_token) && !empty($select->device_id)) {
          $data = [
            'full_name' => '',
            'first_name' => '',
            'last_name' => '',
            'phone_number' => '',
            'email' => '',
            'is_active' => 0,
            'day_of_birth' => '',
            'marital_status' => '',
            'type_registration' => '',
            'social_id' => '',
            'has_fill_personalization' => $select->personalization ? 1 : 0,
            'role' => 'guest',
          ];
        }
        else {
          $data = [
            'full_name' => '',
            'first_name' => '',
            'last_name' => '',
            'phone_number' => '',
            'email' => '',
            'is_active' => 0,
            'day_of_birth' => '',
            'marital_status' => '',
            'type_registration' => '',
            'social_id' => '',
            'has_fill_personalization' => 0,
            'role' => 'guest',
          ];
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
}
