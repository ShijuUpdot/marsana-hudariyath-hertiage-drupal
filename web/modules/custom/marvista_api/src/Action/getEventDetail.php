<?php

namespace Drupal\marvista_api\Action;

use Drupal\community_post\Normalizer\node\AmenitiesNodeNormalizer;
use Drupal\Core\Datetime\DateFormatter;
use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\taxonomy\Entity\Term;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getEventDetail
{
  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all(JsonApiController $controller, $version, $language, Request $request)
  {
    $data = [];
    $token = $request->headers->get('X-CSRF-Token');
    if($token){
      $checkAccessToken =  $this->helper->_checkAccessToken($token);
      $id = $request->get('id') ? $request->get('id') : 0;

      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      } elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      } else {
        $user = $this->helper->getUserEntityByToken($token);
        $results = $this->getResults($id, $user, $language);
        if(!empty($results)){
          $data = $results;
        }

        $status = 200;
        $message = 'success';
      }
    } else {
      $status = 401;
      $message = 'Unauthorized';
    }

    return new JsonResponse([
      'data' => $data,
      'status' => $status,
      'message' => $message,
    ]);
  }

  private function getResults($id, $user, $language) {
    global $base_url;
    $data = [];

    $query = \Drupal::entityQuery('node');
    $query->condition('nid', $id, '=');
    $query->condition('type', 'event_details');
    $query->condition('status', '1');
    $entity_ids = $query->execute();

    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }
        $data = self::normalizeEvent($node, $user, $language);
      }
    }

    return $data;
  }

  /**
   * Reuse function
   *
   * @see \Drupal\community_post\Normalizer\EventNormalizer
   */
  public static function normalizeEvent(Node $node, $user = NULL, $language = 'en') {
    global $base_url;
    $serialization = \Drupal::service('serializer');
    $helper = new MarvistaHelper();
    if ($user == NULL) {
      $user = \Drupal::currentUser();
    }
    $tmp = [];
    $title = $node->getTitle();
    if($node->hasField('field_title_translation')){
      $title = $node->field_title_translation->value ? $node->field_title_translation->value : $title;
    }
    $short_description = $node->field_intro_short_description->value;
    $intro_description = $node->field_intro_description->value;
    $image = [];
    $id = $node->id();

    if ($node->hasField('field_hero_image')) {
      $image = AmenitiesNodeNormalizer::serializeFileField($node, 'field_hero_image', false);
    }

    if ( $node->hasField('field_event_location')  && $node->get('field_event_location')->getValue() != ''){
      $location = $node->get('field_event_location')->getValue();
      $_location = null;
      if ($location) {
        foreach ($location as $d) {
          $tmp_d = null;
          $p = Paragraph::load($d['target_id']);
          if($p->hasField('field_location_details')){
            $location_detail_id = fieldValueGet($p, 'field_location_details', 'node_reference');
            $p_location_details = Paragraph::load($location_detail_id);
            $tmp_d['id'] = (int)$d['target_id'];
            $coordinate = fieldValueGet($p_location_details, 'field_coordinate', 'array_node_reference');
            if (!empty($coordinate)) {
              $tmp_d['lat'] = (string)$coordinate[0]['lat'];
              $tmp_d['long'] = (string)$coordinate[0]['lon'];
            }
            $tmp_d['location_at'] = $p_location_details->getTranslation($language)->get('field_location_at')->getString();
            $tmp_d['address'] = $p_location_details->getTranslation($language)->get('field_locat')->value;
            
            $_location[] = $tmp_d;
          }
        }
      }
    }

    $gallery = $node->get('field_events_gallery')->getValue();
    $_gallery = [];
    if ($gallery) {
      foreach ($gallery as $d) {
        $tmp_d = [];
        $p = Paragraph::load($d['target_id']);
        $tmp_d['id'] = (int)$d['target_id'];
        $tmp_d['image'] = fieldValueGet($p, 'field_gallery_image', 'file_url')[0];
        $_gallery[] = $tmp_d;
      }
    }

    $category = [];
    if ($node->hasField('field_amenity_type') && $node->field_amenity_type->target_id != '') {
      $term = Term::load($node->get('field_amenity_type')->target_id);
      $category['id'] = (int)$term->id();
      $category['name'] = $term->getTranslation($language)->getName();
      $category['icon'] = null;
      if( $term->hasField('field_amenity_type_image') && $term->field_amenity_type_image->entity != ''){
        $category['icon'] = file_create_url($term->field_amenity_type_image->entity->getFileUri());
      }
    }
    $suitable = NULL;
    if ($node->hasField('field_suitable_for_event') && $node->field_suitable_for_event->target_id != '') {
      $field_suitable = $node->get('field_suitable_for_event')->getValue();
      foreach ($field_suitable as $s) {
        $term = Term::load($s['target_id']);
        $tmp = [];
        $tmp['id'] = (int)$term->id();
        $tmp['name'] = $term->getTranslation($language)->getName();
        $suitable[] = $tmp;
      }
    }

    $event_multi_dates = $node->get('field_event_multi_dates')->getValue();
    $_event_multi_dates = [];
    if($event_multi_dates){
      foreach ($event_multi_dates as $event) {
        $tmp_d = [];
        $tmp_d['date'] = date('d/m/Y', strtotime($event['value'] . "+4 hours"));
        $tmp_d['open_time'] = date('H:i:s', strtotime($event['value']. "+4 hours"));
        // $tmp_d['close_time'] = date('H:i:s', strtotime($event['value']. "+4 hours"));
        $_event_multi_dates[] = $tmp_d;
      }
    }

    $opening_hours = $node->get('field_opening_hours')->getValue();
    $_opening_hours = [];
    if ($opening_hours) {
      foreach ($opening_hours as $d) {
        $tmp_d = [];
        $p = Paragraph::load($d['target_id']);
        $schedule_timings_id = fieldValueGet($p, 'field_schedule_timings', 'node_reference');
        $p_schedule_timings = Paragraph::load($schedule_timings_id);

        $open_time = fieldValueGet($p_schedule_timings, 'field_start_time', '');
        $close_time = fieldValueGet($p_schedule_timings, 'field_end_time', '');

        $tmp_d['date'] = date('d/m/Y', strtotime($open_time . "+4 hours"));
        $tmp_d['open_time'] = date('H:i:s', strtotime($open_time. "+4 hours"));
        $tmp_d['close_time'] = date('H:i:s', strtotime($close_time. "+4 hours"));

        $_opening_hours[] = $tmp_d;
      }
    }

    $tmp['id'] = (int)$id;
    $tmp['title'] = $title;
    $tmp['short_description'] = $helper->clean($short_description);
    $tmp['intro_description'] = $helper->clean($intro_description);
    $tmp['location'] = $_location;
    $tmp['image'] = !empty($image) ? $image : NULL;
    $tmp['thumb'] = !empty($image) ? $image : NULL;

    $tmp['is_favorite'] = FALSE;
    if ($user && $user->id() > 0) {
      /** @var \Drupal\flag\FlagService $flag_service */
      $flag_service = \Drupal::service('flag');
      $flag = $flag_service->getFlagById('node_favorite');
      /** @var \Drupal\flag\Entity\Flagging $flagging */
      $flagging = $flag_service->getFlagging($flag, $node, $user);
      $tmp['is_favorite'] = !empty($flagging);
    }
    $experience = $node->get('field_amenity_experience')->referencedEntities();
    if (!empty($experience)) {
      $tmp['experience'] = $serialization->normalize($experience[0]);
    }

    $tmp['rate'] = '0';
    // $tmp['event_time'] = $_opening_hours;
    $tmp['event_multi_dates'] = $_event_multi_dates;
    $tmp['category'] = $category;
    $tmp['suitable'] = $suitable;
    $tmp['gallery'] = $_gallery;
    $tmp['note'] = '';
    $tmp['share_url'] = $base_url . '/' . $language . '/share?type=event_details&id='.$id;
    $tmp['type'] = $node->bundle();
    if($node->hasField('field_direct_url')){
      $tmp['direct_url'] = $node->get('field_direct_url')->value ? $node->get('field_direct_url')->value : null;
    }
    return $tmp;
  }

}
