<?php
App::uses('RecurringTransaction', 'Model');

/**
 * RecurringTransaction Test Case
 *
 */
class RecurringTransactionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recurring_transaction',
		'app.account',
		'app.currency',
		'app.account_property',
		'app.transaction',
		'app.recurring',
		'app.nsactions_tag',
		'app.recurring_transactions_tag',
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
		$this->RecurringTransaction = ClassRegistry::init('RecurringTransaction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecurringTransaction);

		parent::tearDown();
	}

}
