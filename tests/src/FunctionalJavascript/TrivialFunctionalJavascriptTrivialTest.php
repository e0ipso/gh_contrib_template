<?php

declare(strict_types=1);

namespace Drupal\Tests\gh_contrib_template\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;

/**
 * Trivial functional javascript test to ensure JS test infrastructure works.
 *
 * @group gh_contrib_template
 */
#[RunTestsInSeparateProcesses]
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
   * Tests that functional javascript tests can run.
   */
  public function testTrivial(): void {
    // Visit the front page to initialize the WebDriver session properly.
    $this->drupalGet('<front>');
    // Verify the page loaded successfully.
    $this->assertSession()->statusCodeEquals(200);
    // Trivial assertion to verify test infrastructure.
    $this->assertEquals('trivial', strtolower('TRIVIAL'));
  }

}
