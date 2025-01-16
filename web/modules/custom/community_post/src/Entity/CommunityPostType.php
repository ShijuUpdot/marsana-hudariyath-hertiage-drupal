<?php

namespace Drupal\community_post\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Community post type entity.
 *
 * @ConfigEntityType(
 *   id = "community_post_type",
 *   label = @Translation("Community post type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\community_post\CommunityPostTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\community_post\Form\CommunityPostTypeForm",
 *       "edit" = "Drupal\community_post\Form\CommunityPostTypeForm",
 *       "delete" = "Drupal\community_post\Form\CommunityPostTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\community_post\CommunityPostTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "community_post_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "community_post",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/community_post_type/{community_post_type}",
 *     "add-form" = "/admin/structure/community_post_type/add",
 *     "edit-form" = "/admin/structure/community_post_type/{community_post_type}/edit",
 *     "delete-form" = "/admin/structure/community_post_type/{community_post_type}/delete",
 *     "collection" = "/admin/structure/community_post_type"
 *   }
 * )
 */
class CommunityPostType extends ConfigEntityBundleBase implements CommunityPostTypeInterface {

  /**
   * The Community post type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Community post type label.
   *
   * @var string
   */
  protected $label;

}
