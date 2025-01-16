<?php

namespace Drupal\recent_search_log\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Recent search entity entities.
 */
class RecentSearchEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
