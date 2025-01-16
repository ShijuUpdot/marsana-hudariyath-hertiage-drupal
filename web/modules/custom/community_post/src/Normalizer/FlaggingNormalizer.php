<?php

namespace Drupal\community_post\Normalizer;

use Drupal\flag\Entity\Flagging;
use Drupal\flag\FlaggingInterface;
use Drupal\serialization\Normalizer\EntityNormalizer;
use Drupal\taxonomy\Entity\Term;

/**
 * Class FlaggingNormalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class FlaggingNormalizer extends EntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\flag\FlaggingInterface';

  /**
   * {@inheritdoc}
   */
  public function supportsNormalization($data, $format = NULL, array $context = []): bool {
    if (!is_object($data) || !$this->checkFormat($format)) {
      return FALSE;
    }
    if ($data instanceof Flagging) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {

    $type = $object->get('entity_type')->getString();
    $id = $object->get('entity_id')->getString();
    $uid = $object->get('uid')->getString();
    $entity_type_manager = $this->entityTypeManager->getStorage($type);
    $entity = $entity_type_manager->load($id);
    $serializer = \Drupal::service('serializer');
    $entity_serialized = $serializer->normalize($entity, 'json');
    return ['entity_type' => $type] + $entity_serialized;
  }

}
