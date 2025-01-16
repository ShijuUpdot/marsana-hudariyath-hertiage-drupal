<?php

namespace Drupal\marvista_api\Helper;

use Drupal\node\Entity\Node;

/**
 * Class Content Entity Manager.
 *
 * @package Drupal\marvista_api\Helper
 */
class ContentEntityManager {

  /**
   * Get opening time of event.
   *
   * @param \Drupal\node\Entity\Node $event
   *   Drupal\node\Entity\Node.
   *
   * @return array|void
   *   Array.
   */
  public static function getEventOpeningTime(Node $event) {
    $referenced = $event->get('field_opening_hours')->referencedEntities();
    if (!empty($referenced)) {
      $referenced = current($referenced);
    }
    else {
      return [];
    }
    $referenced = $referenced->get('field_schedule_timings')
      ->referencedEntities();
    if (!empty($referenced)) {
      $referenced = current($referenced);
    }
    else {
      return [];
    }
    $start_time = $referenced->get('field_start_time')->date;
    $end_time = $referenced->get('field_end_time')->date;
    return ['start_time' => $start_time, 'end_time' => $end_time];
  }

}
