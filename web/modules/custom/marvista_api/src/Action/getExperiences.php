<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Config\Entity;
use \Drupal\paragraphs\Entity\Paragraph;

class getExperiences
{

  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all(JsonApiController $controller, $version, $language, Request $request)
  {
    $data = [];
    $checkAccessToken = $request->headers->get('X-CSRF-Token');
    $debug = $request->get('debug') ? $request->get('debug') : '';

    if($checkAccessToken){
      $checkAccessToken = $this->helper->_checkAccessToken($checkAccessToken);
      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      } elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      } else {
        $results = $this->getResults($version, $language, $debug);
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

  private function getResults($version, $language, $debug = '') {
    global $base_url;
    $icon = $base_url . drupal_get_path('module', 'marvista_api') . '/images/demo/image_lorem.png';
    $background = $base_url . drupal_get_path('module', 'marvista_api') . '/images/demo/background.png';

    $query = \Drupal::entityQuery('node');
    $query->condition('type', 'categories');
    $query->range(0, 50);
    $query->sort('field_priority', 'desc');
    $nids = $query->execute();

    $data = [];

    if (count($nids) > 0) {
      foreach ($nids as $nid) {
        $tmp = [];
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }
        $name = $node->field_title_translation->value ? $node->field_title_translation->value : $node->title->value;

        $image = '';
        $id = '0';

        if ($node->hasField('field_amenity_experience') && $node->field_amenity_experience->target_id != '') {
          $term = Term::load($node->get('field_amenity_experience')->target_id);
          $id = $term->id();
        }

        if ($node->hasField('field_icon') && count($node->field_icon->entity->uri) > 0) {
          $image = file_create_url($node->field_icon->entity->getFileUri());
        }

        if ($node->hasField('field_background_image') && count($node->field_background_image->entity->uri) > 0) {
          $background = file_create_url($node->field_background_image->entity->getFileUri());
        }

        $filters = $node->get('field_filters')->getValue();
        $_filter = [];
        if ($filters) {
          foreach ($filters as $filter) {
            $tmp_filter = [];
            $p = Paragraph::load($filter['target_id']);
            $tmp_filter['fid'] = (int)$filter['target_id'];
            $tmp_filter['name'] = $p->getTranslation($language)->field_name->value;//fieldValueGet($p, 'field_name', '');
            $tmp_filter['key'] = fieldValueGet($p, 'field_key', '');
            $tmp_filter['type'] = fieldValueGet($p, 'field_type', '');
            $tmp_filter['unit'] = fieldValueGet($p, 'field_unit', '');
            $field_data = fieldValueGet($p, 'field_data', 'array_node_reference');

            $_data = [];
            foreach ($field_data as $item){
              $t = [];
              $term = Term::load($item['target_id']);
              $t['id'] = (int)$term->id();
              if($term->hasField('field_name_translation') && !empty($term->get('field_name_translation')->getValue())){
                $t['name'] = $term->get('field_name_translation')->value;
              } else {
                $t['name'] = $term->getTranslation($language)->getName();
              }
              $t['key_name'] = strtolower($term->getName());

              if($term->hasField('field_icon') && !empty($term->get('field_icon')->getValue())){
                $icon = file_create_url($term->field_icon->entity->getFileUri());
              }
              $t['icon'] = $icon;
              $t['number'] = '';
              if($term->hasField('field_number')){
                $t['number'] = $term->get('field_number')->value;
              }

              $_data[] = $t;
            }
            $tmp_filter['data'] = $_data;
            $_filter[] = $tmp_filter;

            //Remove filter with out All Amenities
            if($version == 'v1' && $id > 0){
              $_filter = [];
            }
          }
        }

        $tmp['id'] = (int)$id;
        $tmp['name'] = $name;
        $tmp['icon'] = $image;
        $tmp['background'] = $background;

        if($node->hasField('field_is_single') && !empty($node->get('field_is_single')->getValue())){
          $tmp['is_single'] = $node->get('field_is_single')->value;
        }

        if($node->hasField('field_single_content') && !empty($node->get('field_single_content')->getValue())){
          $single_content = $node->get('field_single_content')->getValue();
          foreach ($single_content as $item){
            $node = Node::load($item['target_id']);
            $tmp['id_content'] = $node->id();
            $tmp['bundle'] = $node->bundle();

          }
        }

        $tmp['filter'] = $_filter;
        $data[] = $tmp;
      }
    }

    return $data;
  }

}
