<?php

namespace Drupal\Tests\instagram_lite\Functional;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Simple test to ensure that main page loads with module enabled.
 *
 * @group instagram_lite
 */
class LoadFrontPageTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = [
    'instagram_lite',
  ];

  /**
   * The default theme to use with the test.
   *
   * @var string
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->drupalLogin($this->drupalCreateUser(['administer site configuration']));
  }

  /**
   * Tests that the home page loads with a 200 response.
   */
  public function testLoadFrontPage() {
    $this->drupalGet(Url::fromRoute('<front>'));
    // Confirm that the page loaded correctly.
    $this->assertSession()->statusCodeEquals(200);
    // Confirm that the front page contains the standard text.
    $this->assertSession()->pageTextContains('Welcome to Drupal');
  }

}
