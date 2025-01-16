<?php

namespace Drupal\firebase_cloud_messaging;

/**
 * Trait PushNotificationTrait.
 *
 * @package Drupal\trinity_chms\Plugin\Notifier
 */
class PushNotificationSender {

  /**
   * Push notification to the app.
   */
  public static function send($token, $options = []) {
    $app_config = \Drupal::config('firebase_cloud_messaging.firebasecloudmessagingconfig');
    $key = $app_config->get('key');
    $url = $app_config->get('url');
    $enable = $app_config->get('enable');
    if (boolval($enable) == FALSE) {
      \Drupal::logger('firebase_cloud_messaging')->debug('Disabled');
      return FALSE;
    }
    $fields = [
      'to' => $token,
      "priority" => "high",
      "notification" => [
        "title" => $options['title'],
        "body" => $options['body'],
        "badge" => 0,
      ],
      "data" => [
        "title" => $options['title'],
        "body" => $options['body'],
        "data" => $options['data'],
      ],
    ];
    $headers = [
      'Content-Type:application/json',
      'Authorization:key=' . $key,
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    \Drupal::logger('firebase_cloud_messaging')->debug(var_export($fields, TRUE));
    \Drupal::logger('firebase_cloud_messaging')->debug(var_export($result, TRUE));

    curl_close($ch);

    return $result;
  }

}
