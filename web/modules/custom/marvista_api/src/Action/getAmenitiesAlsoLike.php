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
use Drupal\marvista_api\Action\getPlaces;

class getAmenitiesAlsoLike
{
  private $helper;
  private $places;

  public function __construct() {
    $this->helper = new MarvistaHelper();
    $this->places = new getPlaces();
  }

  public function all($version, $language, Request $request)
  {
    $data = [];
    $token = $request->headers->get('X-CSRF-Token');
    $id = $request->get('id') ? $request->get('id') : 0;
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

        $results = $this->getResults($id, $language, $user);

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


  private function getResults($id, $language, $user) {
    $query = \Drupal::entityQuery('node');
    $query->condition('nid', $id, '=');
    $query->condition('type', 'amenities_details');
    $query->condition('status', '1');
    $query->range(0, 20);
    $entity_ids = $query->execute();

    $data = [];
    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $node = Node::load($nid);
        $other_amenity_item = $node->get('field_other_amenity_item')->getValue();

        foreach ($other_amenity_item as $item){
          $tmp = $this->places->getDetailPlace($item['target_id'], $language, $user);
          $data[] = $tmp;
        }

      }
    }

    return $data;

  }
}
