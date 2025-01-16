<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\taxonomy\Entity\Term;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class getPersonalization
{
  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all(JsonApiController $controller, $version, $language, Request $request)
  {
    $data = [];
    $checkAccessToken = $request->headers->get('X-CSRF-Token');
    if($checkAccessToken){
      $checkAccessToken = $this->helper->_checkAccessToken($checkAccessToken);
      if (!$checkAccessToken) {
        $status = 401;
        $message = 'Unauthorized';
      } elseif ($checkAccessToken == -1) {
        $status = 402;
        $message = 'Expired token';
      } else {

        $results = $this->getResults($language);
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

  private function getResults($language) {
    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'personalization')
      ->execute();
    $data = [];

    if (count($nids) > 0) {
      foreach ($nids as $nid) {
        $tmp = [];
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }
        $title = $node->field_title_translation->value ? $node->field_title_translation->value : $node->title->value;
        $image = '';
        $primary_color = '';
        $secondary_color = '';
        $id = $node->id();

        if ($node->hasField('field_image') && count($node->field_image->entity->uri) > 0) {
          $image = file_create_url($node->field_image->entity->getFileUri());
        }

        if ($node->hasField('field_primary_color') && $node->field_primary_color->value != '') {
          $primary_color = $node->field_primary_color->value;
        }

        if ($node->hasField('field_secondary_color') && $node->field_secondary_color->value != '') {
          $secondary_color = $node->field_secondary_color->value;
        }

        if ($node->hasField('field_amenity_type') && $node->field_amenity_type->target_id != '') {
          $term = Term::load($node->get('field_amenity_type')->target_id);
          $id = (int)$term->id();
        }

        $amenity_tags = NULL;
        if ($node->hasField('field_amenity_tags') && $node->field_amenity_tags->target_id != '') {
          $target_ids = $node->get('field_amenity_tags')->getValue();
          foreach ($target_ids as $target_id){
            $_tmp = null;
            $term = Term::load($target_id['target_id']);
            $_tmp['id'] = (int)$term->id();
            $_tmp['title'] = $term->getTranslation($language)->getName();
            $amenity_tags[] = $_tmp;
          }
        }

        $tmp['id'] = (int)$id;
        $tmp['title'] = $title;
        $tmp['image'] = !empty($image) ? $image : NULL;
        $tmp['primary_color'] = $primary_color;
        $tmp['secondary_color'] = $secondary_color;
        $tmp['items'] = $amenity_tags;
        $data[] = $tmp;
      }
    }

    return $data;
  }

}
