<?php

/**
 * @file
 * Contains community_post.page.inc.
 *
 * Page callback for Community post entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Community post templates.
 *
 * Default template: community_post.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_community_post(array &$variables) {
  // Fetch CommunityPost Entity Object.
  $community_post = $variables['elements']['#community_post'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
