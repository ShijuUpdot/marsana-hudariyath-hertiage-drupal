<?php

namespace Drupal\schedule_item\Entity;

use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityPublishedTrait;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the Schedule item entity.
 *
 * @ingroup schedule_item
 *
 * @ContentEntityType(
 *   id = "schedule_item",
 *   label = @Translation("Schedule item"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\schedule_item\ScheduleItemListBuilder",
 *     "views_data" = "Drupal\schedule_item\Entity\ScheduleItemViewsData",
 *
 *     "form" = {
 *       "default" = "Drupal\schedule_item\Form\ScheduleItemForm",
 *       "add" = "Drupal\schedule_item\Form\ScheduleItemForm",
 *       "edit" = "Drupal\schedule_item\Form\ScheduleItemForm",
 *       "delete" = "Drupal\schedule_item\Form\ScheduleItemDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\schedule_item\ScheduleItemHtmlRouteProvider",
 *     },
 *     "access" = "Drupal\schedule_item\ScheduleItemAccessControlHandler",
 *   },
 *   base_table = "schedule_item",
 *   translatable = FALSE,
 *   admin_permission = "administer schedule item entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode",
 *     "published" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/schedule_item/{schedule_item}",
 *     "add-form" = "/admin/structure/schedule_item/add",
 *     "edit-form" = "/admin/structure/schedule_item/{schedule_item}/edit",
 *     "delete-form" = "/admin/structure/schedule_item/{schedule_item}/delete",
 *     "collection" = "/admin/structure/schedule_item",
 *   },
 *   field_ui_base_route = "schedule_item.settings"
 * )
 */
class ScheduleItem extends ContentEntityBase implements ScheduleItemInterface {

  use EntityChangedTrait;
  use EntityPublishedTrait;

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
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    // Add the published field.
    $fields += static::publishedBaseFieldDefinitions($entity_type);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The name of the Schedule item entity.'))
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

    $fields['status']->setDescription(t('A boolean indicating whether the Schedule item is published.'))
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

    $fields['queued'] = BaseFieldDefinition::create('timestamp')
      ->setLabel(t('Queued'))
      ->setDescription(t('Time when this item will process.'))
      ->setDefaultValue(0);

    $fields['execute_function'] = BaseFieldDefinition::create('text')
      ->setLabel(t('Execute function'))
      ->setDescription(t('Execute function of schedule item.'));

    $fields['entity_id'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Entity id'));
    $fields['entity_type'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Entity type'));
    $fields['entity_bundle'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Entity bundle'));

    return $fields;
  }

}
