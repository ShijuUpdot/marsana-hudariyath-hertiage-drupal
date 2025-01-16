<?php

namespace Drupal\Tests\ajax_custom_webform\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Tests that the Webforms get submitted by ajax with required messages output.
 *
 * @group ajax_custom_webform
 */
class AjaxCustomWebformJavaScriptTest extends WebDriverTestBase {

    /**
     * {@inheritdoc}
     */
    public static $modules = ['webform', 'ajax_custom_webform'];

    /**
     * {@inheritdoc}
     */
    public function setUp() {
        parent::setUp();
    }

    /**
     * Tests that the contact us webform.
     */
    public function testFomInterface() {
        $this->getSession()->getPage()->findLink('Contact Us')->click();

        $this->getSession()->getPage()->pressButton('OK, I agree');
        $this->assertSession()->waitForElementVisible('css', '#edit-actions-submit', 10);
        $this->getSession()->getPage()->fillField('phone', '123');
        $this->getSession()->getPage()->findButton('Send Enquiry')->click();
//        $this->drupalGet('/webform/contact');
//        $this->assertSession()->responseContains('Contact');
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
//        $this->getSession()->getPage()->pressButton('Send Enquiry');
        $assert_session = $this->assertSession();
        $assert_session->waitForElement('css', '.has-error');
        $this->assertTrue($element);
        $assert_session->responseContains('Your Name field is required.');

//        $this->getSession()->getPage()->fillField('field_phone[0][value]', '123');
//        $this->getSession()->getPage()->find('css', '#edit-actions-submit')->click();
        $assert_session->responseContains('Please enter valid Phone Number. Ex:+919900000000.');
    }

}
