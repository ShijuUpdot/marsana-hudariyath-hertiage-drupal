<?php

namespace Drupal\report_issue_and_help\Plugin\rest\resource;

use Drupal\Core\File\Exception\FileException;
use Drupal\Core\File\FileSystemInterface;
use Drupal\file\Entity\File;
use Drupal\file\Plugin\rest\resource\FileUploadResource;
use Drupal\rest\ModifiedResourceResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * FileUpload.
 *
 * @RestResource(
 *   id = "file_upload_report_issue",
 *   label = @Translation("Report issue file upload"),
 *   serialization_class = "Drupal\file\Entity\File",
 *   uri_paths = {
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/report-issue/upload-file"
 *   }
 * )
 */
class ReportIssuePhotoUpload extends FileUploadResource {

  /**
   * Responds to entity POST requests.
   *
   * @return \Drupal\rest\ModifiedResourceResponse|\Symfony\Component\HttpFoundation\JsonResponse
   *   Drupal\rest\ModifiedResourceResponse.
   *
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  public function post(Request $request, $entity_type_id = NULL, $bundle = NULL, $field_name = NULL) {
    $filename = $this->validateAndParseContentDispositionHeader($request);
    $destination = 'private://report-issue';
    // Check the destination file path is writable.
    if (!$this->fileSystem->prepareDirectory($destination, FileSystemInterface::CREATE_DIRECTORY)) {
      return new ModifiedResourceResponse([
        'message' => 'Destination file path is not writable',
        'status' => 500,
      ], 500);
    }
    $validators = [];
    $validators['file_validate_size'] = [0 => 5242880.0];
    $validators['file_validate_extensions'] = [0 => 'jpg jpeg png'];
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
    // $file->setOwnerId($this->currentUser->id());
    $file->setFilename($prepared_filename);
    $file->setMimeType($this->mimeTypeGuesser->guess($prepared_filename));
    $file->setFileUri($file_uri);
    // Set the size. This is done in File::preSave() but we validate the file
    // before it is saved.
    $file->setSize(@filesize($temp_file_path));
    $file->setPermanent();

    //$this->validate($file, $validators);
    try {
       $this->fileSystem->move($temp_file_path, $file_uri, FileSystemInterface::EXISTS_RENAME);
    }
    catch (FileException $e) {
      throw new HttpException(500, 'Temporary file could not be moved to file location');
    }
    $file->save();
    //dump($file->isTemporary());

    $this->lock->release($lock_id);

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
