<?php
App::uses('AppModel', 'Model');
/**
 * ChildTagsParentTag Model
 *
 * @property Tag $Child
 * @property Tag $Parent
 */
class ChildTagsParentTag extends AppModel {
	public $actsAs = array(
		'Bancha.BanchaRemotable' => array(
			'className' => 'CustomizedBanchaRemotable'
		),
		'BanchaRemotable' => array(
			'className' => 'CustomizedBanchaRemotable'
		)
	);
	
	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Parent' => array(
			'className' => 'Tag',
			'foreignKey' => 'parent_tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Child' => array(
			'className' => 'Tag',
			'foreignKey' => 'child_tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
