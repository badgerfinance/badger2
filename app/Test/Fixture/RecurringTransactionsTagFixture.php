<?php
/**
 * RecurringTransactionsTagFixture
 *
 */
class RecurringTransactionsTagFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'recurring_transaction_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'tag_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'indexes' => array(
			'recurring_transaction_id' => array('column' => array('recurring_transaction_id', 'tag_id'), 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'recurring_transaction_id' => 1,
			'tag_id' => 1
		),
	);

}
