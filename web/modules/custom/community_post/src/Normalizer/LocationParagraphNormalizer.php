<?php

namespace Drupal\community_post\Normalizer;

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
    if ($data instanceof Paragraph && $data->getType() == 'location_details') {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($paragraph, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    $data = [];
    if ($paragraph->hasField('field_coordinate')) {
      $coordinate = $paragraph->get('field_coordinate')->getValue();
      if (!empty($coordinate[0])) {
        $data['lat'] = (string) $coordinate[0]['lat'];
        $data['long'] = (string) $coordinate[0]['lon'];
      }
    }
    $data['id'] = (int) $paragraph->id();
    $data['street'] = $paragraph->get('field_street')->getString();
    $data['location_at'] = $paragraph->get('field_location_at')->getString();
    if (!empty($paragraph->distance)) {
      $data['distance'] = $paragraph->distance;
    }

    if (isset($context['views_style_plugin'])) {
      /** @var \Drupal\community_post\Plugin\views\style\CustomSerializer $view_style_plugin */
      $view_style_plugin = $context['views_style_plugin'];
      if ($view_style_plugin->view->id() == 'search_location_near_by') {
        $parent = $paragraph->getParentEntity();
        $data['parent'] = $this->serializer->normalize($parent);
      }
    }

    return $data;
  }

}
