<?php

namespace Drupal\community_post\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\community_post\Entity\CommunityPostInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class CommunityPostController.
 *
 *  Returns responses for Community post routes.
 */
class CommunityPostController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * The date formatter.
   *
   * @var \Drupal\Core\Datetime\DateFormatter
   */
  protected $dateFormatter;

  /**
   * The renderer.
   *
   * @var \Drupal\Core\Render\Renderer
   */
  protected $renderer;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    $instance = parent::create($container);
    $instance->dateFormatter = $container->get('date.formatter');
    $instance->renderer = $container->get('renderer');
    return $instance;
  }

  /**
   * Displays a Community post revision.
   *
   * @param int $community_post_revision
   *   The Community post revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($community_post_revision) {
    $community_post = $this->entityTypeManager()->getStorage('community_post')
      ->loadRevision($community_post_revision);
    $view_builder = $this->entityTypeManager()->getViewBuilder('community_post');

    return $view_builder->view($community_post);
  }

  /**
   * Page title callback for a Community post revision.
   *
   * @param int $community_post_revision
   *   The Community post revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($community_post_revision) {
    $community_post = $this->entityTypeManager()->getStorage('community_post')
      ->loadRevision($community_post_revision);
    return $this->t('Revision of %title from %date', [
      '%title' => $community_post->label(),
      '%date' => $this->dateFormatter->format($community_post->getRevisionCreationTime()),
    ]);
  }

  /**
   * Generates an overview table of older revisions of a Community post.
   *
   * @param \Drupal\community_post\Entity\CommunityPostInterface $community_post
   *   A Community post object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(CommunityPostInterface $community_post) {
    $account = $this->currentUser();
    $community_post_storage = $this->entityTypeManager()->getStorage('community_post');

    $langcode = $community_post->language()->getId();
    $langname = $community_post->language()->getName();
    $languages = $community_post->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $community_post->label()]) : $this->t('Revisions for %title', ['%title' => $community_post->label()]);

    $header = [$this->t('Revision'), $this->t('Operations')];
    $revert_permission = (($account->hasPermission("revert all community post revisions") || $account->hasPermission('administer community post entities')));
    $delete_permission = (($account->hasPermission("delete all community post revisions") || $account->hasPermission('administer community post entities')));

    $rows = [];

    $vids = $community_post_storage->revisionIds($community_post);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\community_post\CommunityPostInterface $revision */
      $revision = $community_post_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = $this->dateFormatter->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $community_post->getRevisionId()) {
          $link = $this->l($date, new Url('entity.community_post.revision', [
            'community_post' => $community_post->id(),
            'community_post_revision' => $vid,
          ]));
        }
        else {
          $link = $community_post->link($date);
        }

        $row = [];
        $column = [
          'data' => [
            '#type' => 'inline_template',
            '#template' => '{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}',
            '#context' => [
              'date' => $link,
              'username' => $this->renderer->renderPlain($username),
              'message' => [
                '#markup' => $revision->getRevisionLogMessage(),
                '#allowed_tags' => Xss::getHtmlTagList(),
              ],
            ],
          ],
        ];
        $row[] = $column;

        if ($latest_revision) {
          $row[] = [
            'data' => [
              '#prefix' => '<em>',
              '#markup' => $this->t('Current revision'),
              '#suffix' => '</em>',
            ],
          ];
          foreach ($row as &$current) {
            $current['class'] = ['revision-current'];
          }
          $latest_revision = FALSE;
        }
        else {
          $links = [];
          if ($revert_permission) {
            $links['revert'] = [
              'title' => $this->t('Revert'),
              'url' => $has_translations ?
              Url::fromRoute('entity.community_post.translation_revert', [
                'community_post' => $community_post->id(),
                'community_post_revision' => $vid,
                'langcode' => $langcode,
              ]) :
              Url::fromRoute('entity.community_post.revision_revert', [
                'community_post' => $community_post->id(),
                'community_post_revision' => $vid,
              ]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.community_post.revision_delete', [
                'community_post' => $community_post->id(),
                'community_post_revision' => $vid,
              ]),
            ];
          }

          $row[] = [
            'data' => [
              '#type' => 'operations',
              '#links' => $links,
            ],
          ];
        }

        $rows[] = $row;
      }
    }

    $build['community_post_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
