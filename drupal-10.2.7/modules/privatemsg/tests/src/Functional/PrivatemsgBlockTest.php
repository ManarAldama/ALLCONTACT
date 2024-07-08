<?php

namespace Drupal\Tests\privatemsg\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests for the privatemsg module.
 *
 * @group privatemsg
 */
class PrivatemsgBlockTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Modules to install.
   *
   * @var array
   */
  protected static $modules = [
    'privatemsg',
  ];

  /**
   * The User used for the test.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  private $user1;

  /**
   * The User used for the test.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  private $user2;

  /**
   * SetUp the test class.
   */
  public function setUp(): void {
    parent::setUp();
    $this->user1 = $this->DrupalCreateUser([
      'privatemsg write messages',
    ]);
    \Drupal::service('user.data')->set('privatemsg', $this->user1->id(), 'enable', 1);
    $this->user2 = $this->DrupalCreateUser([
      'privatemsg write messages',
    ]);
    \Drupal::service('user.data')->set('privatemsg', $this->user2->id(), 'enable', 1);
    $this->drupalPlaceBlock('privatemsg_block');
  }

  /**
   * Tests that the block can be reached.
   */
  public function testBlock() {
    $this->drupalLogin($this->user1);
    $this->drupalGet('/messages/new');
    $this->assertSession()->statusCodeEquals(200);
    $this->submitForm([
      'thread_members' => $this->user2->getDisplayName() . ' (' . $this->user2->id() . ')',
      'message[0][value]' => $this->getRandomGenerator()->sentences(5),
    ], 'Send message', 'privatemsg-message-add-form');
    $this->assertSession()->statusCodeEquals(200);

    $this->drupalLogin($this->user2);
    $this->assertSession()->elementTextContains('css', 'a.privatemsg-block-new-messages-count', 'All messages (1)');
  }

}