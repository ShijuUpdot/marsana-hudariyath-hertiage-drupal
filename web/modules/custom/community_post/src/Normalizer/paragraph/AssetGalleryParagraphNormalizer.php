<?php

namespace Drupal\community_post\Normalizer\paragraph;

use Drupal\community_post\Normalizer\node\AssetDetailsNodeNormalizer;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\serialization\Normalizer\EntityNormalizer;

/**
 * Class asset gallery.
 *
 * @package Drupal\community_post\Normalizer
 */
class AssetGalleryParagraphNormalizer extends EntityNormalizer {

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
    if ($data instanceof Paragraph && $data->getType() == 'gallery_images') {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($paragraph, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    $data = AssetDetailsNodeNormalizer::serializeFileField($paragraph, 'field_gallery_image');
    $data['pid'] = (int) $paragraph->id();
    $data['title'] = $paragraph->get('field_title')->getString();
    return $data;
  }

}
