<?php

namespace Drupal\recent_search_log;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Recent search entity entity.
 *
 * @see \Drupal\recent_search_log\Entity\RecentSearchEntity.
 */
class RecentSearchEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\recent_search_log\Entity\RecentSearchEntityInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished recent search entity entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published recent search entity entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit recent search entity entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete recent search entity entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add recent search entity entities');
  }


}
