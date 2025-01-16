<?php

namespace Drupal\marvista_api;

class MarvistaApiUtitlitiesServices {
  private $current_lang;

  public function __construct()
  {
    $this->current_lang = 'en';
  }

  public function getCurrentLang() {
    $request = \Drupal::request();
    if(!empty($request->get('arg_1'))) {
      $this->current_lang = $request->get('arg_1');
    }elseif(!empty(\Drupal::request()->get('lang'))) {
      $this->current_lang = $request->get('lang');
    } elseif(!empty(\Drupal::request()->get('language'))){
      $this->current_lang = $request->get('language');
    }
    return $this->current_lang;
  }
}
