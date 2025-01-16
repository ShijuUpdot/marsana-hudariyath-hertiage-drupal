<?php

namespace Drupal\community_post\Plugin\rest\resource;

use Drupal\marvista_api\AccessCheck;

/**
 * Provides FileUpload.
 *
 * @RestResource(
 *   id = "amenities_node_resource",
 *   label = @Translation("Amenities Node Resource"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/amenities-details/{id}"
 *   }
 * )
 */
class AmenitiesNodeResource extends AssetNodeResource {

}
