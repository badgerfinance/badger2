<?php
App::uses('AccountProperty', 'Model');

/**
 * AccountProperty Test Case
 *
 */
class AccountPropertyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.account_property',
		'app.account',
		'app.currency',
		'app.recurring_transaction',
		'app.transaction',
		'app.tag',
		'app.accounts_tag',
		'app.recurring_transactions_tag',
		'app.tags_transaction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccountProperty = ClassRegistry::init('AccountProperty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccountProperty);

		parent::tearDown();
	}

}
