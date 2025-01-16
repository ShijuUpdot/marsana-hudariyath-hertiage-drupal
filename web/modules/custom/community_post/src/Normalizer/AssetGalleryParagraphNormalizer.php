<?php

namespace Drupal\community_post\Normalizer;

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
  public function supportsNormalization($data, $format = NULL) {
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
  public function normalize($paragraph, $format = NULL, array $context = []) {
    return AssetDetailsNodeNormalizer::serializeFileField($paragraph, 'field_gallery_image');
  }

}
