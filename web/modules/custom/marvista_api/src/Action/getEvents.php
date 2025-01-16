<?php

namespace Drupal\marvista_api\Action;

use Drupal\Core\Datetime\DateFormatter;
use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\taxonomy\Entity\Term;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getEvents {

  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all(JsonApiController $controller, $version, $language, Request $request) {
    $data = [];
    $token = $request->headers->get('X-CSRF-Token');
    if ($token) {
      $checkAccessToken = $this->helper->_checkAccessToken($token);
      $experience_id = $request->get('experience_id') ? $request->get('experience_id') : 0;
      $category = $request->get('category') ? $request->get('category') : 0;
      $type = $request->get('type') ? $request->get('type') : '';
      $start_date = $request->get('start_date') ? $request->get('start_date') : '';
      $end_date = $request->get('end_date') ? $request->get('end_date') : '';
      $facilities = $request->get('facilities') ? $request->get('facilities') : '';
      $filter = $request->get('filter') ? $request->get('filter') : '';
      $debug = $request->get('debug') ? $request->get('debug') : '';

      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      }
      elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      }
      else {
        $user = $this->helper->getUserEntityByToken($token);
        $results = $this->getResults($experience_id, $category, $facilities, $start_date, $end_date, $user, $language, $version, $filter, $debug);
        if (!empty($results)) {
          $data = $results;
        }

        $status = 200;
        $message = 'success';
      }
    }
    else {
      $status = 401;
      $message = 'Unauthorized';
    }

    return new JsonResponse([
      'data' => $data,
      'status' => $status,
      'message' => $message,
    ]);
  }

  private function getResults($experience_id, $category, $facilities, $start_date, $end_date, $user = NULL, $language, $version = 'v1', $filter = '', $debug = 0) {
    $data = [];

    if ( !empty($user) && $user->hasField('field_has_fill_personalization') && !empty($user->field_has_fill_personalization->value) ) {
      $personal_list = json_decode($user->field_has_fill_personalization->value);
      $_amenity_type = $personal_list->amenity_type;
      $_amenity_tag = $personal_list->amenity_tag;
      $amenity_type = [];
      $amenity_tag = [];
      foreach ($_amenity_type as $item){
        $amenity_type[] = $item->id;
      }
      foreach ($_amenity_tag as $item){
        $amenity_tag[] = $item->id;
      }
    }

    $query = \Drupal::entityQuery('node');
    $query->condition('type', 'event_details');
    $query->condition('status', '1');
    if (!empty($experience_id)) {
      $query->condition('field_amenity_experience.entity.tid', $experience_id);
    }
    if (!empty($category)) {
      $query->condition('field_amenity_type.entity.tid', $category);
    } else if( !empty($amenity_type) && $version == 'v2') {
      $query->condition('field_amenity_type.entity.tid', $amenity_type, 'IN');
    }

    if (!empty($facilities)) {
      $query->condition('field_facilities', explode(',', $facilities), 'IN');
    }

    if(!empty($filter) && $version == 'v2'){
      $filters = json_decode($filter);
      $list_filter = null;
      $date_filter = null;
      foreach ($filters as $filter){
        if($filter->by_date){
          $date_filter = $filter->by_date;
          $start_date = $date_filter->startdate;
          $end_date = $date_filter->enddate ? $date_filter->enddate : '30/12/2050';
        } else {
          $list_filter = $filter->data;
        }
      }
      if($list_filter){
        $query->condition('field_amenity_tags.entity.tid', $list_filter, 'IN');
      }
    }

    if (!empty($start_date) && !empty($end_date)) {      
      $query->condition('field_event_multi_dates.value', $this->helper->convert_date($start_date) . 'T00:00:00', '>=');
      $query->condition('field_event_multi_dates.value', $this->helper->convert_date($end_date) . 'T23:59:59', '<=');
    }
    $entity_ids = $query->execute();
//    echo $query->__toString() . "\n";die;

    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }

        if ($user && $user->id() > 0) {
          /** @var \Drupal\flag\FlagService $flag_service */
          $flag_service = \Drupal::service('flag');
          $flag = $flag_service->getFlagById('node_removed');
          /** @var \Drupal\flag\Entity\Flagging $flagging */
          $flagging = $flag_service->getFlagging($flag, $node, $user);
          if (empty($flagging)) {
            $data[] = self::normalizeEventList($node, $user, $language);
          }
        }
        else {
          $data[] = self::normalizeEventList($node, $user, $language);
        }

      }
    }

    return $data;
  }

  /**
   * Reuse function
   *
   * @see \Drupal\community_post\Normalizer\EventListNormalizer
   */
  public static function normalizeEventList(Node $node, $user = NULL, $language = 'en') {
    global $base_url;
    if ($user == NULL) {
      $user = \Drupal::currentUser();
    }
    $tmp = [];
    $title = $node->getTitle();
    if($node->hasField('field_title_translation')){
      $title = $node->field_title_translation->value ? $node->field_title_translation->value : $title;
    }
    $image = NULL;
    $id = $node->id();

    if ($node->hasField('field_hero_image') && count($node->field_hero_image->entity->uri) > 0) {
      $image['id'] = (int) $node->field_hero_image->entity->id();
      $image['name'] = $node->field_hero_image->entity->getFilename();
      $image['url'] = file_create_url($node->field_hero_image->entity->getFileUri());
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
        $tmp_d['id'] = (int) $d['target_id'];
        $tmp_d['image'] = fieldValueGet($p, 'field_gallery_image', 'file_url')[0];
        $_gallery[] = $tmp_d;
      }
    }

    $category = NULL;
    if ($node->hasField('field_amenity_type') && $node->field_amenity_type->target_id != '') {
      $term = Term::load($node->get('field_amenity_type')->target_id);
      $category['id'] = (int) $term->id();
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
        $tmp['id'] = (int) $term->id();
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
        $tmp_d['open_time'] = date('H:i:s', strtotime($open_time . "+4 hours"));
        $tmp_d['close_time'] = date('H:i:s', strtotime($close_time . "+4 hours"));

        $_opening_hours[] = $tmp_d;
      }
    }

    $tmp['id'] = (int) $id;
    $tmp['title'] = $title;
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
    $tmp['rate'] = '0';
    // $tmp['event_time'] = $_opening_hours;
    $tmp['event_multi_dates'] = $_event_multi_dates;
    $tmp['category'] = $category;
    $tmp['suitable'] = $suitable;
    $tmp['gallery'] = $_gallery;
    $tmp['note'] = '';
    $tmp['share_url'] = $base_url . '/' . $language . '/share?type=event_details&id='.$id;
    $tmp['type'] = $node->bundle();
    return $tmp;
  }


}
