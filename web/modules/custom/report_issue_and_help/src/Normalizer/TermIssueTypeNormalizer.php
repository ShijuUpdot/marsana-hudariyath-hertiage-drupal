<?php

namespace Drupal\report_issue_and_help\Normalizer;

use Drupal\serialization\Normalizer\EntityNormalizer;
use Drupal\taxonomy\Entity\Term;

/**
 * Class asset category.
 *
 * @package Drupal\community_post\Normalizer
 */
class TermIssueTypeNormalizer extends EntityNormalizer {

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
    $vocabularies = ['issue_type', 'help_topic'];
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
    $current_lang = !empty(\Drupal::request()->get('lang')) ? \Drupal::request()->get('lang') : \Drupal::languageManager()->getCurrentLanguage()->getId();
    $data = [
      'id' => (int) $object->id(),
      'name' => $object->getTranslation($current_lang)->label(),
    ];
    return $data;
  }

}
