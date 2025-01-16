<?php

namespace Drupal\community_post\Normalizer;

use Drupal\paragraphs\Entity\Paragraph;
use Drupal\serialization\Normalizer\EntityNormalizer;

/**
 * Class opening hours.
 *
 * @package Drupal\community_post\Normalizer
 */
class OpeningHoursParagraphNormalizer extends EntityNormalizer {

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
    if ($data instanceof Paragraph && $data->getType() == 'opening_hours') {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($paragraph, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    if ($paragraph->get('field_start_time')->getValue()) {
      /** @var \Drupal\Core\Datetime\DrupalDateTime $start_date */
      $start_date = $paragraph->get('field_start_time')->date;
    }
    if ($paragraph->get('field_end_time')->getValue()) {
      /** @var \Drupal\Core\Datetime\DrupalDateTime $start_date */
      $end_date = $paragraph->get('field_end_time')->date;
    }
//    dump($open);
    return [
      'headline' => $paragraph->get('field_headline')->getString(),
      'timings' => $paragraph->get('field_timings')->getString(),
      'date' => !empty($start_date) ? $start_date->format('d/m/Y') : NULL,
      'open_time' => !empty($start_date) ? $start_date->format('h:i:s') : NULL,
      'close_time' => !empty($end_date) ? $end_date->format('h:i:s') : NULL,
      'open_time_timestamp' => !empty($start_date) ? $start_date->getTimestamp() : NULL,
      'close_time_timestamp' => !empty($end_date) ? $end_date->getTimestamp() : NULL,
    ];
  }

}
