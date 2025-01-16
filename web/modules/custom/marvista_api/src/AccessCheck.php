<?php

namespace Drupal\marvista_api;

use Drupal\Console\Bootstrap\Drupal;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Access\AccessResultAllowed;
use Drupal\Core\Session\AccountInterface;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\rest\ModifiedResourceResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class AccessCheck.
 *
 * @package Drupal\marvista_api
 */
class AccessCheck {

  /**
   * Check access.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   Drupal\Core\Session\AccountInterface.
   *
   * @return \Drupal\Core\Access\AccessResultAllowed
   *   Drupal\Core\Access\AccessResultAllowed.
   */
  public function access(AccountInterface $account) {
    $language = 'en';

    if(\Drupal::hasService('marvista_api.utilities_services')) {
      $language = \Drupal::service('marvista_api.utilities_services')->getCurrentLang();
    }
    $helper = new MarvistaHelper();
    $request = \Drupal::request();
    $token = $request->headers->get('X-CSRF-Token');
    if (empty($token)) {
      self::sendResponse(['status' => 401, 'message' => 'Unauthorized'], 401);
    }
    $checkAccessToken = $helper->_checkAccessToken($token);
    if (!$checkAccessToken) {
      self::sendResponse(['status' => 401, 'message' => 'Unauthorized'], 401);
    }
    if (-1 == $checkAccessToken) {
      self::sendResponse(['status' => 402, 'message' => 'Expired token'], 402);
    }
    /** @var \Drupal\user\Entity\User $user */
    $user = $helper->getUserEntityByToken($token);
    if (empty($user)) {
      self::sendResponse([
        'status' => 402,
        'message' => t('Account not found', array(), array('langcode' => $language))
      ], 402);
    }
    if ($user->isBlocked()) {
      self::sendResponse([
        'status' => 401,
        'message' => t('Account is not activate', array(), array('langcode' => $language))
      ], 401);
    }
    /** CHEAT TO USE CURRENT USER SERVICE. */
    \Drupal::currentUser()->setAccount($user);
    return AccessResult::allowed();
  }

  public function anonymousAccess(AccountInterface $account) {
    $helper = new MarvistaHelper();
    $request = \Drupal::request();
    $token = $request->headers->get('X-CSRF-Token');
    if (empty($token)) {
      return AccessResult::allowed();
    }
    $checkAccessToken = $helper->_checkAccessToken($token);
    if (!$checkAccessToken) {
      return AccessResult::allowed();
    }
    if (-1 == $checkAccessToken) {
      return AccessResult::allowed();
    }
    $user = $helper->getUserEntityByToken($token);
    if (!empty($user)) {
      \Drupal::currentUser()->setAccount($user);
    }
    return AccessResult::allowed();
  }

  /**
   * Send error response.
   *
   * @param array $data
   *   Array data response.
   * @param string $code
   *   String.
   */
  public static function sendResponse(array $data, $code) {
    $response = new JsonResponse($data, $code);
    $response->send();
    exit();
  }

}
