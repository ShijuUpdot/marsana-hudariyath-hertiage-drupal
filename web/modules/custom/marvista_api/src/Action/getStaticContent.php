<?php

namespace Drupal\marvista_api\Action;

use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvista_api\Helper\MarvistaHelper;

class getStaticContent
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

        $terms = $this->getStaticContent('Terms Conditions', $language);
        $privacy_policy = $this->getStaticContent('Privacy Policy', $language);
        $static_content = $this->getStaticContent('Landing', $language);

        $data = [
          'static_content' => $static_content['landing'],
          'term_condition' => $terms['description'],
          'policy_privacy' => $privacy_policy['description'],
        ];
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

  private function getResults() {
    global $base_url;
    $data = [
      0 => [
        'id' => 1,
        'title' => 'Visit the pool',
        'description' => 'text sample',
        'image' => $base_url . drupal_get_path('module', 'marvista_api') . '/images/demo/0-Onboarding.png',
      ],
      1 => [
        'id' => 2,
        'title' => 'Visit the pool',
        'description' => 'text sample',
        'image' => $base_url . drupal_get_path('module', 'marvista_api') . '/images/demo/1-Onboarding.png',
      ],
      2 => [
        'id' => 3,
        'title' => 'Visit the pool',
        'description' => 'text sample',
        'image' => $base_url . drupal_get_path('module', 'marvista_api') . '/images/demo/2-Onboarding.png',
      ],
    ];

    return $data;
  }

  private function getStaticContent($name, $language){
    $data = [];
    $query = \Drupal::entityQuery('node');
    $query->condition('type', 'article');
    if (!empty($name)) {
      $query->condition('field_tags.entity.name', $name);
    }
    $entity_ids = $query->execute();

    if (count($entity_ids) > 0) {
      foreach ($entity_ids as $nid) {
        $node = Node::load($nid);
        if ($node->hasTranslation($language)) {
          $node = $node->getTranslation($language);
        }

        $tmp = [];
        $id = $node->id();
        $title = $node->title->value ? $node->title->value : '';
        $body = $node->body->value ? $node->body->value : '';

        $landing = $node->get('field_landing')->getValue();
        $_landing = [];
        if ($landing) {
          foreach ($landing as $d) {
            $tmp_d = [];
            //$p = Paragraph::load($d['target_id']);
            $p = \Drupal::entityTypeManager()->getStorage('paragraph')->loadRevision($d['target_revision_id']);
            $tmp_d['id'] = (int)$d['target_id'];
            $tmp_d['title'] = $p->getTranslation($language)->field_title->value;
            $intro_description = $p->getTranslation($language)->field_intro_description->value;
            $tmp_d['description'] = $intro_description ? $intro_description : '';
            $tmp_d['image'] = fieldValueGet($p, 'field_icon', 'file_url')[0];
            $_landing[] = $tmp_d;
          }
        }


        $tmp['id'] = (int) $id;
        $tmp['title'] = $title;
        $tmp['description'] = $body;
        $tmp['landing'] = $_landing;

        return $tmp;

      }
    }

    return $data;
  }

}
