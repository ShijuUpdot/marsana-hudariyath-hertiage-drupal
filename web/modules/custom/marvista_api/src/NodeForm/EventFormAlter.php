<?php

namespace Drupal\marvista_api\NodeForm;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\firebase_cloud_messaging\MessageManager;
use Drupal\form_alter_service\FormAlterBase;
use Drupal\marvista_api\ScheduleItemProcessor\EventReminder;
use Drupal\schedule_item\Entity\ScheduleItem;

/**
 * Class Event Form Alter.
 *
 * @package Drupal\marvista_api\NodeForm
 */
class EventFormAlter {

  /**
   * {@inheritdoc}
   */
  public static function alterForm(array &$form, FormStateInterface $form_state) {
    $form['event_reminder'] = [
      '#type' => 'details',
      '#title' => t('Event reminder'),
      '#group' => 'advanced',
      '#attributes' => [
        'class' => ['node-form-options'],
      ],
      '#attached' => [
        'library' => ['node/drupal.node'],
      ],
      '#weight' => 95,
      '#optional' => TRUE,
    ];
    $form['send_noti'] = [
      '#type' => 'checkbox',
      '#title' => 'Send a notification',
      '#group' => 'event_reminder',
    ];
    $form['reminder_update'] = [
      '#type' => 'checkbox',
      '#title' => 'Update or set reminder',
      '#group' => 'event_reminder',
    ];
    $form['reminder_datetime_outer'] = [
      '#type' => 'container',
      '#group' => 'event_reminder',
      '#states' => [
        'visible' => [
          [':input[name="reminder_update"]' => ['checked' => TRUE]],
        ],
      ],
    ];
    $form['reminder_datetime_outer']['reminder_datetime'] = [
      '#type' => 'datetime',
      '#title' => 'Remind date and time',
      '#description' => 'The notification will be send at this date time.',
      '#attributes' => [
        'min' => \Drupal::service('date.formatter')->format(\Drupal::time()
          ->getCurrentTime(), 'html_date'),
      ],
    ];
    /*$message_manager = MessageManager::service();
    $url = Url::fromUri('internal:/admin/structure/message')->toString();
    $form['reminder_datetime_outer']['reminder_template'] = [
      '#type' => 'select',
      '#title' => 'Template',
      '#description' => 'Message template of reminder. Click to <a href="' . $url . '">Manage templates</a>',
      '#options' => $message_manager->getTemplateOptions(),
      '#default_value' => 'event_remind',
    ];*/
    $form['actions']['submit']['#submit'][] = [self::class, 'submit'];
  }

  /**
   * {@inheritdoc}
   */
  public static function submit(array $form, FormStateInterface $form_state) {
    $update = (bool) $form_state->getValue('reminder_update');
    /** @var \Drupal\node\Entity\Node $node */
    $node = $form_state->getFormObject()->getEntity();

    if (TRUE == $update) {
      \Drupal::messenger()->addStatus('Schedule has been set for the content');
      /** @var \Drupal\Core\Datetime\DrupalDateTime $date */
      $date = $form_state->getValue('reminder_datetime');
      $schedule_item = ScheduleItem::create([
        'queued' => $date->getTimestamp(),
        'name' => 'Reminder for: ' . $node->getTitle(),
        'execute_function' => EventReminder::class . '::process',
        'entity_type' => $node->getEntityTypeId(),
        'entity_id' => $node->id(),
        'entity_bundle' => $node->bundle(),
      ]);
      $schedule_item->save();
    }
    $send = (bool) $form_state->getValue('send_noti');
    if ($send) {
      \Drupal::messenger()->addStatus('Notification has been sent');
      EventReminder::sendMessage($node, EventReminder::getReminderTemplate($node));
    }
  }

}
