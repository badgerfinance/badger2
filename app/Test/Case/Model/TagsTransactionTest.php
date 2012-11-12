<?php
App::uses('TagsTransaction', 'Model');

/**
 * TagsTransaction Test Case
 *
 */
class TagsTransactionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tags_transaction',
		'app.tag',
		'app.account',
		'app.currency',
		'app.account_property',
		'app.recurring_transaction',
		'app.transaction',
		'app.recurring',
		'app.nsactions_tag',
		'app.recurring_transactions_tag',
		'app.accounts_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TagsTransaction = ClassRegistry::init('TagsTransaction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TagsTransaction);

		parent::tearDown();
	}

}
