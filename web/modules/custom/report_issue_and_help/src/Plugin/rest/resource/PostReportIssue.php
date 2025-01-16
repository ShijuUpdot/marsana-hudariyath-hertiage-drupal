<?php

namespace Drupal\report_issue_and_help\Plugin\rest\resource;

use Drupal\Component\Serialization\Json;
use Drupal\rest\ModifiedResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\taxonomy\Entity\Term;
use Drupal\webform\Entity\WebformSubmission;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides Post PostReportIssue.
 *
 * @RestResource(
 *   id = "post_report_issue_comment_resource",
 *   label = @Translation("Post Report Issue Resource"),
 *   uri_paths = {
 *     "https://www.drupal.org/link-relations/create" =
 *   "/json-api/{version}/{lang}/report-issue"
 *   }
 * )
 */
class PostReportIssue extends ResourceBase {

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
    if (empty($data['description'])) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid description',
        'status' => 400,
      ], 400);
    }
    $issue_type = Term::load(intval($data['issue_type']));
    if (empty($issue_type)) {
      return ModifiedResourceResponse::create([
        'message' => 'Invalid issue_type',
        'status' => 400,
      ], 400);
    }

    try {
      $submission_data = [
        'issue_type' => $issue_type->id(),
        'issue_content' => $data['description'],
      ];
      if (!empty($data['photo'])) {
        //$files = File::loadMultiple($data['photo']);
        $submission_data['photo'] = $data['photo'];
      }

      $submission = WebformSubmission::create([
        'webform_id' => 'report_issue',
        'data' => $submission_data,
      ]);
      $submission->save();
      try {
        /** @var \Drupal\webform\Entity\Webform $webform */
        $webform = $submission->getWebform();
        /** @var \Drupal\webform\Plugin\WebformHandler\EmailWebformHandler $handler */
        /*$handler = $webform->getHandler('scheduled_email');
        $message = $handler->getMessage($submission);
        $handler->sendMessage($submission, $message);*/
      }
      catch (\Exception $exception) {
        \Drupal::logger('report_issue')->error($exception->getMessage());
      }

      /*$response['data'] = [
        //'id' => $comment->id(),
      ];*/
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
