<?php

namespace Drupal\community_post\Normalizer\node;

use Drupal\Core\Entity\EntityInterface;
use Drupal\node\NodeInterface;
use Drupal\serialization\Normalizer\ContentEntityNormalizer;

/**
 * Class Asset Details Node Normalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class AssetDetailsNodeNormalizer extends ContentEntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\node\NodeInterface';

  /**
   * {@inheritdoc}
   */
  public function supportsNormalization($data, $format = NULL, array $context = []): bool {
    if (!is_object($data) || !$this->checkFormat($format)) {
      return FALSE;
    }
    if ($data instanceof NodeInterface && $data->getType() == 'asset_details') {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    /** @var \Drupal\node\Entity\Node $entity */
    $entity = $object;
    $data = [];
    $serialization = \Drupal::service('serializer');
    $data['id'] = $object->id();
    $data['title'] = $object->getTitle();

    $location = $object->get('field_location_details')->referencedEntities();
    if (!empty($location)) {
      $data['location'] = $serialization->normalize($location[0]);
    }

    $data['image'] = self::serializeFileField($object, 'field_hero_image');
    $data['thumb'] = self::serializeFileField($object, 'field_hero_image');

    $account = \Drupal::currentUser();
    $data['is_favorite'] = FALSE;
    if ($account->isAuthenticated()) {
      $flag_service = \Drupal::service('flag');
      $flag = $flag_service->getFlagById('node_favorite');
      $flagging = $flag_service->getFlagging($flag, $object, $account);
      $data['is_favorite'] = !empty($flagging);
    }
    $data['total_review'] = rand(0, 200);
    $data['rate '] = 'TODO';

    $category = $object->get('field_asset_type')->referencedEntities();
    if (!empty($category)) {
      $data['category'] = $serialization->normalize($category[0]);
    }

    $data['share_url'] = 'TODO';

    $gallery = $object->get('field_asset_gallery')->referencedEntities();
    if (!empty($gallery)) {
      $data['gallery'] = $serialization->normalize($gallery);
    }

    $data['note'] = $object->get('field_intro_short_description')->getString();

    $open_time = $object->get('field_opening_hours')->referencedEntities();
    if (!empty($open_time)) {
      $data['open_time'] = $serialization->normalize($open_time);
    }
    $data['type'] = $entity->bundle();

    return $data;
  }

  /**
   * Render file field.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   Drupal\Core\Entity\EntityInterface.
   * @param string $field
   *   Field.
   * @param bool $all
   *   Get all.
   *
   * @return array
   *   Array.
   */
  public static function serializeFileField(EntityInterface $entity, $field, $all = FALSE) {
    $files = $entity->get($field)->referencedEntities();
    if (empty($files)) {
      return [];
    }
    if ($all == TRUE) {
      $output = [];
      foreach ($files as $file) {
        $output[] = [
          'id' => (int) $file->id(),
          'name' => $file->getFilename(),
          'url' => file_create_url($file->getFileUri()),
        ];
      }
      return $output;
    }
    /** @var \Drupal\file\Entity\File $file */
    $file = current($files);
    return [
      'id' => (int) $file->id(),
      'url' => file_create_url($file->getFileUri()),
      'name' => $file->getFilename(),
    ];

  }

  /**
   * Render paragraph field.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   Drupal\Core\Entity\EntityInterface.
   * @param string $field
   *   Field.
   * @param string $map_function
   *   Function.
   * @param bool $all
   *   All.
   *
   * @return array
   *   Array.
   */
  public static function serializeParagraphField(EntityInterface $entity, $field, $map_function, $all = FALSE) {
    $paragraphs = $entity->get($field)->referencedEntities();
    if (empty($paragraphs)) {
      return [];
    }
    if ($all == TRUE) {
      $output = [];
      foreach ($paragraphs as $paragraph) {
        $output[] = $map_function($paragraph);
      }
      return $output;
    }
    /** @var \Drupal\file\Entity\File $file */
    $paragraph = current($paragraphs);
    return $map_function($paragraph);

  }

}
