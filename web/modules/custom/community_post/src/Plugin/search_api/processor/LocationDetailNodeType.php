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
 *   id = "paragraph_location_detail_node_type",
 *   label = @Translation("Location detail node type"),
 *   description = @Translation("Location detail node type"),
 *   stages = {
 *     "add_properties" = 0,
 *   },
 * )
 */
class LocationDetailNodeType extends ProcessorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getPropertyDefinitions(DatasourceInterface $datasource = NULL) {
    $properties = [];

    if (!$datasource) {
      $definition = [
        'label' => $this->t('Location detail node type'),
        'description' => $this->t('Location detail node type'),
        'type' => 'string',
        'processor_id' => $this->getPluginId(),
      ];
      $properties['node_type'] = new ParentParagraphProperty($definition);
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
            ->filterForPropertyPath($fields, NULL, 'node_type');
          foreach ($fields as $field) {
            $field->addValue($node->bundle());
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

}
