<?php

declare(strict_types=1);

namespace Drupal\Tests\gh_contrib_template\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Trivial functional javascript test to ensure JS test infrastructure works.
 *
 * @group gh_contrib_template
 */
class TrivialFunctionalJavascriptTrivialTest extends WebDriverTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['gh_contrib_template'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function tearDown(): void {
    // Visit a blank page before tearDown to avoid sessionStorage errors.
    // WebDriverTestBase tries to clear sessionStorage in tearDown(), which
    // fails if no page was ever visited during the test.
    try {
      $this->drupalGet('');
    }
    catch (\Exception $e) {
      // If even this fails, continue with tearDown anyway.
    }
    parent::tearDown();
  }

  /**
   * Tests that functional javascript tests can run.
   */
  public function testTrivial(): void {
    $this->assertEquals('trivial', strtolower('TRIVIAL'));
  }

}
