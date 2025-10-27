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
   * Tests that functional javascript tests can run.
   */
  public function testTrivial(): void {
    // Create a simple node to have a valid page to visit.
    // This ensures WebDriver session is properly initialized.
    $this->drupalCreateContentType(['type' => 'page']);
    $node = $this->drupalCreateNode();

    // Visit the node to initialize WebDriver with a valid domain/cookie context.
    $this->drupalGet($node->toUrl());

    $this->assertEquals('trivial', strtolower('TRIVIAL'));
  }

}
