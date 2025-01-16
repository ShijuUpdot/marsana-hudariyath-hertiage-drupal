<?php
/**
 * @file
 * Contains \Drupal\marvista_api\Controller\ShareSocialController.
 */

namespace Drupal\marvista_api\Controller;

use Drupal\Core\Controller\ControllerBase;

class ShareSocialController extends ControllerBase {

  public function content() {
    $request = \Drupal::request();
    //Detect special conditions devices
    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");

    //do something with this information
    if( $iPod || $iPhone ){
      $device = 'ios';
      //browser reported as an iPhone/iPod touch -- do something here
    }else if($iPad){
      $device = 'ios';
      //browser reported as an iPad -- do something here
    }else if($Android){
      $device = 'android';
      //browser reported as an Android device -- do something here
    }else {
      $device = 'web';
      //browser reported as a webOS device -- do something here
    }

    return [
      '#theme' => 'marvista_api',
      '#content' => $device,
    ];

  }
}
