<?php

namespace Drupal\ajax_custom_webform\Plugin\WebformHandler;

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
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
    $language_manager = \Drupal::languageManager();
    $language_code = $language_manager->getCurrentLanguage()->getId();
    $data = $webform_submission->getData();
    $enquiry = $data['inquiry'];
    $fname = $data['first_name'];
    $lname = $data['last_name'];
    $email = $data['email'];
    $contact_number = $data['phone_number'];
    $country = $data['country'];
    $message = $data['message'];

    $config = \Drupal::config('hudayriyat_custom_configs.settings');
    if ($enquiry == 'General Inquiry')
    {
      $to = $config->get('custom_configs_general_mail');
    }elseif ($enquiry == 'Leasing Inquiry')
    {
      $to = $config->get('custom_configs_leasing_mail');
    }else {
      $to = $config->get('custom_configs_general_mail');
    }

    if ($config->get('custom_configs_from_mail'))
    {
      $from = $config->get('custom_configs_from_mail');
    } else {
      $from = 'info@hudayriyatisland.ae';
    }

          $admin_params = array(
			      'from' => $from,
			      'to' => $to,
            'enquiry' => $enquiry,
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email,
            'country' => $country,
            'contact_number' => $contact_number,
            'message' => $message,
			      'subject' => "Contact form has been filled."
          );

		 $this->hudayriyat_contact_mail($admin_params, 'marsanaadminmail');
     $subject = '';
     if($language_code == 'ar') {
       $user_template = 'hudayriyatusermailAR';
       $subject = $config->get('custom_configs_subject_ar');
     } else {
       $subject = $config->get('custom_configs_subject_en');
       $user_template = "hudayriyatusermailEN";
     }

     $user_params = array(
      'from' => $from,
      'to' => $email,
      'name' => $fname,
      'message' => $message,
      'subject' => $subject
     );
		 $this->hudayriyat_contact_mail($user_params, $user_template);
     $path = '/thankyou';
     $url = Url::fromUserInput($path);
     return new RedirectResponse($url);
}
public function hudayriyat_contact_mail($params, $template) {
  $config = \Drupal::config('hudayriyat_custom_configs.settings');
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

	$mail->setFrom($params['from'], 'Hudayriyat Leisure and Entertainment District');
	$mail->addReplyTo($params['from'], 'Hudayriyat Leisure and Entertainment District');
	
    global $base_url;
    $language_manager = \Drupal::languageManager();
    $language_code =  $language_manager->getCurrentLanguage()->getId();
    if($language_code == 'ar') {
	    $logo =  $base_url.'/sites/default/files/logo-hudayriyat-ar.png';
    } else {
      $logo =  $base_url.'/sites/default/files/logo-hudayriyat.png';
    }
	
	$mail->addAddress($params['to'], 'Hudayriyat Leisure and Entertainment District Contact Form');
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

	\Drupal::logger('maillog')->notice(t('Mail sent successfully to: '. $params['to'].' Message: '.$params['message'].' URL param: '.$params['url'])); 	

    return;
}
}
