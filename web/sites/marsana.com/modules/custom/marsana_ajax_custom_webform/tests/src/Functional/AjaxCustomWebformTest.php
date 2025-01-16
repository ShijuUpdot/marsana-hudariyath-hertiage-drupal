<?php

namespace Drupal\Tests\ajax_custom_webform\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests that the Webforms get submitted by ajax with required messages output.
 *
 * @group ajax_custom_webform
 */
class AjaxCustomWebformTest extends BrowserTestBase {

    /**
     * {@inheritdoc}
     */
    public static $modules = ['webform','ajax_custom_webform'];

    /**
     * {@inheritdoc}
     */
    public function setUp() {
        parent::setUp();
    }

    /**
     * Tests that the reaction rule listing page works.
     */
    public function testUninstallReinstall() {
        $module_installer = $this->container->get('module_installer');
        $module_installer->uninstall(['ajax_custom_webform']);
        $module_installer->install(['ajax_custom_webform']);

        $moduleHandler = \Drupal::service('module_handler');
        $this->assertTrue($moduleHandler->moduleExists('ajax_custom_webform'));

        $this->drupalGet('/webform/contact');
        $this->assertSession()->responseContains('Contact');
        $page = $this->getSession()->getPage();
        
        $element = $page->find('css', '.namefm');
        $this->assertTrue($element);
        $element = $page->find('css', '.namefe');
        $this->assertTrue($element);
        $element = $page->find('css', '.emailfm');
        $this->assertTrue($element);
        $element = $page->find('css', '.emailfe');
        $this->assertTrue($element);
//        $this->getSession()->getPage()->pressButton('Send message');
//        $this->assertSession()->pageTextContains('Your Name field is required.');
    }

}
