<?php

namespace Drupal\recent_search_log;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Recent search entity entities.
 *
 * @ingroup recent_search_log
 */
class RecentSearchEntityListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Recent search entity ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var \Drupal\recent_search_log\Entity\RecentSearchEntity $entity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.recent_search_entity.edit_form',
      ['recent_search_entity' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
