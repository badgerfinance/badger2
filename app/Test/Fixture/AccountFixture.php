<?php
/**
 * AccountFixture
 *
 */
class AccountFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Account', 'records' => true);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'title' => 'AccountC',
			'description' => '',
			'currency_id' => '0',
			'lower_limit' => '0.00',
			'upper_limit' => '0.00',
			'parser' => ''
		),
		array(
			'id' => '2',
			'title' => 'AccountB',
			'description' => '',
			'currency_id' => '0',
			'lower_limit' => '0.00',
			'upper_limit' => '0.00',
			'parser' => ''
		),
		array(
			'id' => '3',
			'title' => 'AccountA',
			'description' => '',
			'currency_id' => '0',
			'lower_limit' => '0.00',
			'upper_limit' => '0.00',
			'parser' => ''
		),
	);

}
