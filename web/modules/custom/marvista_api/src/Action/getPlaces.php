<?php

namespace Drupal\marvista_api\Action;

use Drupal\community_post\Entity\CommunityPost;
use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\taxonomy\Entity\Term;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\file\Entity\File;
use function DI\string;

class getPlaces
{

  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all(JsonApiController $controller, $version, $language, Request $request)
  {
    $data = [];
    $token = $request->headers->get('X-CSRF-Token');
    $experience_id = $request->get('experience_id') ? $request->get('experience_id') : 0;
    $category = $request->get('category') ? $request->get('category') : 0;
    $type = $request->get('type') ? $request->get('type') : '';
    $facilities = $request->get('facilities') ? $request->get('facilities') : '';

    $filter = $request->get('filter') ? $request->get('filter') : '';

    if($token){
      $checkAccessToken = $this->helper->_checkAccessToken($token);
      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      } elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      } else {
        $user = $this->helper->getUserEntityByToken($token);

        if($type == 'top_rated'){
          $results = $this->top_rated($language, $user);
        } else if($version == 'v1'){
          $results = $this->getResultsForV1($type, $facilities, $experience_id, $category, $language, $user, $version, $filter);
        } else {
          $results = $this->getResultsForV2($type, $facilities, $experience_id, $category, $language, $user, $version, $filter);
        }

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

  private function getResultsForV1($type, $facilities, $experience_id, $category, $language, $user, $version = 'v1', $filter = '') {
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
    $query->condition('type', 'amenities_details');
    $query->condition('status', '1');
    if(!empty($experience_id)) {
      $query->condition('field_amenity_experience.entity.tid', $experience_id);
    }

    if(!empty($type)){
      if($type == 'might_like'){
        $query->condition('field_amenity_type.entity.tid', $amenity_type, 'NOT IN');
      } else if($type == 'trending' ) {
        $query->condition('field_suitable.entity.name', $type);
      } else {
        $query->condition('field_facilities.entity.name', $type);
      }
    }

    if(!empty($category)){
      $query->condition('field_amenity_type.entity.tid', $category);
    }

    if (!empty($facilities)) {
      $query->condition('field_facilities', explode(',', $facilities), 'IN');
    }

    $query->range(0, 50);
    $query->sort('field_priority', 'desc');
    $entity_ids = $query->execute();

    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $tmp = $this->getDetailPlace($nid, $language, $user);
        $data[] = $tmp;
      }
    }
    return $data;
  }

  private function getResultsForV2($type, $facilities, $experience_id, $category, $language, $user, $version = 'v2', $filter = ''){
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
    $query->condition('type', 'amenities_details');
    $query->condition('status', '1');
    if(!empty($experience_id)) {
      $query->condition('field_amenity_experience.entity.tid', $experience_id);
    }

//    if($type == 'might_like'){
//      $query->condition('field_amenity_type.entity.tid', $amenity_type, 'NOT IN');
//    } else if($type == 'trending' ) {
//      $query->condition('field_suitable.entity.name', $type);
//    } else if(!empty($type) && $type != 'trending-week' ) {
//      $query->condition('field_facilities.entity.name', $type);
//    } else {
//      if(!empty($category)){
//        $query->condition('field_amenity_type.entity.tid', $category);
//      } else if( !empty($amenity_type) && $version == 'v2') {
//        $query->condition('field_amenity_type.entity.tid', $amenity_type, 'IN');
//      }
//    }

    if(!empty($type)){
      if($type == 'might_like'){
        $query->condition('field_amenity_type.entity.tid', $amenity_type, 'NOT IN');
      } else if($type == 'trending' ) {
        $query->condition('field_suitable.entity.name', $type);
      } else {
        $query->condition('field_facilities.entity.name', $type);
      }
    }

    if(!empty($amenity_type)){
      $query->condition('field_amenity_type.entity.tid', $amenity_type, 'IN');
    }

    if(!empty($category)){
      $query->condition('field_amenity_type.entity.tid', $category);
    }

    if( !empty($amenity_tag) && $version == 'v2') {
      $query->condition('field_amenity_tags.entity.tid', $amenity_tag, 'IN');
    }

    if (!empty($facilities)) {
      $query->condition('field_facilities', explode(',', $facilities), 'IN');
    }

    if(!empty($filter) && $version == 'v2'){
      $filters = json_decode($filter);
      $list_filter = null;
      foreach ($filters as $filter){
        $list_filter = $filter->data;
      }
      $group = $query->orConditionGroup();
      $group->condition('field_amenity_tags.entity.tid', $list_filter, 'IN');
      $group->condition('field_facilities.entity.tid', $list_filter, 'IN');
      $query->condition($group);
    }

    $query->range(0, 50);
    $query->sort('field_priority', 'desc');
    $entity_ids = $query->execute();

    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $tmp = $this->getDetailPlace($nid, $language, $user);
        $data[] = $tmp;
      }
    }

    return $data;
  }

  private function totalReview($id){
    $data = [
      'review' => 0,
      'rate' => "0"
    ];
    $query = \Drupal::entityQuery('community_post');
    $query->condition('type', 'review');
    $query->condition('field_place', $id);
    $query->condition('field_approval_state', 'approved');
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

  private function top_rated($language, $user){
    $data = null;
    $connection = \Drupal::database();
    $query = $connection->select('community_post', 'cp');
    $query->join('community_post__field_place', 'cpl', 'cp.id = cpl.entity_id');
    $query->join('community_post__field_approval_state', 'cpa', 'cp.id = cpa.entity_id');
    $query->fields('cp', ['type'] );
    $query->fields('cpl', ['field_place_target_id'] );
    $query->condition('cp.type', 'review');
    $query->condition('cpa.field_approval_state_value', 'approved');
    $query->distinct();
    $entity_ids = $query->execute();

    $rate = null;
    if (!empty($entity_ids)) {
      foreach ($entity_ids as $item){
        $result = $this->totalReview($item->field_place_target_id);
        $tmp['id'] = $item->field_place_target_id;
        $tmp['review'] = $result['review'];
        $tmp['rate'] = $result['rate'];
        $rate[] = $tmp;
      }

      if(!empty($rate)){
        usort($rate,function($a,$b){
          if($a['rate'] == $b['rate']) {
            return 0;
          }
          return ($a['rate'] > $b['rate']) ? -1 : 1;
        });

        foreach ($rate as $item){
          $tmp = $this->getDetailPlace($item['id'], $language, $user, 'get_review');
          $tmp['id'] = $item['id'];
          $tmp['review'] = $item['review'];
          $tmp['rate'] = $item['rate'];
          $data[] = $tmp;
        }
      }
    }

    return $data;
  }

  public function getDetailPlace($nid, $language, $user, $option = null){
    global $base_url;
    $node = Node::load($nid);
    if ($node->hasTranslation($language)) {
      $node = $node->getTranslation($language);
    }
    $title = $node->getTitle();
    if($node->hasField('field_title_translation')){
      $title = $node->field_title_translation->value ? $node->field_title_translation->value : $title;
    }

    $intro_description = $node->field_intro_description->value ? $node->field_intro_description->value : '';
    $id = $node->id();

    $image = NULL;
    if ($node->hasField('field_hero_image') && !empty($node->field_hero_image->entity->uri)) {
      $image['id'] = (int) $node->field_hero_image->entity->id();
      $image['name'] = $node->field_hero_image->entity->getFilename();
      $image['url'] = file_create_url($node->field_hero_image->entity->getFileUri());
    }

    if ( $node->hasField('field_location_details')  && $node->get('field_location_details')->getValue() != ''){
      $location = $node->get('field_location_details')->getValue();
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

            $tmp_d['address'] = fieldValueGet($p_location_details, 'field_locat', '');
            $_location[] = $tmp_d;
          }
        }
      }
    }

    if ($node->hasField('field_amenity_images')){
      $gallery = $node->get('field_amenity_images')->getValue();
      $_gallery = [];
      if ($gallery) {
        foreach ($gallery as $d) {
          $tmp_d = [];
          $tmp_d['id'] = (int)$d['target_id'];
          $tmp_d['image'] = null;
          $file = File::load($d['target_id']);
          if ($file->id()) {
            $tmp_d['image'] = file_create_url($file->getFileUri());
          }
          $_gallery[] = $tmp_d;
        }
      }
    }


    $category = NULL;
    if ($node->hasField('field_amenity_type') && $node->field_amenity_type->target_id != '') {
      $term = Term::load($node->get('field_amenity_type')->target_id);
      $category['id'] = (int)$term->id();
      $category['name'] = $term->getTranslation($language)->getName();
      $category['icon'] = null;
      if( $term->hasField('field_amenity_type_image') && $term->field_amenity_type_image->entity != ''){
        $category['icon'] = file_create_url($term->field_amenity_type_image->entity->getFileUri());
      }
    }

    $is_favorite = FALSE;
    if ($user && $user->id()) {
      $flag_service = \Drupal::service('flag');
      $flag = $flag_service->getFlagById('node_favorite');
      $flagging = $flag_service->getFlagging($flag, $node, $user);
      $is_favorite = !empty($flagging);
    }

    $tmp['id'] = (int)$id;
    $tmp['title'] = $title;
    $tmp['intro_description'] = html_entity_decode(strip_tags($intro_description));
    $tmp['location'] = $_location;
    $tmp['image'] = !empty($image) ? $image : NULL;
    $tmp['thumb'] = !empty($image) ? $image : NULL;

    if(empty($option)){
      $review = $this->totalReview($id);
      $tmp['total_review'] = $review['review'];
      $tmp['rate'] = $review['rate'];
    }

    $tmp['category'] = $category;
    $tmp['share_url'] = $base_url . '/' . $language . '/share?type=amenities_details&id='.$id;
    $tmp['gallery'] = $_gallery;
    $tmp['note'] = '';
    $tmp['open_time'] = '';
    $tmp['is_favorite'] = $is_favorite;
    return $tmp;
  }




}
