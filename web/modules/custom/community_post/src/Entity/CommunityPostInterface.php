<?php

namespace Drupal\community_post\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Community post entities.
 *
 * @ingroup community_post
 */
interface CommunityPostInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityPublishedInterface, EntityOwnerInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Community post name.
   *
   * @return string
   *   Name of the Community post.
   */
  public function getName();

  /**
   * Sets the Community post name.
   *
   * @param string $name
   *   The Community post name.
   *
   * @return \Drupal\community_post\Entity\CommunityPostInterface
   *   The called Community post entity.
   */
  public function setName($name);

  /**
   * Gets the Community post creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Community post.
   */
  public function getCreatedTime();

  /**
   * Sets the Community post creation timestamp.
   *
   * @param int $timestamp
   *   The Community post creation timestamp.
   *
   * @return \Drupal\community_post\Entity\CommunityPostInterface
   *   The called Community post entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Gets the Community post revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Community post revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\community_post\Entity\CommunityPostInterface
   *   The called Community post entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Community post revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Community post revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\community_post\Entity\CommunityPostInterface
   *   The called Community post entity.
   */
  public function setRevisionUserId($uid);

}
