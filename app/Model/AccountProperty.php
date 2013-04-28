<?php
App::uses('AppModel', 'Model');
/**
 * AccountProperty Model
 *
 * @property Account $Account
 */
class AccountProperty extends AppModel {
	public $actsAs = array(
		'Bancha.BanchaRemotable' => array(
			'className' => 'CustomizedBanchaRemotable'
		),
		'BanchaRemotable' => array(
			'className' => 'CustomizedBanchaRemotable'
		)
	);
	
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'account_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'key' => array(
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
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
