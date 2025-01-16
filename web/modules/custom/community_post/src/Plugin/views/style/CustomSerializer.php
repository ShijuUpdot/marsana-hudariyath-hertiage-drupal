<?php

namespace Drupal\community_post\Plugin\views\style;

use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\rest\Plugin\views\style\Serializer;

/**
 * The style plugin for serialized output formats.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "custom_view_result_serializer",
 *   title = @Translation("Serializer: Custom view response"),
 *   help = @Translation("Serializer: Custom view response."),
 *   display_types = {"data"}
 * )
 */
class CustomSerializer extends Serializer {

  /**
   * {@inheritdoc}
   */
  public function render() {
    $rows = [];
    // If the Data Entity row plugin is used, this will be an array of entities
    // which will pass through Serializer to one of the registered Normalizers,
    // which will transform it to arrays/scalars. If the Data field row plugin
    // is used, $rows will not contain objects and will pass directly to the
    // Encoder.

    $is_search_location_near_by_view = false;
    if (!empty($this->view->id()) && $this->view->id() == 'search_location_near_by') {
      $is_search_location_near_by_view = true;
    }
    foreach ($this->view->result as $row_index => $row) {
      $this->view->row_index = $row_index;
      $entity = $this->view->rowPlugin->render($row);
      if ($is_search_location_near_by_view) {
//        Only get the Amenities and Event content which has been published in the Search Location Near By view
        if (method_exists($entity, 'getParentEntity') && method_exists($entity->getParentEntity(), 'getParentEntity')
          && $entity->getParentEntity()->getParentEntity() instanceof Node
          && (bool)$entity->getParentEntity()->getParentEntity()->status->value) {
          if ($entity instanceof Paragraph && !empty($row->_item->distance)) {
            $entity->distance = $row->_item->distance;
          }
          $rows[] = $entity;
        }
      } else {
        if ($entity instanceof Paragraph && !empty($row->_item->distance)) {
          $entity->distance = $row->_item->distance;
        }
        $rows[] = $entity;
      }
    }
    unset($this->view->row_index);

    // Get the content type configured in the display or fallback to the
    // default.
    if ((empty($this->view->live_preview))) {
      $content_type = $this->displayHandler->getContentType();
    } else {
      $content_type = !empty($this->options['formats']) ? reset($this->options['formats']) : 'json';
    }
    $data = [
      'status' => 200,
      'data' => $rows,
      'message' => 'ok',
    ];
    return $this->serializer->serialize($data, $content_type, ['views_style_plugin' => $this]);
  }

}
