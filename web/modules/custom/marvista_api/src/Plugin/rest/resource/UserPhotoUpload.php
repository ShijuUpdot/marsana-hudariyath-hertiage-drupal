<?php

namespace Drupal\marvista_api\Plugin\rest\resource;

use Drupal\Core\File\Exception\FileException;
use Drupal\Core\File\FileSystemInterface;
use Drupal\file\Entity\File;
use Drupal\file\Plugin\rest\resource\FileUploadResource;
use Drupal\marvista_api\AccessCheck;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\user\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * FileUpload.
 *
 * @RestResource(
 *   id = "file_upload_user_file",
 *   label = @Translation("User File Upload API"),
 *   serialization_class = "Drupal\file\Entity\File",
 *   uri_paths = {
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/user/upload-file"
 *   }
 * )
 */
class UserPhotoUpload extends FileUploadResource {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $collection = parent::routes();
    $collection->addRequirements(['_custom_access' => AccessCheck::class . '::access']);
    return $collection;
  }

  /**
   * Responds to entity POST requests.
   *
   * @return \Drupal\rest\ModifiedResourceResponse|\Symfony\Component\HttpFoundation\JsonResponse
   *   Drupal\rest\ModifiedResourceResponse.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function post(Request $request, $entity_type_id = NULL, $bundle = NULL, $field_name = NULL) {
    $bundle = 'user';
    $entity_type_id = 'user';
    $field_name = $request->get('field_name');

    $filename = $this->validateAndParseContentDispositionHeader($request);
    try {
      $field_definition = $this->validateAndLoadFieldDefinition($entity_type_id, $bundle, $field_name);
      $destination = $this->getUploadLocation($field_definition->getSettings());
    }
    catch (\Exception $exception) {
      return JsonResponse::create([
        'status' => 500,
        'message' => $exception->getMessage(),
      ], 500);
    }


    // Check the destination file path is writable.
    if (!$this->fileSystem->prepareDirectory($destination, FileSystemInterface::CREATE_DIRECTORY)) {
      return JsonResponse::create([
        'status' => 500,
        'message' => 'Destination file path is not writable',
      ], 500);
    }

    $validators = $this->getUploadValidators($field_definition);

    $prepared_filename = $this->prepareFilename($filename, $validators);

    // Create the file.
    $file_uri = "{$destination}/{$prepared_filename}";

    $temp_file_path = $this->streamUploadData($request);

    $file_uri = $this->fileSystem->getDestinationFilename($file_uri, FileSystemInterface::EXISTS_RENAME);

    // Lock based on the prepared file URI.
    $lock_id = $this->generateLockIdFromFileUri($file_uri);

    if (!$this->lock->acquire($lock_id)) {
      return JsonResponse::create([
        'status' => 503,
        'message' => sprintf('File "%s" is already locked for writing'),
      ], 503, ['Retry-After' => 1]);
    }

    // Begin building file entity.
    $file = File::create([]);
    $file->setOwnerId($this->currentUser->id());
    $file->setFilename($prepared_filename);
    $file->setMimeType($this->mimeTypeGuesser->guess($prepared_filename));
    $file->setFileUri($file_uri);
    // Set the size. This is done in File::preSave() but we validate the file
    // before it is saved.
    $file->setSize(@filesize($temp_file_path));

    // Validate the file entity against entity-level validation and field-level
    // validators.
    $this->validate($file, $validators);

    // Move the file to the correct location after validation. Use
    // FileSystemInterface::EXISTS_ERROR as the file location has already been
    // determined above in FileSystem::getDestinationFilename().
    try {
      $this->fileSystem->move($temp_file_path, $file_uri, FileSystemInterface::EXISTS_ERROR);
    }
    catch (FileException $e) {
      return JsonResponse::create([
        'status' => 500,
        'message' => 'Temporary file could not be moved to file location',
      ], 500);
    }
    $data = [];
    try {
      $file->save();
      $this->lock->release($lock_id);

      $user = User::load(\Drupal::currentUser()->id());
      $user->set($field_name, $file);
      $user->save();
      $data = [
        'id' => $file->id(),
        'url' => file_create_url($file->getFileUri()),
        'file_name' => $file->getFilename(),
      ];
    }
    catch (\Exception $exception) {
      return JsonResponse::create([
        'status' => 500,
        'message' => $exception->getMessage(),
      ], 500);
    }





    return new ModifiedResourceResponse([
      'data' => $data,
      'message' => 'created',
      'status' => 201,
    ], 201);
  }

  /**
   * {@inheritdoc}
   */
  protected function validateAndLoadFieldDefinition($entity_type_id, $bundle, $field_name) {
    $field_definitions = $this->entityFieldManager->getFieldDefinitions($entity_type_id, $bundle);
    if (!isset($field_definitions[$field_name])) {
      throw new NotFoundHttpException(sprintf('Field "%s" does not exist', $field_name));
    }

    /** @var \Drupal\Core\Field\FieldDefinitionInterface $field_definition */
    $field_definition = $field_definitions[$field_name];
    if ($field_definition->getSetting('target_type') !== 'file') {
      throw new AccessDeniedHttpException(sprintf('"%s" is not a file field', $field_name));
    }

    /*$entity_access_control_handler = $this->entityTypeManager->getAccessControlHandler($entity_type_id);
    $bundle = $this->entityTypeManager->getDefinition($entity_type_id)->hasKey('bundle') ? $bundle : NULL;
    $access_result = $entity_access_control_handler->createAccess($bundle, NULL, [], TRUE)
      ->andIf($entity_access_control_handler->fieldAccess('edit', $field_definition, NULL, NULL, TRUE));
    if (!$access_result->isAllowed()) {
      throw new AccessDeniedHttpException($access_result->getReason());
    }*/

    return $field_definition;
  }

}
