<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Account $Account
 * @property RecurringTransaction $RecurringTransaction
 * @property Transaction $Transaction
 */
class Tag extends AppModel {
    public $actsAs = array("Bancha.BanchaRemotable");

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Account' => array(
			'className' => 'Account',
			'joinTable' => 'accounts_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'account_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'RecurringTransaction' => array(
			'className' => 'RecurringTransaction',
			'joinTable' => 'recurring_transactions_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'recurring_transaction_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Transaction' => array(
			'className' => 'Transaction',
			'joinTable' => 'tags_transactions',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'transaction_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
