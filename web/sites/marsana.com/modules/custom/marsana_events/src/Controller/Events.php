<?php

namespace Drupal\marsana_events\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Component\Serialization\Json;
use Drupal\redirect\Entity\Redirect;


class Events extends ControllerBase {
	
  /**
   * Returns a render-able array for a test page.
   */
  public function landigpage() {
    $build = [
      '#markup' => "<div id='react-selector'></div>",
    ];
    return $build;
  }
}