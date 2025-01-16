<?php

namespace Drupal\community_post\Entity;

use Drupal\community_post\Normalizer\node\AmenitiesNodeNormalizer;
use Drupal\community_post\Normalizer\node\AssetDetailsNodeNormalizer;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EditorialContentEntityBase;
use Drupal\Core\Entity\RevisionableInterface;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityPublishedTrait;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Drupal\user\UserInterface;

/**
 * Defines the Community post entity.
 *
 * @ingroup community_post
 *
 * @ContentEntityType(
 *   id = "community_post",
 *   label = @Translation("Community post"),
 *   bundle_label = @Translation("Community post type"),
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log_message",
 *   },
 *   handlers = {
 *     "storage" = "Drupal\community_post\CommunityPostStorage",
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\community_post\CommunityPostListBuilder",
 *     "views_data" = "Drupal\community_post\Entity\CommunityPostViewsData",
 *     "translation" = "Drupal\community_post\CommunityPostTranslationHandler",
 *
 *     "form" = {
 *       "default" = "Drupal\community_post\Form\CommunityPostForm",
 *       "add" = "Drupal\community_post\Form\CommunityPostForm",
 *       "edit" = "Drupal\community_post\Form\CommunityPostForm",
 *       "delete" = "Drupal\community_post\Form\CommunityPostDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\community_post\CommunityPostHtmlRouteProvider",
 *     },
 *     "access" = "Drupal\community_post\CommunityPostAccessControlHandler",
 *   },
 *   base_table = "community_post",
 *   data_table = "community_post_field_data",
 *   revision_table = "community_post_revision",
 *   revision_data_table = "community_post_field_revision",
 *   translatable = TRUE,
 *   permission_granularity = "bundle",
 *   admin_permission = "administer community post entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "vid",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "uid" = "user_id",
 *     "langcode" = "langcode",
 *     "published" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/community_post/{community_post}",
 *     "add-page" = "/admin/structure/community_post/add",
 *     "add-form" =
 *   "/admin/structure/community_post/add/{community_post_type}",
 *     "edit-form" = "/admin/structure/community_post/{community_post}/edit",
 *     "delete-form" =
 *   "/admin/structure/community_post/{community_post}/delete",
 *     "version-history" =
 *   "/admin/structure/community_post/{community_post}/revisions",
 *     "revision" =
 *   "/admin/structure/community_post/{community_post}/revisions/{community_post_revision}/view",
 *     "revision_revert" =
 *   "/admin/structure/community_post/{community_post}/revisions/{community_post_revision}/revert",
 *     "revision_delete" =
 *   "/admin/structure/community_post/{community_post}/revisions/{community_post_revision}/delete",
 *     "translation_revert" =
 *   "/admin/structure/community_post/{community_post}/revisions/{community_post_revision}/revert/{langcode}",
 *     "collection" = "/admin/structure/community_post",
 *   },
 *   bundle_entity_type = "community_post_type",
 *   field_ui_base_route = "entity.community_post_type.edit_form"
 * )
 */
class CommunityPost extends EditorialContentEntityBase implements CommunityPostInterface {

  const FIELD_CAPTION = 'field_caption';

  const FIELD_IMAGE = 'field_image';

  const FIELD_APPROVAL_STATE = 'field_approval_state';

  const FIELD_RATING = 'field_rating';

  const FIELD_EXPERIENCE = 'field_experience';

  const FIELD_FACILITIES = 'field_facilities';

  const STATE_DRAFT = 'draft';

  const STATE_REJECTED = 'rejected';

  const STATE_APPROVED = 'approved';

  const TYPE_RATING = 'review';

  const TYPE_PHOTO = 'photo';

  const FIELD_PLACE = 'field_place';

  use EntityChangedTrait;
  use EntityPublishedTrait;

