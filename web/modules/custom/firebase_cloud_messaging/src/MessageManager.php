<?php

namespace Drupal\firebase_cloud_messaging;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class Message Manager.
 *
 * @package Drupal\firebase_cloud_messaging
 */
class MessageManager implements ContainerInjectionInterface {

  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(EntityTypeManagerInterface $entityTypeManager) {
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->set('entity_type.manager')
    );
  }

  /**
   * Get templates.
   *
   * @return \Drupal\Core\Entity\EntityInterface[]
   *   Drupal\Core\Entity\EntityInterface.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function getTemplates() {
    $storage = $this->entityTypeManager->getStorage('message_template');
    $templates = $storage->loadByProperties();
    return $templates;
  }

  /**
   * Get template options.
   *
   * @return array
   *   Template options.
   *
   * @throws \Drupal\Component\Plugin\Exception\InvalidPluginDefinitionException
   * @throws \Drupal\Component\Plugin\Exception\PluginNotFoundException
   */
  public function getTemplateOptions() {
    $options = [];
    foreach ($this->getTemplates() as $id => $template) {
      $options[$id] = $template->label();
    }
    return $options;
  }

  /**
   * Get service.
   *
   * @return mixed
   *   Service.
   */
  public static function service() {
    return \Drupal::service('firebase.message_manager');
  }

}
