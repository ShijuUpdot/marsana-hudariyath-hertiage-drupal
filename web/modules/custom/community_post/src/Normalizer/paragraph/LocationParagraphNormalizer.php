<?php

namespace Drupal\community_post\Normalizer\paragraph;

use Drupal\paragraphs\Entity\Paragraph;
use Drupal\serialization\Normalizer\EntityNormalizer;

/**
 * Class Location Paragraph Normalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class LocationParagraphNormalizer extends EntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\paragraphs\ParagraphInterface';

  /**
   * {@inheritdoc}
   */
  public function supportsNormalization($data, $format = NULL, array $context = []): bool {
    if (!is_object($data) || !$this->checkFormat($format)) {
      return FALSE;
    }
    if ($data instanceof Paragraph && $data->getType() == 'location') {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($paragraph, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    $data = [];
    $serialization = \Drupal::service('serializer');
    if ($paragraph->type->value == 'location') {
      $data['title'] = $paragraph->get('field_location_title')->value;
      $details = $paragraph->get('field_location_details')->referencedEntities();
      if (!empty($details)) {
        $data += $serialization->normalize($details[0]);
      }
    }
    return $data;
  }

}