  /**
   * {@inheritdoc}
   */
  public static function preCreate(EntityStorageInterface $storage_controller, array &$values) {
    parent::preCreate($storage_controller, $values);
    $values += [
      'user_id' => \Drupal::currentUser()->id(),
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function urlRouteParameters($rel) {
    $uri_route_parameters = parent::urlRouteParameters($rel);

    if ($rel === 'revision_revert' && $this instanceof RevisionableInterface) {
      $uri_route_parameters[$this->getEntityTypeId() . '_revision'] = $this->getRevisionId();
    }
    elseif ($rel === 'revision_delete' && $this instanceof RevisionableInterface) {
      $uri_route_parameters[$this->getEntityTypeId() . '_revision'] = $this->getRevisionId();
    }

    return $uri_route_parameters;
  }

  /**
   * {@inheritdoc}
   */
  public function preSave(EntityStorageInterface $storage) {
    parent::preSave($storage);

    foreach (array_keys($this->getTranslationLanguages()) as $langcode) {
      $translation = $this->getTranslation($langcode);

      // If no owner has been set explicitly, make the anonymous user the owner.
      if (!$translation->getOwner()) {
        $translation->setOwnerId(0);
      }
    }

    // If no revision author has been set explicitly,
    // make the community_post owner the revision author.
    if (!$this->getRevisionUser()) {
      $this->setRevisionUserId($this->getOwnerId());
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwner() {
    return $this->get('user_id')->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwnerId() {
    return $this->get('user_id')->target_id;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwnerId($uid) {
    $this->set('user_id', $uid);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwner(UserInterface $account) {
    $this->set('user_id', $account->id());
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    // Add the published field.
    $fields += static::publishedBaseFieldDefinitions($entity_type);

    $fields['user_id'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Authored by'))
      ->setDescription(t('The user ID of author of the Community post entity.'))
      ->setRevisionable(TRUE)
      ->setSetting('target_type', 'user')
      ->setSetting('handler', 'default')
      ->setTranslatable(TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'author',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'entity_reference_autocomplete',
        'weight' => 5,
        'settings' => [
          'match_operator' => 'CONTAINS',
          'size' => '60',
          'autocomplete_type' => 'tags',
          'placeholder' => '',
        ],
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The name of the Community post entity.'))
      ->setRevisionable(TRUE)
      ->setSettings([
        'max_length' => 500,
        'text_processing' => 0,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'string',
        'weight' => -4,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['status']->setDescription(t('A boolean indicating whether the Community post is published.'))
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => -3,
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    $fields['revision_translation_affected'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Revision translation affected'))
      ->setDescription(t('Indicates if the last edit of a translation belongs to current revision.'))
      ->setReadOnly(TRUE)
      ->setRevisionable(TRUE)
      ->setTranslatable(TRUE);

    return $fields;
  }

  /**
   * Map json field and entity field.
   *
   * @param array $data
   *   Data.
   *
   * @return \Drupal\community_post\Entity\CommunityPost
   *   Drupal\community_post\Entity\CommunityPost.
   */
  public function setFieldByJson(array $data) {
    if (!empty($data['caption'])) {
      $this->set(self::FIELD_CAPTION, $data['caption']);
    }
    if (!empty($data['image'])) {
      $this->set(self::FIELD_IMAGE, $data['image']);
    }
    if (!empty($data['rating'])) {
      $this->set(self::FIELD_RATING, floatval($data['rating']));
    }

    if (!empty($data['experience'])) {
      $this->set(self::FIELD_EXPERIENCE, intval($data['experience']));
    }

    if (!empty($data['place'])) {
      $node = Node::load($data['place']);
      if (!empty($node)) {
        $this->set(self::FIELD_PLACE, intval($data['place']));
        if ($node->hasField('field_facilities')) {
          $facilities = $node->get('field_facilities')->referencedEntities();
          if (!empty($facilities)) {
            $this->set(self::FIELD_FACILITIES, $facilities);
          }
        }

      }
    }

    return $this;
  }

  /**
   * Serialize entity to array.
   */
  public function serialize() {
    $serialization = \Drupal::service('serializer');
    $data = [];
    $data['caption'] = '';
    $data['image'] = [];
    if ($this->get(self::FIELD_CAPTION)->getString()) {
      $data['caption'] = $this->get(self::FIELD_CAPTION)->getString();
    }
    if ($this->get(self::FIELD_IMAGE)->getValue()) {
      $data['image'] = AssetDetailsNodeNormalizer::serializeFileField($this, self::FIELD_IMAGE, TRUE);
    }
    if ($this->hasField(self::FIELD_RATING) && $this->get(self::FIELD_RATING)
        ->getValue()) {
      $data['rating'] = $this->get(self::FIELD_RATING)->getString();

    }
    $data['type'] = $this->bundle();
    $account = \Drupal::currentUser();
    $data['is_favorite'] = FALSE;
    if ($account->isAuthenticated()) {
      /** @var \Drupal\flag\FlagService $flag_service */
      $flag_service = \Drupal::service('flag');
      $flag = $flag_service->getFlagById('community_post_favorite');
      /** @var \Drupal\flag\Entity\Flagging $flagging */
      $flagging = $flag_service->getFlagging($flag, $this, $account);
      $data['is_favorite'] = !empty($flagging);
    }
    $data['category'] = 'Todo';
    if (!empty($this->favourite_list)) {
      $data['favourite_list'] = $this->favourite_list;
    }
    $data['tag_location_id'] = 'Todo';
    $data['id'] = intval($this->id());

    $experience = $this->get(CommunityPost::FIELD_EXPERIENCE)->referencedEntities();
    if (!empty($experience)) {
      $data['experience'] = $serialization->normalize($experience[0]);
    }

    $place = $this->get(CommunityPost::FIELD_PLACE)->referencedEntities();
    if (!empty($place)) {
      $data['place'] = $serialization->normalize($place[0]);
    }

    $data['status'] = $this->get(CommunityPost::FIELD_APPROVAL_STATE)->getString();

    $user = User::load($this->getOwnerId());

    if ( !empty($user) && $user->hasField('user_picture') ) {
      $photo = AmenitiesNodeNormalizer::serializeFileField($user, 'user_picture', FALSE);
      $username = $user->field_first_name->value . ' ' . $user->field_last_name->value;
    }

    global $base_url;
    $language = \Drupal::languageManager()->getDefaultLanguage()->getId();
    $data['share_url'] = $base_url . '/' . $language . '/share?type=community_post&id='.$data['id'];

    $data['author'] = [
      'id' => intval($this->getOwnerId()),
      'username' => $username,
      'photo' => $photo['url'] ? $photo['url'] : null,
    ];

    return $data;
  }

  public function setApprovalState($state) {
    $this->set(self::FIELD_APPROVAL_STATE, $state);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function set($name, $value, $notify = TRUE) {
    if ($name == self::FIELD_APPROVAL_STATE) {
      if ($value == self::STATE_APPROVED) {
        $this->setPublished();
      }
      else {
        $this->setPublished(FALSE);
      }
    }
    return parent::set($name, $value, $notify);
  }

  /**
   * Is approved.
   *
   * @return bool
   *   Result.
   */
  public function isApproved() {
    return ($this->get(self::FIELD_APPROVAL_STATE)->getString() == self::STATE_APPROVED);
  }

}
