<?php

namespace Drupal\marvista_api\Helper;

use Drupal;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class MarvistaHelper
{

  public function _getAccessToken($_token)
  {
    $key      = 'es5uObbzbqzFoUT$imW5$hvSv';
    $hash_md5 = md5($key);

    if ($hash_md5 === $_token) {
      return true;
    }

    return false;
  }

  public function _checkAccessToken($_token)
  {
    $status     = 0;
    $connection = \Drupal::database();
    $select     = $connection->select('users_access_token')
                             ->fields('users_access_token')
                             ->condition('access_token', $_token)
                             ->execute()->fetch();

    if ( ! empty($select)) {
      $status = 1;
    } elseif ($this->_getAccessToken($_token) == $_token) {
      $status = 1;
    }

    return $status;
  }

  public function getUserEntityByToken($_token)
  {
    $connection = \Drupal::database();
    $select     = $connection->select('users_access_token')
                             ->fields('users_access_token')
                             ->condition('access_token', $_token)
                             ->execute()->fetch();

    if ( ! empty($select) && ( ! empty($select->uid) || $select->uid > 0)) {
      return User::load($select->uid);
    }

    return false;
  }

  public function generateRandomString($length = 10)
  {

    $characters       = '-_0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; ++$i) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
  }

  public function generateRandomCode($length = 10)
  {

    $characters       = '0123456789';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; ++$i) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
  }

  public function clean($str)
  {
    $str = strip_tags($str);
    $str = str_replace("&nbsp;", " ", $str);
    $str = html_entity_decode($str);
    $str = preg_replace('/\s+/', ' ', $str);
    $str = trim($str);

    return $str;
  }

  public function convert_date($str)
  {
    $date = \DateTime::createFromFormat('d/m/Y', $str);

    return $date->format('Y-m-d');
  }

  public function getActivityByPersonaId($persona_id)
  {
    $activity    = [];
    $terms_child = \Drupal::entityTypeManager()
                          ->getStorage('taxonomy_term')
                          ->loadChildren($persona_id);
    if (count($terms_child) > 0) {
      foreach ($terms_child as $item) {
        if ($item->get('tid')->value != 52) {
          $activity[] = [
            'id'          => $item->get('tid')->value,
            'name'        => $item->get('name')->value,
            'description' => $item->get('description')->value,
          ];
        }

      }
    }


    return $activity;
  }

  public function getArticlesByActivityId($activity, $conditions = [])
  {
    $termIds = [];

    if (is_array($activity)) {
      foreach ($activity as $item) {
        $termIds[] = $item['id'];
      }
    } else {
      $termIds = $activity;
    }

    $query = \Drupal::database()->select('taxonomy_index', 'ti');
    $query->join('node_field_data', 'nfd', 'ti.nid = nfd.nid');
    $query->fields('nfd');
    $query->fields('ti', ['nid']);
    if ( ! empty($termIds)) {
      $query->condition('ti.tid', $termIds, 'IN');
    }

    $query->orderBy('nfd.changed', 'DESC');
    $nids = $query->execute()->fetchCol();


    return $this->helper->loadNodes($nids);
  }

  public function getArticlesLifeRingByTid($tids)
  {

    $query = \Drupal::database()->select('taxonomy_index', 'ti');
    $query->join('node_field_data', 'nfd', 'ti.nid = nfd.nid');
    $query->fields('ti', ['nid']);
    $query->fields('nfd');
    $query->condition('ti.tid', $tids, 'IN');
    $query->orderBy('nfd.changed', 'DESC');
    $query->distinct(true);
    $nids = $query->execute()->fetchCol();

    return $this->helper->loadNodes($nids);
  }

  public function getValueColumn($result)
  {
    $nids = [];
    foreach ($result as $item) {
      $nids[] = $item;
    }

    return $nids;
  }

  public function loadNode($nid)
  {
    $data = [];
    if (count($nid) > 0) {
      $node       = Node::load($nid);
      $summary    = '';
      $image      = '';
      $image_crop = '';
      $location   = '';
      $time       = '';

      $title = $node->title->value ? $node->title->value : '';
      if ($node->hasField(
          'field_summary'
        ) && $node->field_summary->value != '') {
        $summary = $node->field_summary->value;
      }
      $body = $node->body->value ? str_replace(
        '<p>',
        '',
        str_replace('</p>', '', $node->body->value)
      ) : '';

      if ($node->hasField('field_time') && $node->field_time->value != '') {
        $time = $node->field_time->value;
      }

      if ($node->hasField(
          'field_location'
        ) && $node->field_location->value != '') {
        $location = $node->field_location->value;
      }

      if ($node->hasField('field_thumbnail') && count(
                                                  $node->field_thumbnail->entity
                                                ) > 0) {

        $image = file_create_url(
          $node->field_thumbnail->entity->getFileUri()
        );
      } else {
        if ($node->hasField('field_image') && count(
                                                $node->field_image->entity->uri
                                              ) > 0) {
          $image = file_create_url($node->field_image->entity->getFileUri());
        }
      }

      if ($node->hasField('field_date')) {
        $date = \Drupal::service('date.formatter')->format(
          strtotime($node->field_date->value),
          'custom',
          'F d, Y'
        );
      } else {
        $date = \Drupal::service('date.formatter')->format(
          $node->getCreatedTime(),
          'custom',
          'F d, Y'
        );
      }

      $data = [
        'nid'      => $nid,
        'title'    => $title,
        'summary'  => $summary,
        'body'     => $body,
        'date'     => $date,
        'image'    => $image,
        'link'     => $node->url(),
        'location' => $location,
        'time'     => $time,
      ];
    }

    return $data;
  }

  public function loadNodes($nids)
  {
    $data = [];
    if (count($nids) > 0) {
      foreach ($nids as $nid) {
        $node     = Node::load($nid);
        $summary  = '';
        $image    = '';
        $location = '';
        $time     = '';

        $title = $node->title->value ? $node->title->value : '';
        if ($node->hasField(
            'field_summary'
          ) && $node->field_summary->value != '') {
          $summary = $node->field_summary->value;
        }
        $body = $node->body->value ? str_replace(
          '<p>',
          '',
          str_replace('</p>', '', $node->body->value)
        ) : '';

        if ($node->hasField('field_time') && $node->field_time->value != '') {
          $time = $node->field_time->value;
        }


        if ($node->hasField(
            'field_location'
          ) && $node->field_location->value != '') {
          $location = $node->field_location->value;
        }

        if ($node->hasField('field_thumbnail') && count(
                                                    $node->field_thumbnail->entity
                                                  ) > 0) {

          $image = file_create_url(
            $node->field_thumbnail->entity->getFileUri()
          );
        } else {
          if ($node->hasField('field_image') && count(
                                                  $node->field_image->entity->uri
                                                ) > 0) {
            $image = file_create_url($node->field_image->entity->getFileUri());
          }
        }

        if ($node->hasField('field_date')) {
          $date = \Drupal::service('date.formatter')->format(
            strtotime($node->field_date->value),
            'custom',
            'F d, Y'
          );
        } else {
          $date = \Drupal::service('date.formatter')->format(
            $node->getCreatedTime(),
            'custom',
            'F d, Y'
          );
        }

        $data[] = [
          'nid'      => $nid,
          'title'    => $title,
          'summary'  => $summary,
          'body'     => $body,
          'date'     => $date,
          'image'    => $image,
          'link'     => $node->url(),
          'location' => $location,
          'time'     => $time,
        ];
      }
    }

    return $data;
  }

  public function getNodesByTaxonomyTermIds($termIds, $limit = 10)
  {
    $termIds = (array)$termIds;
    if (empty($termIds)) {
      return null;
    }

    $query = \Drupal::database()->select('taxonomy_index', 'ti');
    $query->fields('ti', ['nid']);
    $query->condition('ti.tid', $termIds, 'IN');
    $query->distinct(true);
    $query->range(0, $limit);
    $result = $query->execute();

    if ($nodeIds = $result->fetchCol()) {
      if ($limit == 1) {
        return $this->helper->loadNode($nodeIds[0]);
      } else {

        return $this->helper->loadNodes($nodeIds);
      }
    }

    return null;
  }

  public function getNodeByContentType($content_type)
  {
    $nids = \Drupal::entityQuery('node')
                   ->condition('type', $content_type)
                   ->execute();

    $data = [];
    if (count($nids) > 0) {
      foreach ($nids as $nid) {
        $node                    = Node::load($nid);
        $marital_status          = '';
        $default_location        = '';
        $default_distance_nearby = 0;

        if ($node->hasField(
            'field_marital_status'
          ) && $node->field_marital_status->value != '') {
          $marital_status = $node->field_marital_status->value;
        }

        if ($node->hasField(
            'field_default_location'
          ) && $node->field_default_location->value != '') {
          $default_location = $node->field_default_location->value;
        }

        if ($node->hasField(
            'field_default_distance_nearby'
          ) && $node->field_default_distance_nearby->value != '') {
          $default_distance_nearby = $node->field_default_distance_nearby->value;
        }

        $data[] = [
          'marital_status'          => json_decode($marital_status),
          'default_location'        => json_decode($default_location),
          'default_distance_nearby' => (int)$default_distance_nearby,
        ];
      }
    }

    return $data;
  }

  /**
   * Send email
   *
   * @param    $subject
   * @param    $body
   * @param    $to
   *
   * @return bool
   */
  public function sendEmail($subject, $body, $to)
  {
    $mailManager       = \Drupal::service('plugin.manager.mail');
    $module            = 'marvista_api';
    $params['from']    = 'Marvista Modon';
    $params['subject'] = $subject;
    $params['message'] = $body;
    $key               = 'job_email';

    try /* For testability */ {
      $langcode = \Drupal::currentUser()->getPreferredLangcode();
    } catch (\Exception $e) {
      $langcode = 'en';
    }
    if ( ! isset($langcode)) {
      $langcode = 'en';
    }

    try {
      foreach (explode(',', $to) as $email) {
        $result = $mailManager->mail(
          $module,
          $key,
          trim($email),
          $langcode,
          $params,
          null,
          $send = true
        );
        if ( ! $result) {
          \Drupal::logger('marvista_api')->error(
            'Failed to send email to ' . $email
          );
        }
      }
    } catch (\Exception $e) {
      \Drupal::logger('marvista_api')->error(
        'Failed to send emails - ' . $e->getMessage()
      );

      return false;
    }

    return true;
  }

  public static function sendOTPEmail($values, Drupal\user\UserInterface $user)
  {
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $email    = $user->mail->getString();
    if ( ! empty($email)) {
      $token_data = [
        '[code]'              => $values['code'],
        '[email]'             => ! empty($user->mail) ? $user->mail->getString() : '',
        '[user_display_name]' => $user->getDisplayName(),
      ];
      $config     = Drupal::config('marvista_api.activecodeconfig');
      if ( ! empty($values['resend']) && $values['resend'] == true) {
        $subject_key = 'resend_mail_register_active_code_subject_' . $language;
        $body_key    = 'resend_mail_register_active_code_body_' . $language;
      } else {
        $subject_key = 'mail_register_active_code_subject_' . $language;
        $body_key    = 'mail_register_active_code_body_' . $language;
      }
      $subject = str_replace(array_keys($token_data), array_values($token_data), $config->get($subject_key));
      $message = str_replace(array_keys($token_data), array_values($token_data), $config->get($body_key));
      $params  = [
        'email'   => $email,
        'subject' => $subject,
        'message' => $message,
      ];
      /** @var \Drupal\Core\Mail\MailManager $mailManager */
      $mailManager = Drupal::service('plugin.manager.mail');
      $mailManager->mail('marvista_api', 'active_code', $params['email'], 'en', $params, $send = true);

      return true;
    }

    return false;
  }

  public static function sendWelcomeMail($values, Drupal\user\UserInterface $user)
  {
    $email = $user->mail->getString();
    if ( ! empty($email)) {
      $host       = \Drupal::request()->getSchemeAndHttpHost();
      $token_data = [
        '[email]'             => ! empty($user->mail) ? $user->mail->getString() : '',
        '[user_display_name]' => $user->getDisplayName(),
        '[site_url]'          => $host,
        '[first_name]'        => $user->get('field_first_name')->getString(),
        '[last_name]'         => $user->get('field_last_name')->getString(),
        '[contact_number]'    => $user->get('field_dial_code')->getString() . ' ' . $user->get('field_phone_number')->getString(),
      ];
      $config     = Drupal::config('marvista_api.welcomeconfigform');

      $subject = str_replace(array_keys($token_data), array_values($token_data),
        $config->get('user_welcome_mail_subject' . $values['lang']));
      $message = str_replace(array_keys($token_data), array_values($token_data),
        $config->get('user_welcome_mail_body' . $values['lang']));
      $params  = [
        'email'   => $email,
        'subject' => $subject,
        'message' => $message,
      ];
      /** @var \Drupal\Core\Mail\MailManager $mailManager */
      $mailManager = Drupal::service('plugin.manager.mail');
      $mailManager->mail('marvista_api', 'user_welcome_email', $params['email'], $values['lang'], $params,
        $send = true);

      return true;
    }

    return false;
  }

  public static function sendWelcomeMailAdmin($values, Drupal\user\UserInterface $user)
  {
    $config      = Drupal::config('marvista_api.welcomeconfigform');
    $admin_email = $config->get('admin_config_mail_address');
    $admin_email = trim($admin_email);
    $emails      = explode(',', $admin_email);
    if ( ! empty($emails)) {
      $host       = \Drupal::request()->getSchemeAndHttpHost();
      $token_data = [
        '[email]'             => ! empty($user->mail) ? $user->mail->getString() : '',
        '[user_display_name]' => $user->getDisplayName(),
        '[site_url]'          => $host,
        '[first_name]'        => $user->get('field_first_name')->getString(),
        '[last_name]'         => $user->get('field_last_name')->getString(),
        '[contact_number]'    => $user->get('field_dial_code')->getString() . ' ' . $user->get('field_phone_number')->getString(),
      ];

      $subject = str_replace(array_keys($token_data), array_values($token_data),
        $config->get('admin_mail_subject' . $values['lang']));
      $message = str_replace(array_keys($token_data), array_values($token_data),
        $config->get('admin_mail_body' . $values['lang']));
      /** @var \Drupal\Core\Mail\MailManager $mailManager */
      $mailManager = Drupal::service('plugin.manager.mail');
      foreach ($emails as $email) {
        $params = [
          'email'   => $email,
          'subject' => $subject,
          'message' => $message,
        ];
        $mailManager->mail('marvista_api', 'admin_welcome_email', $params['email'], $values['lang'], $params,
          $send = true);
      }

      return true;


    }

    return false;
  }

}
