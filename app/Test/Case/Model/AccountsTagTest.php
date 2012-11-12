<?php
App::uses('AccountsTag', 'Model');

/**
 * AccountsTag Test Case
 *
 */
class AccountsTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accounts_tag',
		'app.account',
		'app.currency',
		'app.account_property',
		'app.recurring_transaction',
		'app.transaction',
		'app.recurring',
		'app.nsactions_tag',
		'app.recurring_transactions_tag',
		'app.tag',
		'app.tags_transaction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccountsTag = ClassRegistry::init('AccountsTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccountsTag);

		parent::tearDown();
	}

}
