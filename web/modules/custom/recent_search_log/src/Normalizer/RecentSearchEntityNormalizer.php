<?php

namespace Drupal\recent_search_log\Normalizer;

use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\serialization\Normalizer\EntityNormalizer;

/**
 * Class Recent Search Entity Normalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class RecentSearchEntityNormalizer extends EntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\recent_search_log\Entity\RecentSearchEntity';

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {

    if ($format != 'json') {
      return parent::normalize($object, $format, $context);
    }
    $datetime = DrupalDateTime::createFromTimestamp($object->getCreatedTime());

    return [
      'id' => (int) $object->id(),
      'content' => $object->getContent(),
      'search_date_timestamp' => $datetime->getTimestamp(),
      'search_date' => $datetime->format('d/m/Y'),
      'user_id' => (int) $object->getOwnerId(),
    ];
  }

}
