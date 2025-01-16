<?php

namespace Drupal\marvista_api\Plugin\views\access;

use Drupal\Core\Session\AccountInterface;
use Drupal\marvista_api\AccessCheck;
use Drupal\views\Plugin\views\access\AccessPluginBase;
use Symfony\Component\Routing\Route;

/**
 * Access plugin that provides no access control at all.
 *
 * @ingroup views_access_plugins
 *
 * @ViewsAccess(
 *   id = "custom_login_view_access",
 *   title = @Translation("Custom login view access"),
 *   help = @Translation("Custom login view access.")
 * )
 */
class CustomLoginViewAccess extends AccessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function summaryTitle() {
    return $this->t('Custom login view access');
  }

  /**
   * {@inheritdoc}
   */
  public function access(AccountInterface $account) {
    $access = new AccessCheck();
    return $access->access($account);
  }

  /**
   * {@inheritdoc}
   */
  public function alterRouteDefinition(Route $route) {
    $route->setRequirement('_access', 'TRUE');
  }

}
