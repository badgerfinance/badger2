<?php
App::uses('Account', 'Model');

/**
 * Account Test Case
 *
 */
class AccountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.account',
		'app.currency',
		'app.account_property',
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
		$this->Account = ClassRegistry::init('Account');
	}
	
	public function testIt() {
		$accounts = $this->Account->find('all');
		
		
		parent::assertEqual(count($accounts), 3);
				
		$expected = array(
			'AccountA' => '43.00',
			'AccountB' => '-1000000.00',
			'AccountC' => '0.00'
		);

		$actual = array();
		foreach($accounts as $account) {
			$actual[$account['Account']['title']] = $account['Account']['currentAmount'];
		}
		parent::assertEqual($actual, $expected);
		
// 		$accountA = new Account();
// 		$accountA->create();
// 		$accountA->set($accountAData);
// 		$accountA->save(	);
// 		$this->Account->read($accountA['Account']['id']);
// 		assert($this-Account->)
// 		assert($accountA !== null);
// 		$tmp = $this->Account->find('first', 'currentAmount');
// 		parent::assertEqual($accountA, new Account());
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Account);

		parent::tearDown();
	}

}
