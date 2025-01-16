<?php

namespace Drupal\community_post\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CommunityPostTypeForm.
 */
class CommunityPostTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $community_post_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $community_post_type->label(),
      '#description' => $this->t("Label for the Community post type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $community_post_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\community_post\Entity\CommunityPostType::load',
      ],
      '#disabled' => !$community_post_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $community_post_type = $this->entity;
    $status = $community_post_type->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Community post type.', [
          '%label' => $community_post_type->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Community post type.', [
          '%label' => $community_post_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($community_post_type->toUrl('collection'));
  }

}
