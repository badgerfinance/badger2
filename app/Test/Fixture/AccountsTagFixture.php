<?php
/**
 * AccountsTagFixture
 *
 */
class AccountsTagFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'account_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'tag_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'indexes' => array(
			'account_id' => array('column' => array('account_id', 'tag_id'), 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
// 	public $records = array(
// 		array(
// 			'account_id' => 1,
// 			'tag_id' => 1
// 		),
// 	);

}
