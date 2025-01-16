<?php

namespace Drupal\community_post\Normalizer\node;

use Drupal\Core\Entity\EntityInterface;
use Drupal\marvista_api\Action\getEventDetail;
use Drupal\node\NodeInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\serialization\Normalizer\ContentEntityNormalizer;
use Drupal\taxonomy\Entity\Term;

/**
 * Class Event Details Node Normalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class EventNormalizer extends ContentEntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\node\NodeInterface';

  /**
   * {@inheritdoc}
   */
  public function supportsNormalization($data, $format = NULL, array $context = []): bool  {
    if (!is_object($data) || !$this->checkFormat($format)) {
      return FALSE;
    }
    if ($data instanceof NodeInterface && $data->getType() == 'event_details') {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    $current_lang = 'en';
    if(\Drupal::hasService('marvista_api.utilities_services')) {
      $current_lang = \Drupal::service('marvista_api.utilities_services')->getCurrentLang();
    }
    $object = $object->getTranslation($current_lang);
    $data = getEventDetail::normalizeEvent($object, $user = null, $current_lang);
    return $data;
  }

}
