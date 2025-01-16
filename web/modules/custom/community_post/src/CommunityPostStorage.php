<?php

namespace Drupal\community_post;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
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
class CommunityPostStorage extends SqlContentEntityStorage implements CommunityPostStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function revisionIds(CommunityPostInterface $entity) {
    return $this->database->query(
      'SELECT vid FROM {community_post_revision} WHERE id=:id ORDER BY vid',
      [':id' => $entity->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function userRevisionIds(AccountInterface $account) {
    return $this->database->query(
      'SELECT vid FROM {community_post_field_revision} WHERE uid = :uid ORDER BY vid',
      [':uid' => $account->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function countDefaultLanguageRevisions(CommunityPostInterface $entity) {
    return $this->database->query('SELECT COUNT(*) FROM {community_post_field_revision} WHERE id = :id AND default_langcode = 1', [':id' => $entity->id()])
      ->fetchField();
  }

  /**
   * {@inheritdoc}
   */
  public function clearRevisionsLanguage(LanguageInterface $language) {
    return $this->database->update('community_post_revision')
      ->fields(['langcode' => LanguageInterface::LANGCODE_NOT_SPECIFIED])
      ->condition('langcode', $language->getId())
      ->execute();
  }

  /**
   * Create storage class.
   *
   * @return \Drupal\community_post\CommunityPostStorage|\Drupal\Core\Entity\EntityStorageInterface
   *   Drupal\community_post\CommunityPostStorage.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public static function createStorage() {
    return \Drupal::entityTypeManager()->getStorage('community_post');
  }

}
