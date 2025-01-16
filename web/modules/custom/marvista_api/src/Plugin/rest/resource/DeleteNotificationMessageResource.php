<?php

namespace Drupal\marvista_api\Plugin\rest\resource;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\marvista_api\AccessCheck;
use Drupal\message\Entity\Message;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\user\Entity\User;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Delete notification message.
 *
 * @RestResource(
 *   id = "delete_notification_message",
 *   label = @Translation("Delete notification message"),
 *   uri_paths = {
 *    "canonical" = "/json-api/{version}/{lang}/notification/{id}"
 *   }
 * )
 */
class DeleteNotificationMessageResource extends ResourceBase {


  /**
   * Drupal\Core\Entity\EntityTypeManagerInterface.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   *   Drupal\Core\Entity\EntityTypeManagerInterface.
   */
  protected $entityTypeManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    array $serializer_formats,
    LoggerInterface $logger,
    EntityTypeManagerInterface $entityTypeManager
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $serializer_formats, $logger);

    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->getParameter('serializer.formats'),
      $container->get('logger.factory')->get('rest'),
      $container->get('entity_type.manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $collection = parent::routes();
    $collection->addRequirements(['_custom_access' => AccessCheck::class . '::access']);
    return $collection;
  }

  /**
   * {@inheritDoc}
   */
  public function delete(Request $request, $version, $lang, $id) {
    $message = Message::load($id);
    if (empty($message)) {

      return new JsonResponse([
        'status' => 400,
        'message' => 'Message not found.',
      ], 400);
    }

    if ($message->getOwnerId() != \Drupal::currentUser()->id()) {
      //Update status for message global
      $account = \Drupal::currentUser();
      $user = User::load($account->id());
      if ( !empty($account->id()) && $user->hasField('field_action') ) {
        $action[] = [
          'message_id' => $id,
          'delete' => 1,
        ];

        $list_action = $user->get('field_action')->getString();
        if($list_action){
          $list_action = json_decode($list_action);
          foreach ($list_action as $item){
            $tmp = null;
            if($item->message_id != $id){
              $tmp['message_id'] = $item->message_id;
              $tmp['delete'] = 1;
              $action[] = $tmp;
            }
          }
        }

        $user->set('field_action', json_encode($action) );
        $user->save();
        return new JsonResponse([
          'status' => 200,
          'message' => 'ok',
        ], 200);
      }
      return new JsonResponse([
        'status' => 400,
        'message' => 'Permission denied.',
      ], 400);
    }
    try {
      $message->delete();

      return new JsonResponse([
        'status' => 200,
        'message' => 'ok',
      ], 200);
    }
    catch (\Exception $exception) {
      $error = $exception->getMessage();
    }

    return new JsonResponse([
      'status' => 400,
      'message' => $error,
    ], 400);
  }

}
