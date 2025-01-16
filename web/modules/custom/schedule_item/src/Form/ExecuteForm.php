<?php

namespace Drupal\schedule_item\Form;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Entity\Entity;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Entity\EntityTypeBundleInfoInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\Core\Url;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\trinity_group\ConfigurationForm\GroupIdentifyConfig;
use Drupal\trinity_membership\Entity\Membership;
use Drupal\trinity_membership\Service\MemberManager;
use Drupal\trinity_membership\Service\MembershipManager;
use Drupal\trinity_membership\Service\Role;
use Drupal\trinity_schedule\CommandManager;
use Drupal\trinity_workspace\CurrentUserWorkspace;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Form controller add volunteer.
 */
class ExecuteForm extends FormBase {

  /**
   * The current user account.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $account;

  protected $scheduleItem;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    AccountProxyInterface $account
  ) {

    $this->account = $account;
  }

  /**
   * Form wrapper ID.
   */
  public function getFormId() {
    return 'schedule-item-execute-form';
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    // Instantiates this form class.
    return new static(
      $container->get('current_user')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $schedule_item = NULL) {
    $this->scheduleItem = $schedule_item;
    $form['title'] = [
      '#markup' => '<h3>Are you sure you want to execute schedule item (' . $this->scheduleItem->id() . ')?</h3>',
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => 'Submit',
      '#submit' => ['::submitForm'],
    ];
    $form['actions']['cancel'] = [
      '#type' => 'submit',
      '#value' => 'Cancel',
      '#submit' => ['::cancelForm'],
      '#attributes' => [
        'class' => ['cancel-button', 'white-background', 'border-aaaaaa'],
      ],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    _schedule_item_process_item($this->scheduleItem);
    $this->messenger()->addStatus('Schedule item has been execute.');
    $form_state->setRedirectUrl(Url::fromUri('internal:/admin/structure/schedule_item'));
  }

  /**
   * Cancel add volunteer.
   */
  public function cancelForm(array &$form, FormStateInterface $form_state) {
    $form_state->setRedirectUrl(Url::fromUri('internal:/admin/structure/schedule_item'));
  }

}
