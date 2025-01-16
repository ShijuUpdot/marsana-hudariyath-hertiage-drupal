<?php

namespace Drupal\marvista_api\Plugin\rest\resource;

use Drupal\Core\File\Exception\FileException;
use Drupal\Core\File\FileSystemInterface;
use Drupal\file\Entity\File;
use Drupal\file\Plugin\rest\resource\FileUploadResource;
use Drupal\marvista_api\AccessCheck;
use Drupal\rest\ModifiedResourceResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * FileUpload.
 *
 * @RestResource(
 *   id = "file_upload",
 *   label = @Translation("File Upload API"),
 *   serialization_class = "Drupal\file\Entity\File",
 *   uri_paths = {
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/upload-image"
 *   }
 * )
 */
class FileUpload extends FileUploadResource {

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
   * @return \Drupal\rest\ModifiedResourceResponse
   *   Drupal\rest\ModifiedResourceResponse.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function post(Request $request, $entity_type_id = NULL, $bundle = NULL, $field_name = NULL) {
    $filename = $this->validateAndParseContentDispositionHeader($request);
    // @TODO: change this hardcode to config.
    $destination = 'azblob://file-specific';

    // Check the destination file path is writable.
    if (!$this->fileSystem->prepareDirectory($destination, FileSystemInterface::CREATE_DIRECTORY)) {
      return new ModifiedResourceResponse([
        'message' => 'Destination file path is not writable',
        'status' => 500,
      ], 500);
    }

    $validators['file_validate_extensions'][0] = 'jpg jpeg png';
    $prepared_filename = $this->prepareFilename($filename, $validators);

    // Create the file.
    $file_uri = "{$destination}/{$prepared_filename}";

    $temp_file_path = $this->streamUploadData($request);

    $file_uri = $this->fileSystem->getDestinationFilename($file_uri, FileSystemInterface::EXISTS_RENAME);

    // Lock based on the prepared file URI.
    $lock_id = $this->generateLockIdFromFileUri($file_uri);

    if (!$this->lock->acquire($lock_id)) {
      return new ModifiedResourceResponse([
        'message' => sprintf('File "%s" is already locked for writing'),
        'status' => 503,
      ], 503);
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
    // Move the file to the correct location after validation. Use
    // FileSystemInterface::EXISTS_ERROR as the file location has already been
    // determined above in FileSystem::getDestinationFilename().
    try {
      $this->fileSystem->move($temp_file_path, $file_uri, FileSystemInterface::EXISTS_ERROR);
    }
    catch (FileException $e) {
      throw new HttpException(500, 'Temporary file could not be moved to file location');
    }

    $file->save();

    $this->lock->release($lock_id);

    // 201 Created responses return the newly created entity in the response
    // body. These responses are not cacheable, so we add no cacheability
    // metadata here.
    $data = [
      'id' => $file->id(),
      'url' => file_create_url($file->getFileUri()),
      'file_name' => $file->getFilename(),
    ];

    return new ModifiedResourceResponse([
      'data' => $data,
      'message' => 'created',
      'status' => 201,
    ], 201);
  }

}
