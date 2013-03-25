<?php
App::uses('AppModel', 'Model');
/**
 * Account Model
 *
 * @property Currency $Currency
 * @property AccountProperty $AccountProperty
 * @property RecurringTransaction $RecurringTransaction
 * @property Transaction $Transaction
 * @property Tag $Tag
 */
class Account extends AppModel {
    public $actsAs = array("Bancha.BanchaRemotable");
    
    public $virtualFields = array(
//     		'currentAmount' => "
//     			SELECT SUM(t.amount) FROM transactions AS t WHERE \$__cakeID__\$ = t.account_id 
//     		"
    		'currentAmount' => 0
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
		'currency_id' => array(
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
		'Currency' => array(
			'className' => 'Currency',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AccountProperty' => array(
			'className' => 'AccountProperty',
			'foreignKey' => 'account_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'RecurringTransaction' => array(
			'className' => 'RecurringTransaction',
			'foreignKey' => 'account_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'account_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
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
			'joinTable' => 'accounts_tags',
			'foreignKey' => 'account_id',
			'associationForeignKey' => 'tag_id',
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
	
	public function afterFind($results, $primary=false) {
		$ids = array();
		$sums = array();
		
		foreach ($results as $key => $result) {
			$id = $result['Account']['id'];
			$ids[] = $id;
			$sums[$id] = '0.00';
		}
		
		$transactionSums = $this->Transaction->find('all', array(
			'fields'	 => 	array(
				'account_id',
				'SUM(Transaction.amount) AS currentAmount'
			),
			'conditions' => array(
				'Transaction.account_id' => $ids,
				'Transaction.valuta_date <=' => date('Y-m-d')
			),
			'group' => array(
				'Transaction.account_id'
			)
		));
		
		foreach($transactionSums as $transactionSum) {
			$sums[$transactionSum['Transaction']['account_id']] = $transactionSum[0]['currentAmount'];
		}
		
		foreach($results as $key => $result) {
			$currentAmount = $sums[$result['Account']['id']];
			
			$results[$key]['Account']['currentAmount'] = $currentAmount;
		}
		
		return $results;
	}
}
