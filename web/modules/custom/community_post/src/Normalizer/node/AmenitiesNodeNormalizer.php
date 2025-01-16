<?php

namespace Drupal\community_post\Normalizer\node;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\Core\Entity\EntityInterface;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\node\NodeInterface;
use Drupal\serialization\Normalizer\ContentEntityNormalizer;
use Drupal\Core\Language\LanguageInterface;

/**
 * Class Asset Details Node Normalizer.
 *
 * @package Drupal\community_post\Normalizer
 */
class AmenitiesNodeNormalizer extends ContentEntityNormalizer {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\node\NodeInterface';

  /**
   * {@inheritdoc}
   */
  protected $activeLangcode = LanguageInterface::LANGCODE_DEFAULT;

  /**
   * {@inheritdoc}
   */
  public function supportsNormalization($data, $format = NULL, array $context = []): bool {
    if (!is_object($data) || !$this->checkFormat($format)) {
      return FALSE;
    }
    if ($data instanceof NodeInterface && $data->getType() == 'amenities_details') {
      return TRUE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []): array|string|int|float|bool|\ArrayObject|NULL {
    global $base_url;
    $current_lang = 'en';
    if(\Drupal::hasService('marvista_api.utilities_services')) {
      $current_lang = \Drupal::service('marvista_api.utilities_services')->getCurrentLang();
    }
    $object = $object->getTranslation($current_lang);
    /** @var \Drupal\node\Entity\Node $entity */
    $entity = $object;


    $data = [];
    $serialization = \Drupal::service('serializer');
    $data['id'] = (int) $object->id();
    $data['title'] = $object->getTitle();
    if($object->hasField('field_title_translation')){
      $data['title'] = $object->field_title_translation->value ? $object->field_title_translation->value : $data['title'];
    }

    $helper = new MarvistaHelper();
    $data['short_description'] = $helper->clean($object->get('field_intro_short_description')->value);
    $data['intro_description'] = $helper->clean($object->get('field_intro_description')->value);

    $location = $object->get('field_location_details')->referencedEntities();
    if (!empty($location)) {
      $data['location'] = $serialization->normalize($location);
    }

    $data['image'] = self::serializeFileField($object, 'field_hero_image');
    $data['thumb'] = self::serializeFileField($object, 'field_amenity_icon');
    $data['is_favorite'] = FALSE;
    $account = \Drupal::currentUser();
    if ($account->isAuthenticated()) {
      $flag_service = \Drupal::service('flag');
      $flag = $flag_service->getFlagById('node_favorite');
      $flagging = $flag_service->getFlagging($flag, $object, $account);
      $data['is_favorite'] = !empty($flagging);
    }

    $review = self::serializeReviewField($object, 'field_place'); // rand(0, 200);
    $data['total_review'] = $review['review'];
    $data['rate'] = $review['rate'];

    $category = $object->get('field_amenity_type')->referencedEntities();
    if (!empty($category)) {
      $data['category'] = $serialization->normalize($category[0]);
    }

    $experience = $object->get('field_amenity_experience')->referencedEntities();
    if (!empty($experience)) {
      $data['experience'] = $serialization->normalize($experience[0]);
    }

    $language = \Drupal::languageManager()->getDefaultLanguage()->getId();
    $data['share_url'] = $base_url . '/' . $language . '/share?type=amenities_details&id='.$data['id'];

    /*$gallery = $object->get('field_amenity_images')->referencedEntities();
    if (!empty($gallery)) {
    }*/
    $data['gallery'] = AssetDetailsNodeNormalizer::serializeFileField($object, 'field_amenity_images', TRUE);	
    $data['note'] = $helper->clean($object->get('field_intro_short_description')->value);
    $data['phone_number'] = $object->get('field_phone_number')->value;

    $suitable = $object->get('field_suitable')->referencedEntities();
    if (!empty($suitable)) {
      $data['suitable'] = $serialization->normalize($suitable);
    }


    if($object->hasField('field_opening_hours')){
      $open_time = $object->get('field_opening_hours')->referencedEntities();
      if (!empty($open_time)) {
        $data['open_time'] = $serialization->normalize($open_time);
      }
    } else {
      $data['open_time'] = NULL;
    }

    if($object->hasField('field_priority')){
      $data['priority'] = $object->get('field_priority')->value ? (int)$object->get('field_priority')->value : -1;
    }
    if($object->hasField('field_direct_url')){
      $data['direct_url'] = $object->get('field_direct_url')->value ? $object->get('field_direct_url')->value : null;
    }
    if($object->hasField('field_mail_to')){
      $data['mail_to'] = $object->get('field_mail_to')->value ? $object->get('field_mail_to')->value : null;
    }
	if($object->hasField('field_title_social_media')){
      $data['title_social_media'] = $object->get('field_title_social_media')->value ? $object->get('field_title_social_media')->value : null;
    }
	if($object->hasField('field_link_facebook')){
      $data['link_facebook'] = $object->get('field_link_facebook')->value ? $object->get('field_link_facebook')->value : null;
    }
	if($object->hasField('field_link_instagram')){
      $data['link_instagram'] = $object->get('field_link_instagram')->value ? $object->get('field_link_instagram')->value : null;
    }
	if($object->hasField('field_link_twitter')){
      $data['link_twitter'] = $object->get('field_link_twitter')->value ? $object->get('field_link_twitter')->value : null;
    }
    $data['type'] = $entity->bundle();
    return $data;
  }

  /**
   * Render file field.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   Drupal\Core\Entity\EntityInterface.
   * @param string $field
   *   Field.
   * @param bool $all
   *   Get all.
   *
   * @return array
   *   Array.
   */
  public static function serializeFileField(EntityInterface $entity, $field, $all = FALSE) {
    $files = $entity->get($field)->referencedEntities();
    if (empty($files)) {
      return [];
    }
    if ($all == TRUE) {
      $output = [];
      foreach ($files as $file) {
        $output[] = [
          'id' => (int) $file->id(),
          'name' => $file->getFilename(),
          'url' => file_create_url($file->getFileUri()),
        ];
      }
      return $output;
    }
    /** @var \Drupal\file\Entity\File $file */
    $file = current($files);
    return [
      'id' => (int) $file->id(),
      'url' => file_create_url($file->getFileUri()),
      'name' => $file->getFilename(),
    ];

  }

  /**
   * Render Review field.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   Drupal\Core\Entity\EntityInterface.
   * @param string $field
   *   Field.
   * @param bool $all
   *   Get all.
   *
   * @return array
   *   Array.
   */
  public static function serializeReviewField(EntityInterface $entity, $field, $all = FALSE) {
    $data = [
      'review' => 0,
      'rate' => "0"
    ];
    $query = \Drupal::entityQuery('community_post');
    $query->condition('type', 'review');
    $query->condition('field_approval_state', 'approved');
    $query->condition($field, $entity->id());
    $entity_ids = $query->execute();

    $rate = null;
    if (count($entity_ids) > 0) {

      foreach ($entity_ids as $cid){
        $entity = CommunityPost::load(intval($cid));
        $rate[] = $entity->field_rating->value;
      }

      //Calculate the average.
      $rate_average = number_format(array_sum($rate) / count($rate), 1 );

      $data['review'] = count($entity_ids);
      $data['rate'] = $rate_average;

    }

    return $data;

  }

  /**
   * Render paragraph field.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   Drupal\Core\Entity\EntityInterface.
   * @param string $field
   *   Field.
   * @param string $map_function
   *   Function.
   * @param bool $all
   *   All.
   *
   * @return array
   *   Array.
   */
  public static function serializeParagraphField(EntityInterface $entity, $field, $map_function, $all = FALSE) {
    $paragraphs = $entity->get($field)->referencedEntities();
    if (empty($paragraphs)) {
      return [];
    }
    if ($all == TRUE) {
      $output = [];
      foreach ($paragraphs as $paragraph) {
        $output[] = $map_function($paragraph);
      }
      return $output;
    }
    /** @var \Drupal\file\Entity\File $file */
    $paragraph = current($paragraphs);
    return $map_function($paragraph);

  }

}
