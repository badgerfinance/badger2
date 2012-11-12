<?php
App::uses('TransactionsController', 'Controller');

/**
 * TransactionsController Test Case
 *
 */
class TransactionsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transaction',
		'app.account',
		'app.currency',
		'app.account_property',
		'app.recurring_transaction',
		'app.tag',
		'app.accounts_tag',
		'app.recurring_transactions_tag',
		'app.tags_transaction',
		'app.child_tags_parent_tag'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
