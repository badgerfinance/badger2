<?php
/**
 * TransactionFixture
 *
 */
class TransactionFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Transaction', 'records' => true);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'title' => 'B1',
			'description' => '',
			'account_id' => '2',
			'valuta_date' => '2012-01-01 00:00:00',
			'amount' => '-1000000.00',
			'recurring_transaction_id' => '0',
			'transaction_partner' => '',
			'transferal_source_id' => '0',
			'transferal_target_id' => '0',
			'parser_text' => ''
		),
		array(
			'id' => '7',
			'title' => 'B2',
			'description' => '',
			'account_id' => '2',
			'valuta_date' => '2112-01-01 00:00:00',
			'amount' => '10000.00',
			'recurring_transaction_id' => '0',
			'transaction_partner' => '',
			'transferal_source_id' => '0',
			'transferal_target_id' => '0',
			'parser_text' => ''
		),
			array(
			'id' => '2',
			'title' => 'A5',
			'description' => '',
			'account_id' => '3',
			'valuta_date' => '2011-12-30 00:00:00',
			'amount' => '11.00',
			'recurring_transaction_id' => '0',
			'transaction_partner' => '',
			'transferal_source_id' => '0',
			'transferal_target_id' => '0',
			'parser_text' => ''
		),
		array(
			'id' => '3',
			'title' => 'A4',
			'description' => '',
			'account_id' => '3',
			'valuta_date' => '2012-01-01 00:00:00',
			'amount' => '7.00',
			'recurring_transaction_id' => '0',
			'transaction_partner' => '',
			'transferal_source_id' => '0',
			'transferal_target_id' => '0',
			'parser_text' => ''
		),
		array(
			'id' => '4',
			'title' => 'A3',
			'description' => '',
			'account_id' => '3',
			'valuta_date' => '2100-01-01 00:00:00',
			'amount' => '10000.00',
			'recurring_transaction_id' => '0',
			'transaction_partner' => '',
			'transferal_source_id' => '0',
			'transferal_target_id' => '0',
			'parser_text' => ''
		),
		array(
			'id' => '5',
			'title' => 'A2',
			'description' => '',
			'account_id' => '3',
			'valuta_date' => '2012-01-01 00:00:00',
			'amount' => '15.00',
			'recurring_transaction_id' => '0',
			'transaction_partner' => '',
			'transferal_source_id' => '0',
			'transferal_target_id' => '0',
			'parser_text' => ''
		),
		array(
			'id' => '6',
			'title' => 'A1',
			'description' => '',
			'account_id' => '3',
			'valuta_date' => '2001-01-01 00:00:00',
			'amount' => '10.00',
			'recurring_transaction_id' => '0',
			'transaction_partner' => '',
			'transferal_source_id' => '0',
			'transferal_target_id' => '0',
			'parser_text' => ''
		),
	);

}
