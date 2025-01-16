<?php

namespace Drupal\report_issue_and_help\Plugin\rest\resource;

use Drupal\Component\Serialization\Json;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\taxonomy\Entity\Term;
use Drupal\webform\Entity\WebformSubmission;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides Post PostHelp.
 *
 * @RestResource(
 *   id = "post_help_resource",
 *   label = @Translation("Post Help Resource"),
 *   uri_paths = {
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/help"
 *   }
 * )
 */
class PostHelp extends ResourceBase {

  /**
   * Responds to entity POST requests.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Symfony\Component\HttpFoundation\Request.
   * @param null|string $version
   *   Version.
   * @param null|string $lang
   *   Language.
   *
   * @return \Drupal\rest\ModifiedResourceResponse
   *   Drupal\rest\ModifiedResourceResponse.
   */
  public function post(Request $request, $version = NULL, $lang = NULL) {
    $data = Json::decode($request->getContent());
    $response = [];

    if (empty($data['email'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid email',
        'status' => 400,
      ], 400);
    }
    if (empty($data['mobile'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid mobile',
        'status' => 400,
      ], 400);
    }

    if (empty($data['dial_code'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid dial_code',
        'status' => 400,
      ], 400);
    }
    if (empty($data['content'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid content',
        'status' => 400,
      ], 400);
    }
    $issue_type = Term::load(intval($data['help_topic']));
    if (empty($issue_type)) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid help_topic',
        'status' => 400,
      ], 400);
    }

    try {
      $submission_data = [
        'topic' => $issue_type->id(),
        'dial_code' => $data['dial_code'],
        'content' => $data['content'],
        'mobile' => $data['mobile'],
        'email' => $data['email'],
      ];

      $submission = WebformSubmission::create([
        'webform_id' => 'help',
        'data' => $submission_data,
      ]);
      $submission->save();
      $response['status'] = 201;
      $response['message'] = 'Created';
    }
    catch (\Exception $e) {
      $response['message'] = $e->getMessage();
      $response['status'] = 500;
    }
    return new ModifiedResourceResponse($response, $response['status']);
  }

}
