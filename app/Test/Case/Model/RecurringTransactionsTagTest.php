<?php
App::uses('RecurringTransactionsTag', 'Model');

/**
 * RecurringTransactionsTag Test Case
 *
 */
class RecurringTransactionsTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recurring_transactions_tag',
		'app.recurring_transaction',
		'app.account',
		'app.currency',
		'app.account_property',
		'app.transaction',
		'app.recurring',
		'app.nsactions_tag',
		'app.tag',
		'app.accounts_tag',
		'app.tags_transaction'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecurringTransactionsTag = ClassRegistry::init('RecurringTransactionsTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecurringTransactionsTag);

		parent::tearDown();
	}

}
