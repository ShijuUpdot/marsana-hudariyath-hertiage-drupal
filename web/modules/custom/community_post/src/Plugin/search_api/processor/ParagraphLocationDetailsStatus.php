<?php

namespace Drupal\community_post\Plugin\search_api\processor;

use Drupal\community_post\Plugin\search_api\processor\Property\ParentParagraphProperty;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\search_api\Datasource\DatasourceInterface;
use Drupal\search_api\IndexInterface;
use Drupal\search_api\Item\ItemInterface;
use Drupal\search_api\Processor\ProcessorPluginBase;
use Drupal\user\UserInterface;

/**
 * Excludes unpublished nodes from node indexes.
 *
 * @SearchApiProcessor(
 *   id = "paragraph_location_detail_entity_status",
 *   label = @Translation("Paragraph Location Details Entity status"),
 *   description = @Translation("Paragraph Location Details Entity status"),
 *   stages = {
 *     "alter_items" = 0,
 *     "add_properties" = 0,
 *   },
 * )
 */
class ParagraphLocationDetailsStatus extends ProcessorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getPropertyDefinitions(DatasourceInterface $datasource = NULL) {
    $properties = [];

    if (!$datasource) {
      $definition = [
        'label' => $this->t('Title of parent paragraph'),
        'description' => $this->t('Title of parent paragraph'),
        'type' => 'search_api_text',
        'processor_id' => $this->getPluginId(),
      ];
      $properties['title_parent_paragraph'] = new ParentParagraphProperty($definition);
    }

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function addFieldValues(ItemInterface $item) {
    /** @var \Drupal\Core\Entity\Plugin\DataType\EntityAdapter $object */
    $object = $item->getOriginalObject();
    if ($object) {
      /** @var \Drupal\paragraphs\Entity\Paragraph $entity */
      $entity = $object->getEntity();
      if (!empty($entity)) {
        /** @var \Drupal\paragraphs\Entity\Paragraph $parent */
        $parent = $entity->getParentEntity();
        if (!empty($parent) && $parent->getType() == 'location') {
          /** @var \Drupal\node\Entity\Node $node */
          $node = $parent->getParentEntity();
          $fields = $item->getFields(FALSE);
          $fields = $this->getFieldsHelper()
            ->filterForPropertyPath($fields, NULL, 'title_parent_paragraph');
          foreach ($fields as $field) {
            $field->addValue($node->getTitle());
          }
        }
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function supportsIndex(IndexInterface $index) {
    foreach ($index->getDatasources() as $datasource) {
      $entity_type_id = $datasource->getEntityTypeId();
      $bundle = $datasource->getBundles();
      if (!$entity_type_id) {
        continue;
      }
      // \Drupal\Core\Entity\EntityPublishedInterface.
      if (!isset($bundle['location_details'])) {
        return FALSE;
      }
    }
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function alterIndexedItems(array &$items) {
    // Annoyingly, this doc comment is needed for PHPStorm. See
    // http://youtrack.jetbrains.com/issue/WI-23586
    /** @var \Drupal\search_api\Item\ItemInterface $item */
    foreach ($items as $item_id => $item) {
      /** @var \Drupal\paragraphs\Entity\Paragraph $object */
      $object = $item->getOriginalObject()->getValue();
      $enabled = TRUE;
      if (!$object->hasField('field_coordinate')) {
        $enabled = FALSE;
      }
      $coordinate = $object->get('field_coordinate')->getValue();
      if (empty($coordinate)) {
        $enabled = FALSE;

      }
      elseif (empty($coordinate[0]) || empty($coordinate[0]['lat']) || empty($coordinate[0]['lon'])) {
        $enabled = FALSE;
      }
      $parent = $object->getParentEntity();
      if (empty($parent) || !($parent instanceof Paragraph)) {
        $enabled = FALSE;
      }
      if (empty($parent) || ($parent instanceof Paragraph)) {
        $node = $parent->getParentEntity();
        if (empty($node)) {
          $enabled = FALSE;
        }
        if ($node->hasField('field_event_location')) {
          $referenced = $node->get('field_event_location')->referencedEntities();
        }
        elseif ($node->hasField('field_location_details')) {
          $referenced = $node->get('field_location_details')->referencedEntities();
        }
        if (empty($referenced)) {
          $enabled = FALSE;
        }
        else {
          $referenced = current($referenced);
          if ($referenced->id() != $parent->id()) {
            $enabled = FALSE;
          }
        }
      }
      if (FALSE == $enabled) {
        unset($items[$item_id]);
      }
    }
  }

}
