<?php

namespace Drupal\community_post\Normalizer\paragraph;

use Drupal\paragraphs\Entity\Paragraph;
use Drupal\serialization\Normalizer\EntityNormalizer;

/**
 * Class Location Paragraph Normalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class LocationDetailsParagraphNormalizer extends EntityNormalizer {

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
    /** @var Paragraph $paragraph */
    $data = [];
    $current_lang = 'en';
    if(\Drupal::hasService('marvista_api.utilities_services')) {
      $current_lang = \Drupal::service('marvista_api.utilities_services')->getCurrentLang();
    }
    if ($paragraph->hasField('field_coordinate')) {
      $coordinate = $paragraph->get('field_coordinate')->getValue();
      if (!empty($coordinate[0])) {
        $data['lat'] = (string) $coordinate[0]['lat'];
        $data['long'] = (string) $coordinate[0]['lon'];
      }
    }
    $data['id'] = (int) $paragraph->id();
    $data['street'] = $paragraph->get('field_street')->getString();
    $data['location_at'] = $paragraph->getTranslation($current_lang)->get('field_location_at')->getString();
    if ($paragraph->get('field_locat')->getValue()) {
      $data['address'] = $paragraph->getTranslation($current_lang)->get('field_locat')->value;
    }
    if (!empty($paragraph->distance)) {
      $data['distance'] = $paragraph->distance;
    }
    if (isset($context['views_style_plugin'])) {
      /** @var \Drupal\community_post\Plugin\views\style\CustomSerializer $view_style_plugin */
      $view_style_plugin = $context['views_style_plugin'];
      if ($view_style_plugin->view->id() == 'search_location_near_by') {
        $location = $paragraph->getParentEntity();
        if ($location instanceof Paragraph && $location->bundle() == 'location') {
          $data['parent'] = $this->serializer->normalize($location->getParentEntity());
        }
      }
    }

    return $data;
  }

}
