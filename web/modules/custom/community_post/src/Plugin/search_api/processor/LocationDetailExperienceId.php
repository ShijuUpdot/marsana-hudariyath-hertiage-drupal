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
use Drupal\taxonomy\Entity\Term;
use Drupal\user\UserInterface;

/**
 * Excludes unpublished nodes from node indexes.
 *
 * @SearchApiProcessor(
 *   id = "paragraph_location_detail_experience_id",
 *   label = @Translation("Location detail experience id"),
 *   description = @Translation("Location detail experience id"),
 *   stages = {
 *     "add_properties" = 0,
 *   },
 * )
 */
class LocationDetailExperienceId extends ProcessorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getPropertyDefinitions(DatasourceInterface $datasource = NULL) {
    $properties = [];

    if (!$datasource) {
      $definition = [
        'label' => $this->t('Location detail experience id'),
        'description' => $this->t('Location detail experience id'),
        'type' => 'string',
        'processor_id' => $this->getPluginId(),
      ];
      $properties['experience_id'] = new ParentParagraphProperty($definition);
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
          if (empty($node)) {
            return;
          }
          $experience_id = $node->get('field_amenity_experience')->getString();
          $term = Term::load($experience_id);
          if (!empty($term)) {
            $fields = $item->getFields(FALSE);
            $fields = $this->getFieldsHelper()
              ->filterForPropertyPath($fields, NULL, 'experience_id');
            foreach ($fields as $field) {
              $field->addValue($term->id());
            }
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
      if (!isset($bundle['location_details'])) {
        return FALSE;
      }
    }
    return TRUE;
  }

}
