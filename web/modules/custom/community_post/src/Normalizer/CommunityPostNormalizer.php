<?php

namespace Drupal\community_post\Normalizer;

use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\serialization\Normalizer\EntityNormalizer;

/**
 * Class Community Post Normalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class CommunityPostNormalizer extends EntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\community_post\entity\CommunityPost';

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {

    if ($format != 'json') {
      return parent::normalize($object, $format, $context);
    }
    /* if ($object instanceof Comment && $format == 'json') {
       return CommentSerializer::serialize($object);
     }*/
    $data = $object->serialize();
    /** @var \Drupal\community_post\Entity\CommunityPost $entity */
    $entity = $object;
    if (!empty($context['fields']) && in_array('created', $context['fields'])) {
      $date = DrupalDateTime::createFromTimestamp($entity->getCreatedTime());
      $data['created'] = $entity->getCreatedTime();
    }
    return $data;
  }

}
