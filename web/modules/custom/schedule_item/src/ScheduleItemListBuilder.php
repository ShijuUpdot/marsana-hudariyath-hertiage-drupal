<?php

namespace Drupal\schedule_item;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Schedule item entities.
 *
 * @ingroup schedule_item
 */
class ScheduleItemListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Schedule item ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var \Drupal\schedule_item\Entity\ScheduleItem $entity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.schedule_item.edit_form',
      ['schedule_item' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
