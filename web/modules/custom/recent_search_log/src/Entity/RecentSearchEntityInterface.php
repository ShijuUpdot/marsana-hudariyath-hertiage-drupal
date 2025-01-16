<?php

namespace Drupal\recent_search_log\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Recent search entity entities.
 *
 * @ingroup recent_search_log
 */
interface RecentSearchEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface, EntityOwnerInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Recent search entity name.
   *
   * @return string
   *   Name of the Recent search entity.
   */
  public function getName();

  /**
   * Sets the Recent search entity name.
   *
   * @param string $name
   *   The Recent search entity name.
   *
   * @return \Drupal\recent_search_log\Entity\RecentSearchEntityInterface
   *   The called Recent search entity entity.
   */
  public function setName($name);

  /**
   * Gets the Recent search entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Recent search entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Recent search entity creation timestamp.
   *
   * @param int $timestamp
   *   The Recent search entity creation timestamp.
   *
   * @return \Drupal\recent_search_log\Entity\RecentSearchEntityInterface
   *   The called Recent search entity entity.
   */
  public function setCreatedTime($timestamp);

}
