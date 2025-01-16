<?php

namespace Drupal\marvista_api\Controller;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Password\PasswordInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\marvista_api\Helper\UserAccessTokenManager;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Implementing our example JSON api.
 */
class UserAccountController extends ControllerBase {

  /**
   * Drupal\Core\Password\PasswordInterface.
   *
   * @var \Drupal\Core\Password\PasswordInterface
   */
  protected $passwordChecker;

  /**
   * Drupal\marvista_api\Helper\MarvistaHelper.
   *
   * @var \Drupal\marvista_api\Helper\MarvistaHelper
   */
  protected $helper;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    PasswordInterface $password
  ) {
    $this->passwordChecker = $password;
    $this->helper = new MarvistaHelper();
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('password')
    );
  }

  /**
   * Check old password.
   *
   * @param string $version
   *   Version.
   * @param string $language
   *   Language.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Symfony\Component\HttpFoundation\Request.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   Symfony\Component\HttpFoundation\JsonResponse.
   */
  public function checkOldPassword($version = 'v1', $language = 'en', Request $request = NULL) {
    $data = Json::decode($request->getContent());
    $user = User::load($this->currentUser()->id());
    if ($user->isAnonymous()) {
      return new JsonResponse([
        'status' => 401,
        'message' => t('Bad Request', array(), array('langcode' => $language)),
      ], 401);
    }
    if (empty($data['old_password'])) {
      return new JsonResponse([
        'status' => 403,
        'message' => t('Invalid old password', array(), array('langcode' => $language)),
      ], 403);
    }
    if (FALSE == $this->passwordChecker->check($data['old_password'], $user->getPassword())) {
      return new JsonResponse([
        'status' => 403,
        'message' => t('Invalid old password', array(), array('langcode' => $language)),
      ], 403);
    }
    $code = $this->helper->generateRandomCode(6);
    $token_code = $this->helper->generateRandomString(32);
    $user_data = [
      'uid' => $user->id(),
      'email' => $user->getEmail(),
      'code' => $code,
      'token_code' => $token_code,
    ];
    $result = UserAccessTokenManager::insertPasswordToken($user_data);
    if (!$result) {
      return new JsonResponse([
        'status' => 500,
        'message' => t('Cannot insert token', array(), array('langcode' => $language)),
      ], 500);
    }
    return new JsonResponse([
      'data' => [
        'code' => $code,
        'token' => $token_code,
      ],
      'status' => 200,
      'message' => 'ok',
    ]);
  }

  /**
   * De-active account.
   *
   * @param string $version
   *   Version.
   * @param string $language
   *   Lang.
   * @param \Symfony\Component\HttpFoundation\Request|null $request
   *   Symfony\Component\HttpFoundation\Request.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   Symfony\Component\HttpFoundation\JsonResponse.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function deactive($version = 'v1', $language = 'en', Request $request = NULL) {
    $data = Json::decode($request->getContent());
    $user = User::load($this->currentUser()->id());
    if ($user->isAnonymous()) {
      return new JsonResponse([
        'status' => 401,
        'message' => t('Bad Request', array(), array('langcode' => $language)),
      ], 401);
    }
    if (empty($data['reason'])) {
      return new JsonResponse([
        'status' => 403,
        'message' => t('Invalid old password', array(), array('langcode' => $language)),
      ], 403);
    }
    try {
      $user->set('field_deactive_reason', $data['reason']);
      $user->set('status', 0);
      $user->save();
      UserAccessTokenManager::clearUserAccessToken($user);
      return new JsonResponse([
        'status' => 200,
        'message' => t('Account has been deactivated', array(), array('langcode' => $language)),
      ]);
    }
    catch (\Exception $exception) {
      \Drupal::logger('user_access_token')->error($exception->getMessage());
    }
    return new JsonResponse([
      'status' => 500,
      'message' => t('Something when wrong', array(), array('langcode' => $language)),
    ]);
  }

  public function updateProfile($version = 'v1', $language = 'en', Request $request = NULL) {
    $data = Json::decode($request->getContent());
    $user = User::load($this->currentUser()->id());
    if ($user->isAnonymous()) {
      return new JsonResponse([
        'status' => 401,
        'message' => t('Bad Request', array(), array('langcode' => $language)),
      ], 401);
    }
    if (empty($data['day_of_birth'])) {
      return new JsonResponse([
        'status' => 401,
        'message' => t('Missing day_of_birth', array(), array('langcode' => $language)),
      ], 401);
    }
    if (empty($data['marital_status'])) {
      return new JsonResponse([
        'status' => 401,
        'message' => t('Missing marital_status', array(), array('langcode' => $language)),
      ], 401);
    }
    if (empty($data['dial_code'])) {
      return new JsonResponse([
        'status' => 401,
        'message' => t('Missing dial_code', array(), array('langcode' => $language)),
      ], 401);
    }

    try {
      $user->set('field_phone_number', $data['phone_number']);
      $user->set('field_day_of_birth', $data['day_of_birth']);
      $user->set('field_marital_status', $data['marital_status']);
      $user->set('field_dial_code', $data['dial_code']);
      $user->save();
      return new JsonResponse([
        'status' => 200,
        'message' => t('Profile has been updated', array(), array('langcode' => $language)),
      ]);
    }
    catch (\Exception $exception) {
      \Drupal::logger('update_user_profile')->error($exception->getMessage());
    }
    return new JsonResponse([
      'status' => 500,
      'message' => t('Something when wrong', array(), array('langcode' => $language)),
    ]);
  }

  public function updateDeviceToken($version = 'v1', $language = 'en', Request $request = NULL) {
    $data = Json::decode($request->getContent());
    $user = User::load($this->currentUser()->id());
    if ($user->isAnonymous()) {
      return new JsonResponse([
        'status' => 401,
        'message' => 'Bad Request',
      ], 401);
    }
    if (empty($data['device_id'])) {
      return new JsonResponse([
        'status' => 401,
        'message' => t('Missing device_id', array(), array('langcode' => $language)),
      ], 401);
    }
    if (empty($data['device_token'])) {
      return new JsonResponse([
        'status' => 401,
        'message' => t('Missing device_token', array(), array('langcode' => $language)),
      ], 401);
    }

    try {
      UserAccessTokenManager::updateUserDeviceToken($user, $data);

      return new JsonResponse([
        'status' => 200,
        'message' => t('Device token has been updated', array(), array('langcode' => $language)),
      ]);
    }
    catch (\Exception $exception) {
      \Drupal::logger('update_user_profile')->error($exception->getMessage());
    }
    return new JsonResponse([
      'status' => 500,
      'message' => t('Something when wrong', array(), array('langcode' => $language)),
    ]);
  }

}
