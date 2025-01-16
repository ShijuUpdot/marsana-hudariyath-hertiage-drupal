<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\taxonomy\Entity\Term;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getWeekendActivities
{
  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all($version, $language, Request $request)
  {
    $data = [];
    $checkAccessToken = $request->headers->get('X-CSRF-Token');
    $category = $request->get('category') ? $request->get('category') : 0;
    $experience_id = $request->get('experience_id') ? $request->get('experience_id') : 0;
    if($checkAccessToken){
      $checkAccessToken = $this->helper->_checkAccessToken($checkAccessToken);
      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      } elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      } else {

        $results = $this->getListActivity($category, $language, $experience_id);
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

  public function getListActivity($category_id, $language, $experience_id){
    global $base_url;
    $category = null;
    try {
      $query = \Drupal::entityQuery('taxonomy_term');

      if( $category_id > 0){
        $query->condition('tid', $category_id, '<>');
      }

      if( $experience_id > 0){
        $query->condition('field_experience', $experience_id);
      }

      $query->condition('vid', 'activity_weekend');
      //$query->range(0, 3);
      $entity_ids = $query->execute();


      if (count($entity_ids) > 0) {
        foreach ($entity_ids as $id ){
          $tmp = null;
          $term = Term::load($id);
          if ($term->hasTranslation($language)) {
            $term = $term->getTranslation($language);
          }
          $tmp['id'] = (int)$term->id();
          $tmp['title'] = $term->getTranslation($language)->getName();
          $tmp['description'] = $term->getDescription();

          $suitable = null;
          if ($term->hasField('field_suitable') && $term->field_suitable->target_id != '') {
            $_term = Term::load($term->get('field_suitable')->target_id);
            $_tmp = [];
            $_tmp['id'] = (int)$_term->id();
            $_tmp['name'] = $_term->getTranslation($language)->getName();
            $suitable[] = $_tmp;
          }
          $tmp['suitable'] = $suitable;

          $tmp['image'] = null;
          $image = [];
          if( $term->hasField('field_image') && $term->field_image->entity != ''){
            $image['id'] = (int) $term->field_image->entity->id();
            $image['name'] = $term->field_image->entity->getFilename();
            $image['url'] = file_create_url($term->field_image->entity->getFileUri());
            $tmp['image'] = $image;
          }
          $tmp['detail'] = $this->getResults($tmp['id'], $language);
          $category[] = $tmp;
        }
      }
    }
    catch (\Exception $e) {}

    return $category;
  }

  private function getResults($category_id, $language) {
    global $base_url;

    $query = \Drupal::entityQuery('node');
    $query->condition('type', 'amenities_details');
    $query->condition('status', '1');
    if(!empty($category_id)){
      $query->condition('field_activity_weekend.entity.tid', $category_id);
    }

    $query->range(0, 20);
    $entity_ids = $query->execute();

    $data = [];
    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $tmp = [];
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }
        $title = $node->getTitle();
        if($node->hasField('field_title_translation')){
          $title = $node->field_title_translation->value ? $node->field_title_translation->value : $title;
        }
        $id = $node->id();

        $image = [];
        if ($node->hasField('field_hero_image') && count($node->field_hero_image->entity->uri) > 0) {
          $image['id'] = (int) $node->field_hero_image->entity->id();
          $image['name'] = $node->field_hero_image->entity->getFilename();
          $image['url'] = file_create_url($node->field_hero_image->entity->getFileUri());
        }

        $category = NULL;
        if ($node->hasField('field_amenity_type') && $node->field_amenity_type->target_id != '') {
          $term = Term::load($node->get('field_amenity_type')->target_id);
          $category['id'] = (int)$term->id();
          $category['name'] = $term->getName();
          $category['icon'] = null;
          if( $term->hasField('field_amenity_type_image') && $term->field_amenity_type_image->entity != ''){
            $category['icon'] = file_create_url($term->field_amenity_type_image->entity->getFileUri());
          }
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
                $tmp_d['location_at'] = $p_location_details->getTranslation($language)->get('field_location_at')->getString();
                $tmp_d['address'] = $p_location_details->getTranslation($language)->get('field_locat')->value;
                $_location[] = $tmp_d;
              }
            }
          }
        }

        $tmp['id'] = (int)$id;
        $tmp['title'] = $title;
        $tmp['note'] = '';
        $tmp['location'] = $_location;
        $tmp['image'] = !empty($image) ? $image : NULL;
        $tmp['share_url'] = $base_url . '/' . $language . '/share?type=amenities_details&id='.$id;
        $tmp['category'] = $category;
        $data[] = $tmp;
      }
    }

    return $data;

  }

}
