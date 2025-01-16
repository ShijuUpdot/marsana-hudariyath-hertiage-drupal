<?php

namespace Drupal\marvista_api\Action;

use Drupal\Core\Session\AccountProxyInterface;
use Drupal\dbtng_example\DbtngExampleRepository;
use Drupal\marvista_api\Controller\JsonApiController;
use Drupal\marvista_api\Helper\MarvistaHelper;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\marvista_api\MarvistaAPIRepository;
use Drupal\Core\Database\Connection;
use Drupal\paragraphs\Entity\Paragraph;

class notificationSetting {

  private $helper;

  public function __construct() {
    $this->helper = new MarvistaHelper();
  }

  public function all(
    JsonApiController $controller,
    $version,
    $language,
    Request $request
  ) {
    $data = [];
    $token = $request->headers->get('X-CSRF-Token');
    if ($token) {
      $checkAccessToken = $this->helper->_checkAccessToken($token);
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
        $dataBody = $request->getContent();
        $dataBody = json_decode($dataBody, TRUE);

        if ($this->_hasError($dataBody)) {
          return new JsonResponse(
            [
              'status' => 400,
              'message' => 'Bad Request',
            ]
          );
        }

        $results = $this->getResults($dataBody, $user);
        if (!empty($results)) {
          $data = $results;
        }
        $status = 200;
        $message = 'Success';
      }
    }
    else {
      $status = 401;
      $message = 'Unauthorized';
    }

    return new JsonResponse(
      [
        'data' => $data,
        'status' => $status,
        'message' => $message,
      ]
    );
  }



  private function getResults($dataBody, $user) {
    global $base_url;
    $path = $base_url . drupal_get_path('module','marvista_api') . '/images/icon/';

    if ($user != NULL) {
      $notification_setting = $user->get('field_notification_setting')->referencedEntities();
      $_notification_setting = [];

      if ( !empty($notification_setting) ) {
        $this->updateParagraphItem($dataBody, $user);
        foreach ($notification_setting as $d) {
          $tmp_d = [];
          $p = Paragraph::load($d->id());
          $tmp_d['id'] = (int)$d->id();
          $tmp_d['name'] = fieldValueGet($p, 'field_name', '');
          $tmp_d['type'] = $path . fieldValueGet($p, 'field_type', '') . '.png';
          $tmp_d['status'] = (int)fieldValueGet($p, 'field_status', '');
          $_notification_setting[] = $tmp_d;
        }
      } else {
        $this->insertParagraphItem($user);
        return $this->getResults($dataBody, $user);

      }
      return $_notification_setting;
    }

    return $this->itemDefault();
  }

  public static function insertParagraphItem($user){
    $items = self::itemDefault();

    $result = $user->get('field_notification_setting')->referencedEntities();
    if(count($result) > 4){
      foreach ($result as $item) {
        if ($item instanceof Paragraph) {
          $entity = \Drupal::entityTypeManager()->getStorage('paragraph')->load($item->id());
          $entity->delete();
        }
      }
      $result = null;
    }


    if(empty($result)){
      foreach ($items as $item){
        $notification = Paragraph::create($item);
        $notification->isNew();
        $notification->save();

        if($user->hasField('field_notification_setting')){
          $current = $user->get('field_notification_setting')->getValue();
          $current[] = array(
            'target_id' => $notification->id(),
            'target_revision_id' => $notification->getRevisionId(),
          );
          $user->set('field_notification_setting', $current);
          $user->save();
        }
      }
    }
  }

  private function updateParagraphItem($dataBody){
    if($dataBody){
      foreach ($dataBody as $item){
        $paragraph = Paragraph::load($item['id']);
        if($paragraph->hasField('field_status')){
          // Update the field.
          $paragraph->set('field_status', $item['status']);
          // Save the Paragraph.
          $paragraph->save();
        }
      }
    }
  }

  private static function itemDefault(){
    $data = [
      [
        'type' => 'notification_setting',
        'field_name' => 'Hudayriyat Island announcements',
        'field_type' => 'anoucemance',
        'field_status' => 1
      ],
      [
        'type' => 'notification_setting',
        'field_name' => 'Upcoming events',
        'field_type' => 'upcome',
        'field_status' => 1,
      ],
      [
        'type' => 'notification_setting',
        'field_name' => 'Community posts',
        'field_type' => 'community',
        'field_status' => 1,
      ],
      [
        'type' => 'notification_setting',
        'field_name' => 'Approved posts',
        'field_type' => 'approve',
        'field_status' => 1,
      ],
    ];
    return $data;
  }

  private function _hasError($data) {
    $error = 0;
    foreach ($data as $item) {
      if (empty($item['id']) || $item['id'] == '') {
        $error = 1;
      }
    }

    return $error;
  }

}
