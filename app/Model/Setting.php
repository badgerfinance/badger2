<?php
App::uses('AppModel', 'Model');
/**
 * Setting Model
 *
 */
class Setting extends AppModel {
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
		'level' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
}
