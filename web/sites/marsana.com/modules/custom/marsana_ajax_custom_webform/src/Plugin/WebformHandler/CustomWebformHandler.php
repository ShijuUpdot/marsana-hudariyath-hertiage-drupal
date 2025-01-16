<?php

namespace Drupal\marsana_ajax_custom_webform\Plugin\WebformHandler;

use Drupal\Core\Annotation\Translation;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\webform\Annotation\WebformHandler;
use Drupal\webform\Plugin\WebformHandler\EmailWebformHandler;
use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\Plugin\WebformHandlerInterface;
use Drupal\webform\Plugin\WebformHandlerMessageInterface;
use Drupal\webform\WebformSubmissionConditionsValidatorInterface;
use Drupal\webform\WebformSubmissionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use PHPMailer\PHPMailer\PHPMailer;
/**
 * Form submission handler.
 *
 * @WebformHandler(
 *   id = "custom_webform_handler",
 *   label = @Translation("Custom webform handler"),
 *   category = @Translation("Slack"),
 *   description = @Translation("Sends submission data to Slack."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_SINGLE,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 * )
 */
final class CustomWebformHandler extends WebformHandlerBase {
  
  /**
   * @var ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * @var WebformSubmissionConditionsValidatorInterface
   */
  protected $conditionsValidator;

  /**
   * @var EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   *
   * @param array $configuration
   * @param $plugin_id
   * @param $plugin_definition
   * @param LoggerChannelFactoryInterface $logger_factory
   * @param ConfigFactoryInterface $config_factory
   * @param EntityTypeManagerInterface $entity_type_manager
   * @param WebformSubmissionConditionsValidatorInterface $conditions_validator
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    LoggerChannelFactoryInterface $logger_factory,
    ConfigFactoryInterface $config_factory,
    EntityTypeManagerInterface $entity_type_manager,
    WebformSubmissionConditionsValidatorInterface $conditions_validator
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->loggerFactory = $logger_factory->get('custom_webform_handler');
    $this->configFactory = $config_factory;
    $this->conditionsValidator = $conditions_validator;
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * @param ContainerInterface $container
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   *
   * @return ContainerFactoryPluginInterface|EmailWebformHandler|WebformHandlerBase|WebformHandlerInterface|WebformHandlerMessageInterface|static
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('logger.factory'),
      $container->get('config.factory'),
      $container->get('entity_type.manager'),
      $container->get('webform_submission.conditions_validator')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [];
  }
  /**
   * {@inheritdoc}
   */
#public function submitForm(array &$form, FormStateInterface $form_state, WebformSubmissionInterface $webform_submission) {
#}
public function postSave(WebformSubmissionInterface $webform_submission, $update = TRUE) {  
//public function submitForm(array &$form, FormStateInterface $form_state, WebformSubmissionInterface $webform_submission) {
    // In here, we perform our logic to manipulate and use the webform submission data however we want.
    // To access data from the webform submission, we call $webform_submission->getData(), we should be able to grab a part of the array that should be returned using a key.
    // The key will be the machine name of the field on the webform. 
    // So for example, if you have a field on the webform with a machine name of group, you code to get the value would be $webform_submission->getData()['group']

  $config = \Drupal::config('marsana_custom_configs.settings');
		      $from = 'rajeev@updot.in';
          if ($config->get('custom_configs_from_mail'))
          {
            $from = $config->get('custom_configs_from_mail');
          } 
$data = $webform_submission->getData();
$name = $data['name'];
$contact_number = $data['phone_number'];
$email = $data['email'];
$message = $data['message'];

          $admin_params = array(
			      'from' => $from,
			      'to' => $from,
            'name' => $name,
            'email' => $email,
            'contact_number' => $contact_number,
            'message' => $message,
			      'subject' => "Contact form has been filled."
          );
		 $this->marsana_contact_mail($admin_params, 'marsanaadminmail');
		  $subject = '';
		  $language_manager = \Drupal::languageManager();
			$language_code =  $language_manager->getCurrentLanguage()->getId();
			if($language_code == 'ar') {
			  $user_template = 'marsanausermailAR';
			  $subject = $config->get('custom_configs_subject_ar');
			} else {
			  $subject = $config->get('custom_configs_subject_en');
			  $user_template = "marsanausermailEN";
			}

		  $user_params = array(
        'from' => $from,
        'to' => $email,
        'name' => $name,
		    'subject' => $subject
      );
		 $this->marsana_contact_mail($user_params, $user_template);

\Drupal::logger('marsana')->info('<pre><code>' . print_r($webform_submission->getData(), TRUE) . '</code></pre>' );  
}
public function marsana_contact_mail($params, $template) {
$config = \Drupal::config('marsana_custom_configs.settings');
  $userName  = $config->get('custom_configs_email_username');
  $password  = $config->get('custom_configs_email_password');
  $host  = $config->get('custom_configs_email_host');
  $port  = $config->get('custom_configs_email_port');
  $SMTPSecure  = $config->get('custom_configs_email_SMTPSecure');
	
	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = $host;
	$mail->SMTPAuth = true;
	$mail->Username = $userName; //paste one generated by Mailtrap
	$mail->Password = $password; //paste one generated by Mailtrap
	$mail->SMTPSecure = $SMTPSecure;
	$mail->Port = $port;

	$mail->setFrom($params['from'], 'Marsana ');
	$mail->addReplyTo($params['from'], 'Marsana ');
	
    global $base_url;
   
	$logo =  $base_url.'/sites/default/files/marsana.png';
	
	$mail->addAddress($params['to'], 'Marsana Contact Form');
	$mail->Subject = $params['subject'];
	$mail->isHTML(true);
	$body_data = array (
	  '#theme' => $template,
	  '#data' => $params,
	  '#logo' => $logo
	);
	$mailContent = \Drupal::service('renderer')->render($body_data); //$message = 'Message from office 365';
	$mail->Body = $mailContent;
	$mail->CharSet = 'UTF-8';

	$mail->send(); 
}
}
