<?php
App::uses('AppModel', 'Model');
/**
 * Transaction Model
 *
 * @property Account $Account
 * @property RecurringTransaction $RecurringTransaction
 * @property Recurring $Recurring
 * @property NsactionsTag $NsactionsTag
 * @property Tag $Tag
 */
class Transaction extends AppModel {
	public $actsAs = array(
		'Bancha.BanchaRemotable' => array(
			'className' => 'CustomizedBanchaRemotable'
		),
		'BanchaRemotable' => array(
			'className' => 'CustomizedBanchaRemotable'
		)
	);
		
	public $virtualFields = array(
		'counter_transaction_id' => '0'
	);
	
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
		),
		'RecurringTransaction' => array(
			'className' => 'RecurringTransaction',
			'foreignKey' => 'recurring_transaction_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TransferalSource' => array(
			'className' => 'Transaction',
			'foreignKey' => 'transferal_target_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TransferalTarget' => array(
			'className' => 'Transaction',
			'foreignKey' => 'transferal_source_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasAndBelongsToMany = array(
		'Tag' => array(
			'className' => 'Tag',
			'joinTable' => 'tags_transactions',
			'foreignKey' => 'transaction_id',
			'associationForeignKey' => 'tag_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => '',
			'with' => 'TagsTransaction'
		)
	);
	
	public function afterFind($results, $primary=false) {
		foreach ($results as $key => $result) {
			$otherId = null;
			
			if (isset($result['Transaction']) && isset($result['Transaction']['id'])) {
				$transaction = $result['Transaction'];
				if (isset($transaction['transferal_source_id']) && isset($transaction['transferal_target_id'])) {
					if ($transaction['transferal_source_id'] !== $transaction['id']) {
						$otherId = $transaction['transferal_source_id'];
					} else if ($transaction['transferal_target_id'] !== $transaction['id']) {
						$otherId = $transaction['transferal_target_id'];
					}
				}
				
				if ($otherId !== null) {
					$results[$key]['Transaction']['counter_transaction_id'] = $otherId;
				}
			}
		}
		
		return $results;
	}
}
