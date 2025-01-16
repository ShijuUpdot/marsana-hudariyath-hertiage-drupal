<?php

namespace Drupal\marvista_api\Action;

use Drupal\file\Entity\File;
use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\taxonomy\Entity\Term;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getWeekendActivitiesDetail
{
  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all($version, $language, Request $request)
  {
    $data = [];
    $checkAccessToken = $request->headers->get('X-CSRF-Token');
    $id = $request->get('id');
    if($checkAccessToken){
      $checkAccessToken = $this->helper->_checkAccessToken($checkAccessToken);
      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      } elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      } else {

        $results = $this->getResults($id, $language);
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

  private function getResults($id, $language) {
    $query = \Drupal::entityQuery('node');
    $query->condition('nid', $id, '=');
    $query->condition('type', 'amenities_details');
    $query->condition('status', '1');
    $entity_ids = $query->execute();

    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $tmp = [];
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }
        $title = $node->title->value ? $node->title->value : '';
        $id = $node->id();
        $short_description = $node->field_intro_short_description->value;

        $image = [];
        if ($node->hasField('field_hero_image') && count($node->field_hero_image->entity->uri) > 0) {
          $image['id'] = (int) $node->field_hero_image->entity->id();
          $image['name'] = $node->field_hero_image->entity->getFilename();
          $image['url'] = file_create_url($node->field_hero_image->entity->getFileUri());
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

        $tmp['id'] = (int)$id;
        $tmp['title'] = $title;
        $tmp['short_description'] = $this->helper->clean($short_description);
        $tmp['image'] = !empty($image) ? $image : NULL;
        $tmp['phone_number'] = '';
        $tmp['suitable_age'] = 'Kids';
        $tmp['rate'] = '5';
        $tmp['total_review'] = '1000';
        $tmp['places'] = $this->getAssetDetail($language);
        $data = $tmp;
      }
    }

    return $data;
  }

  private function getAssetDetail($language){
    global $base_url;
    $data = [];

    $query = \Drupal::entityQuery('node');
    $query->condition('type', 'amenities_details');
    $query->condition('status', '1');
    if(!empty($experience_id)) {
      $query->condition('field_amenity_experience.entity.tid', $experience_id);
    }
    if(!empty($category)){
      $query->condition('field_amenity_type.entity.tid', $category);
    }
    $query->range(0, 20);
    $entity_ids = $query->execute();

    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $tmp = [];
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }
        $title = $node->title->value ? $node->title->value : '';
        $id = $node->id();

        $image = [];
        if ($node->hasField('field_hero_image') && count($node->field_hero_image->entity->uri) > 0) {
          $image['id'] = (int) $node->field_hero_image->entity->id();
          $image['name'] = $node->field_hero_image->entity->getFilename();
          $image['url'] = file_create_url($node->field_hero_image->entity->getFileUri());
        }

        if ( $node->hasField('field_location_details')  && $node->get('field_location_details')->getValue() != ''){
          $location = $node->get('field_location_details')->getValue();
          $_location = [];
          if ($location) {
            foreach ($location as $d) {
              $tmp_d = [];
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
              }
              $_location[] = $tmp_d;
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

        $tmp['id'] = (int)$id;
        $tmp['title'] = $title;
        $tmp['location'] = $_location;
        $tmp['image'] = $image;
        $tmp['thumb'] = $image;
        $tmp['total_review'] = '0';
        $tmp['rate'] = '0';
        $tmp['category'] = $category;
        $tmp['share_url'] = $base_url . '/' . $language . '/share?type=amenities_details&id='.$id;
        $tmp['gallery'] = $_gallery;
        $tmp['note'] = '';
        $tmp['open_time'] = '';
        $data[] = $tmp;
      }
    }

    return $data;
  }

}
