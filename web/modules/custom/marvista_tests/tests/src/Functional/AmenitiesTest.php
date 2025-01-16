<?php /** @noinspection ALL */

namespace Drupal\Tests\marvista_tests\Functional;

use Drupal;
use Drupal\Component\Serialization\Json;
use Drupal\Core\Url;

/**
 * Class SignupTest.
 *
 * @package Drupal\Tests\marvista_tests\Functional
 */
class AmenitiesTest extends Drupal\Tests\marvista_tests\ExistingSiteBase {

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();
  }

  public function testCreateNode() {
    $coord = [];
    $coord[] = ['lat' => 10.789260, 'long' => 106.667960];
    $coord[] = ['lat' => 10.799559, 'long' => 106.667589];
    $coord[] = ['lat' => 10.802004, 'long' => 106.675920];
    $coord[] = ['lat' => 10.796506, 'long' => 106.682776];
    $coord[] = ['lat' => 10.785193, 'long' => 106.688590];
    $coord[] = ['lat' => 10.779519, 'long' => 106.666745];
    $coord[] = ['lat' => 10.758606, 'long' => 106.662167];
    /** @var \Drupal\geofield\WktGeneratorInterface $wkt_generator */
    $wkt_generator = \Drupal::service('geofield.wkt_generator');
    for ($i = 0; $i < 6; $i++) {
      $point = $wkt_generator->wktBuildPoint([
        'lon' => $coord[$i]['long'],
        'lat' => $coord[$i]['lat'],
      ]);
      $location_detail = Drupal\paragraphs\Entity\Paragraph::create([
        'type' => 'location_details',
      ]);
      $location_detail->set('field_coordinate', $point);
      $location_detail->save();

      $location = Drupal\paragraphs\Entity\Paragraph::create([
        'type' => 'location',
        'field_location_details' => $location_detail,
        'field_location_title' => $this->getRandomGenerator()->sentences(5),
      ]);
      $location->save();

      $node = Drupal\node\Entity\Node::create(['type' => 'amenities_details']);
      $node->set('title', $this->getRandomGenerator()->sentences(5));
      $node->set('field_location_details', $location);
      $node->save();
    }

    $this->assertTrue(TRUE);
  }

  public function testParse() {
    dump((float) 10.758606);
  }

  public function testRecentSearchEntity() {
    $entity = Drupal\recent_search_log\Entity\RecentSearchEntity::create([
      'content' => ',trả vê theo ngày thôi ông, vs ông cho tui cái limit item field đê tui truyên vào trẻ vê số lương item',
      'user_id' => 1,
    ]);
    $entity->save();
    dump($entity->getContent());
    dump($entity->getOwnerId());
  }

  public function testPostFieldComment() {
    $message = Drupal\message\Entity\Message::load(5);
    dump($message->get('message_channel')->getString());
  }
}
