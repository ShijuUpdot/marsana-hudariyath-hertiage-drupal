<?php

namespace Drupal\hudayriyat_social_feeds\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\ClientInterface;
use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityTypeManagerInterface;

ini_set('allow_url_fopen', 1);

/**
 * Controller for Fetch Social Feed Controller.
 */
class FetchSocialFeedController extends ControllerBase {

  /**
   * The config service.
   *
   * @var Symfony\Component\DependencyInjection\ContainerInterface
   */
  protected $config;
  /**
   * The httpclient service.
   *
   * @var GuzzleHttp\ClientInterface
   */
  protected $httpClient;
  /**
   * The entity service.
   *
   * @var Drupal\Core\Entity\Query\QueryFactory
   */
  protected $entityQuery;
  /**
   * The entity type manager service.
   *
   * @var Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * Creates a Configuration.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory.
   * @param \GuzzleHttp\ClientInterface $http_client
   *   The http client.
   * @param \Drupal\Core\Entity\Query\QueryFactory $entityQuery
   *   The entity query.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager service.
   */
  public function __construct(ConfigFactoryInterface $config_factory, ClientInterface $http_client, EntityTypeManagerInterface $entity_type_manager) {
    $this->config = $config_factory;
    $this->httpClient = $http_client;
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
            $container->get('config.factory'),
            $container->get('http_client'),
            $container->get('entity_type.manager')
    );
  }

  /**
   * Gets instagram feeds.
   */
  public function instagramContent() {
    $data = [];
    $socialFeedsSettings = $this->config->get('hudayriyat_social_feeds.settings');
    $instaramHashTagName = $socialFeedsSettings->get('instagram_hashtag');
    $instagramToken = $socialFeedsSettings->get('instagram_access_token');
    //$instaramContentModarationStatus = $socialFeedsSettings->get('content_modaration_enable_status') ? $socialFeedsSettings->get('content_modaration_enable_status') : 1;
    $instaramContentModarationStatus = 1;

    if (!empty($instagramToken)) {
      $executionStartTime = microtime(TRUE);
      $mediaUrl = "https://graph.instagram.com/me/media?fields=id,media_type,permalink,thumbnail_url,media_url,username,timestamp&access_token=".$instagramToken;
      	  
	    $data = $this->callApiReq('get', $mediaUrl);
      
	    $instafeeds = json_decode($data, TRUE);
      $executionEndTime = microtime(TRUE);
      $seconds = $executionEndTime - $executionStartTime;
      if(!isset($instafeeds)) {
        return [
          '#markup' => 'Could not fetch data from Instagram.. Please try after some time...',
        ];
      }
    } else {
      return [
        '#markup' => 'Invalid Hash Tag.. Please provide valid Hash Tag...',
      ];
    }

    $this->getLogger('Hudayriyat Social Feeds')->notice("Data Fetch Time " . number_format($seconds, 2) . " Seconds");

    $hudayriyatusername = $instafeeds['data'][0]['username'];

    if ($instaramHashTagName == $hudayriyatusername) {
      $getInstrmRecentMediaDatas = $instafeeds['data'];

      if (count($getInstrmRecentMediaDatas) > 0) {
        $k = 1;
        $mediaUrl = '';
        foreach ($getInstrmRecentMediaDatas as $key=>$getInstrmRecentMediaData) {
          if($key > 8) break;
          if ($getInstrmRecentMediaData['media_type']) { //} == 'GraphVideo') {
            if ($k == 1) {
              $singleRecordExecutionStartTime = microtime(TRUE);
            }
            $sourceId = $getInstrmRecentMediaData['id'];
            $mediaType = $getInstrmRecentMediaData['media_type'];
            $likes = '';
            $commentsCount = '';
            $display_url = $getInstrmRecentMediaData['media_url'];
            if($mediaType == 'VIDEO') {
              $display_url = $getInstrmRecentMediaData['thumbnail_url'];
            }
            $shortcode = '';
            $link = $getInstrmRecentMediaData['permalink'];
            $createdTime = date("Y-m-d");
            $nodes = $this->entityTypeManager->getStorage('node')->loadByProperties(['field_source_id' => $sourceId]);
            $nodeObj = reset($nodes);
            $nodeId = 0;
            if ($nodeObj !== FALSE) {
              $nodeId = $nodeObj->id();
            }
            if (empty($nodeId)) {
              $node = Node::create(['type' => 'social_feeds']);
              $node->set('status', $instaramContentModarationStatus);
            }
            else {
              $node_storage = $this->entityTypeManager->getStorage('node');
              $node = $node_storage->load($nodeId);
            }

            /*if (isset($getInstrmRecentMediaData['media_url']) && !empty($getInstrmRecentMediaData['media_url'])) {
              $mediaUrl = $getInstrmRecentMediaData['media_url']; 
              $imgdata = $this->callApiReq('get', $mediaUrl);
              $url_info = parse_url($mediaUrl);
              $url_path_info = pathinfo($url_info['path']);

              $imgtype = $url_path_info['extension'];
              $filpath = 'public://' . date("Y-m") . '-social-post-media/';
              $text = $getInstrmRecentMediaData['edge_media_to_caption']['edges'][0]['node']['text'];
              $title_tag = "hudayriyat Properties Instagram"; //trim(strip_tags(substr($text, 0, 60)));
              if ($imgtype) {
                if (file_prepare_directory($filpath, FILE_CREATE_DIRECTORY)) {
                  $file = file_save_data($imgdata, $filpath . time() . rand(100, 10000) . '.' . $imgtype, FILE_EXISTS_REPLACE);
                  $node->set('field_social_post_image', [
                    'target_id' => $file->id(),
                    'alt' => $title_tag . '...',
                    'title' => $title_tag . '...',
                  ]);
                }
                else {
                  $file = file_save_data($imgdata, $filpath . time() . rand(100, 10000) . '.' . $imgtype, FILE_EXISTS_REPLACE);
                  $node->set('field_social_post_image', [
                    'target_id' => $file->id(),
                    'alt' => $title_tag . '...',
                    'title' => $title_tag . '...',
                  ]);
                }
              }
            } */
            $title = 'HudayriyatInstafeed-'.trim($sourceId).'-'.$shortcode;
            $node->set('title', substr($title, 0, 60) . '...');
            $node->set('field_source_id', trim($sourceId));
            $node->set('field_created_date', date('Y-m-d'));
            $node->set('field_social_media_type', strtolower($mediaType));
            $node->set('field_comments_count', trim($commentsCount));
            $node->set('field_likes', trim($likes));
            $node->set('field_hash_tag', $instaramHashTagName);
            $node->set('field_post_url', $link);
            $node->set('field_image_url', $display_url);
            $node->set('body', ['value' => $text, 'format' => 'basic_html']);
            $node->set('uid', 1);
            $node->save();

            if ($k == 1) {
              $singleRecordExecutionEndTime = microtime(TRUE);
              $singleRecordSeconds = $singleRecordExecutionEndTime - $singleRecordExecutionStartTime;
              $this->getLogger('Hudayriyat Social Feeds')->notice("Get single record insertion time " . number_format($singleRecordSeconds, 2) . " Seconds");
            }
            $k++;
          }
        }
      }
    }
    $overAllExecutionEndTime = microtime(TRUE);
    $overAllSeconds = $overAllExecutionEndTime - $overAllExecutionStartTime;
    // Logs a data fetch time.
    $this->getLogger('Hudayriyat Social Feeds')->notice("Get all records (" . count($getInstrmRecentMediaDatas) . ") insertion time " . number_format($overAllSeconds, 2) . " Seconds");
    return [
      '#markup' => 'Data inserted successfully...',
    ];
  }

  /**
   * Delete instagram feeds.
   */
  public function instagramContentDelete() {
    $content_type = "social_feeds";
    $days_to_delete_older_note = strtotime("- 15 days"); // UNIX timestamp for 15 days ago
    $query = \Drupal::entityQuery('node');
    $query->condition('type', $content_type, '=');
    $query->condition('created', $days_to_delete_older_note, '<=');
    $results = $query->execute();
    if( count($results) > 9 ) {
	// now using foreach loop & delete nodes here
    	foreach ($results as $res) {
        $node = Node::load($res);
        $node->delete();

        // also we can store log for deleted entries.
        \Drupal::logger('myModuleName')->info('Deleted notification for node id : ' . $res);
      }
    }
    return [
      '#markup' => 'Data Deleted successfully...',
    ];
  }

  /**
   * Gets instagram feeds.
   */
  public function instagramContent_bkp() {
    $data = [];
    $socialFeedsSettings = $this->config->get('hudayriyat_social_feeds.settings');
    $instaramHashTagName = $socialFeedsSettings->get('instagram_hashtag');
    $instaramContentModarationStatus = $socialFeedsSettings->get('content_modaration_enable_status') ? $socialFeedsSettings->get('content_modaration_enable_status') : 1;

    if (!empty($instaramHashTagName)) {
      $executionStartTime = microtime(TRUE);
      $mediaUrl = "https://www.instagram.com/".$instaramHashTagName."/?__a=1";
      
	  //$data = file_get_contents($mediaUrl);      
	  
	  $data = $this->callApiReq('get', $mediaUrl);
      
	  $instafeeds = json_decode($data, TRUE);

      $executionEndTime = microtime(TRUE);
      $seconds = $executionEndTime - $executionStartTime;
      if(!isset($instafeeds)) {
        return [
          '#markup' => 'Could not fetch data from Instagram.. Please try after some time...',
        ];
      }
    } else {
      return [
        '#markup' => 'Invalid Hash Tag.. Please provide valid Hash Tag...',
      ];
    }

    $this->getLogger('hudayriyat Social Feeds')->notice("Data Fetch Time " . number_format($seconds, 2) . " Seconds");

    $hudayriyatusername = $instafeeds['graphql']['user']['username'];
    if ($instaramHashTagName == $hudayriyatusername) {
      $getInstrmRecentMediaDatas = $instafeeds['graphql']['user']['edge_owner_to_timeline_media']['edges'];

      if (count($getInstrmRecentMediaDatas) > 0) {
        $k = 1;
        $mediaUrl = '';
        $getInstrmRecentMediaReverseOrderData = array_reverse($getInstrmRecentMediaDatas->data, TRUE);
        foreach ($getInstrmRecentMediaDatas as $key=>$getInstrmRecentMediaData) {
          if($key > 5) break;
          $getInstrmRecentMediaData = $getInstrmRecentMediaData['node'];
          if ($getInstrmRecentMediaData['__typename']) { //} == 'GraphVideo') {
            if ($k == 1) {
              $singleRecordExecutionStartTime = microtime(TRUE);
            }
            $sourceId = $getInstrmRecentMediaData['id'];
            $mediaType = $getInstrmRecentMediaData['__typename'];
            $likes = $getInstrmRecentMediaData['edge_liked_by']['count'];
            $commentsCount = $getInstrmRecentMediaData['edge_media_to_comment']['count'];
            $display_url = $getInstrmRecentMediaData['display_url'];
            $shortcode = $getInstrmRecentMediaData['shortcode'];
            $link = "https://www.instagram.com/p/".$shortcode;
            $createdTime = date("Y-m-d");
            $nodes = $this->entityTypeManager->getStorage('node')->loadByProperties(['field_source_id' => $sourceId]);
            $nodeObj = reset($nodes);
            $nodeId = 0;
            if ($nodeObj !== FALSE) {
              $nodeId = $nodeObj->id();
            }
            if (empty($nodeId)) {
              $node = Node::create(['type' => 'social_feeds']);
              $node->set('status', $instaramContentModarationStatus);
            }
            else {
              $node_storage = $this->entityTypeManager->getStorage('node');
              $node = $node_storage->load($nodeId);
            }

            if (isset($getInstrmRecentMediaData['display_url']) && !empty($getInstrmRecentMediaData['display_url'])) {
              $mediaUrl = $getInstrmRecentMediaData['display_url']; 
              $imgdata = $this->callApiReq('get', $mediaUrl);
			  //$imgdata = file_get_contents($mediaUrl);
              $url_info = parse_url($mediaUrl);
              $url_path_info = pathinfo($url_info['path']);

              $imgtype = $url_path_info['extension'];
              $filpath = 'public://' . date("Y-m") . '-social-post-media/';
              $text = $getInstrmRecentMediaData['edge_media_to_caption']['edges'][0]['node']['text'];
              $title_tag = "hudayriyat Properties Instagram"; //trim(strip_tags(substr($text, 0, 60)));
              if ($imgtype) {
                if (file_prepare_directory($filpath, FILE_CREATE_DIRECTORY)) {
                  $file = file_save_data($imgdata, $filpath . time() . rand(100, 10000) . '.' . $imgtype, FILE_EXISTS_REPLACE);
                  $node->set('field_social_post_image', [
                    'target_id' => $file->id(),
                    'alt' => $title_tag . '...',
                    'title' => $title_tag . '...',
                  ]);
                }
                else {
                  $file = file_save_data($imgdata, $filpath . time() . rand(100, 10000) . '.' . $imgtype, FILE_EXISTS_REPLACE);
                  $node->set('field_social_post_image', [
                    'target_id' => $file->id(),
                    'alt' => $title_tag . '...',
                    'title' => $title_tag . '...',
                  ]);
                }
              }
            }
            $title = 'HudayriyatInstafeed-'.trim($sourceId).'-'.$shortcode;
            $node->set('title', substr($title, 0, 60) . '...');
            $node->set('field_source_id', trim($sourceId));
            $node->set('field_created_date', date('Y-m-d'));
            $node->set('field_social_media_type', strtolower($mediaType));
            $node->set('field_comments_count', trim($commentsCount));
            $node->set('field_likes', trim($likes));
            $node->set('field_hash_tag', $instaramHashTagName);
            $node->set('field_post_url', $link);
            $node->set('field_image_url', $display_url);
            $node->set('body', ['value' => $text, 'format' => 'basic_html']);
            $node->set('uid', 1);
            $node->save();

            if ($k == 1) {
              $singleRecordExecutionEndTime = microtime(TRUE);
              $singleRecordSeconds = $singleRecordExecutionEndTime - $singleRecordExecutionStartTime;
              $this->getLogger('Hudayriyat Social Feeds')->notice("Get single record insertion time " . number_format($singleRecordSeconds, 2) . " Seconds");
            }
            $k++;
          }
        }
      }
    }
    $overAllExecutionEndTime = microtime(TRUE);
    $overAllSeconds = $overAllExecutionEndTime - $overAllExecutionStartTime;
    // Logs a data fetch time.
    $this->getLogger('Hudayriyat Social Feeds')->notice("Get all records (" . count($getInstrmRecentMediaDatas) . ") insertion time " . number_format($overAllSeconds, 2) . " Seconds");
    return [
      '#markup' => 'Data inserted successfully...',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function callApiReq($typ, $req) {
    $response = '';
    $client = $this->httpClient;
    
    if ($typ == 'get') {
      try {
        //$request = $client->get($req, ['timeout' => 600] );
		//echo $req;
		$request = $client->request($typ, $req, [
													'version' => 1.0,
													'timeout' => 600, 
													'verify' => false, 
													'curl' => [ CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => 2 ]
												]);
        $response = $request->getBody();
		//echo $req; print_r($response); echo 'hereeee'; exit;
      }
      catch (RequestException $e) {
        $this->getLogger('HudayriyatSocialFeeds')->notice($e->getMessage());
      }
    }
    return $response;
  }

}
