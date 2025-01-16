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

class getEventAlsoLike
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
    $data = [];
    if ($user == NULL) {
      $user = \Drupal::currentUser();
    }

    $query = \Drupal::entityQuery('node');
    $query->condition('nid', $id, '=');
    $query->condition('type', 'event_details');
    $query->condition('status', '1');
    $entity_ids = $query->execute();

    $data = [];
    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }
        $other_events = $node->get('field_other_events')->getValue();

        foreach ($other_events as $item){
          $node = Node::load($item['target_id']);
          if ($node->hasTranslation($language)) {
            $node = $node->getTranslation($language);
          }


          if ($user && $user->id() > 0) {
            /** @var \Drupal\flag\FlagService $flag_service */
            $flag_service = \Drupal::service('flag');
            $flag = $flag_service->getFlagById('node_removed');
            /** @var \Drupal\flag\Entity\Flagging $flagging */
            $flagging = $flag_service->getFlagging($flag, $node, $user);
            if(empty($flagging)){
              $data[] = getEventDetail::normalizeEvent($node, $user);
            }
          } else {
            $data[] = getEventDetail::normalizeEvent($node, $user);
          }


        }
      }
    }
    return $data;
  }


}
