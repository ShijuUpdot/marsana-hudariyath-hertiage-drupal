<?php

namespace Drupal\schedule_item\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;

/**
 * Provides an interface for defining Schedule item entities.
 *
 * @ingroup schedule_item
 */
interface ScheduleItemInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Schedule item name.
   *
   * @return string
   *   Name of the Schedule item.
   */
  public function getName();

  /**
   * Sets the Schedule item name.
   *
   * @param string $name
   *   The Schedule item name.
   *
   * @return \Drupal\schedule_item\Entity\ScheduleItemInterface
   *   The called Schedule item entity.
   */
  public function setName($name);

  /**
   * Gets the Schedule item creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Schedule item.
   */
  public function getCreatedTime();

  /**
   * Sets the Schedule item creation timestamp.
   *
   * @param int $timestamp
   *   The Schedule item creation timestamp.
   *
   * @return \Drupal\schedule_item\Entity\ScheduleItemInterface
   *   The called Schedule item entity.
   */
  public function setCreatedTime($timestamp);

}
