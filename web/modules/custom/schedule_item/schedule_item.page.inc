<?php

/**
 * @file
 * Contains schedule_item.page.inc.
 *
 * Page callback for Schedule item entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Schedule item templates.
 *
 * Default template: schedule_item.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_schedule_item(array &$variables) {
  // Fetch ScheduleItem Entity Object.
  $schedule_item = $variables['elements']['#schedule_item'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
