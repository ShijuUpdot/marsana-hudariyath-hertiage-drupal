<?php

namespace Drupal\community_post;

use Drupal\Core\Entity\ContentEntityStorageInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\community_post\Entity\CommunityPostInterface;

/**
 * Defines the storage handler class for Community post entities.
 *
 * This extends the base storage class, adding required special handling for
 * Community post entities.
 *
 * @ingroup community_post
 */
interface CommunityPostStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Community post revision IDs for a specific Community post.
   *
   * @param \Drupal\community_post\Entity\CommunityPostInterface $entity
   *   The Community post entity.
   *
   * @return int[]
   *   Community post revision IDs (in ascending order).
   */
  public function revisionIds(CommunityPostInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Community post author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Community post revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\community_post\Entity\CommunityPostInterface $entity
   *   The Community post entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(CommunityPostInterface $entity);

  /**
   * Unsets the language for all Community post with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
