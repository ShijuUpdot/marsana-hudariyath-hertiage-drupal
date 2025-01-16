<?php

namespace Drupal\community_post\Normalizer;

use Drupal\community_post\Normalizer\node\AssetDetailsNodeNormalizer;
use Drupal\serialization\Normalizer\EntityNormalizer;
use Drupal\taxonomy\Entity\Term;

/**
 * Class asset category.
 *
 * @package Drupal\community_post\Normalizer
 */
class CategoryNormalizer extends EntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\taxonomy\TermInterface';

  /**
   * {@inheritdoc}
   */
  public function supportsNormalization($data, $format = NULL, array $context = []): bool {
    if (!is_object($data) || !$this->checkFormat($format)) {
      return FALSE;
    }
    $vocabularies = ['assets', 'amenities', 'experience', 'suitable'];
    if ($data instanceof Term && in_array($data->bundle(), $vocabularies)) {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    $icon = NULL;
    $current_lang = 'en';
    if(\Drupal::hasService('marvista_api.utilities_services')) {
      $current_lang = \Drupal::service('marvista_api.utilities_services')->getCurrentLang();
    }

    $data = [
      'id' => (int) $object->id(),
      'name' => $object->hasTranslation($current_lang) ? $object->getTranslation($current_lang)->label() : $object->label(),
    ];
    if ($object->hasField('field_amenity_type_image')) {
      $file = AssetDetailsNodeNormalizer::serializeFileField($object, 'field_amenity_type_image');
      if (!empty($file['url'])) {
        $data['icon'] = $file['url'];
      }
    }
    return $data;
  }

}
