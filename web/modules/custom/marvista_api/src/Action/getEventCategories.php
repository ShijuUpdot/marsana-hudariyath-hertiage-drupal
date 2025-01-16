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

class getEventCategories
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
      $checkAccessToken =  $this->helper->_checkAccessToken($checkAccessToken);

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
    $category = [];
    $query = \Drupal::entityQuery('taxonomy_term')->condition('vid', 'amenities');
    $entity_ids = $query->execute();

    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $id ){
        $tmp = [];
        $term = Term::load($id);
        $tmp['id'] = (int)$term->id();
        $tmp['name'] = $term->getTranslation($language)->getName();
        $category[] = $tmp;
      }
    }

    return $category;
  }

}
