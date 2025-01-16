<?php

namespace Drupal\schedule_item;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Schedule item entity.
 *
 * @see \Drupal\schedule_item\Entity\ScheduleItem.
 */
class ScheduleItemAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\schedule_item\Entity\ScheduleItemInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished schedule item entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published schedule item entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit schedule item entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete schedule item entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add schedule item entities');
  }


}
