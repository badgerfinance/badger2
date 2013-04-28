<?php
App::uses('BanchaRemotableBehavior', 'Bancha.Model/Behavior');

class CustomizedBanchaRemotableBehavior extends BanchaRemotableBehavior {
	
	/**
	 * Return the Associations as ExtJS-Assoc Model
	 * should look like this:
	 * <code>
	 * associations: [
	 *	    {type: 'hasMany',   model: 'Bancha.model.Post',    foreignKey: 'post_id',    name: 'posts',    getterName: 'posts',    setterName: 'setPosts'},
	 *	    {type: 'hasMany',   model: 'Bancha.model.Comment', foreignKey: 'comment_id', name: 'comments', getterName: 'comments', setterName: 'setComments'},
	 *	    {type: 'belongsTo', model: 'Bancha.model.User',    foreignKey: 'user_id',    name: 'user',     getterName: 'getUser',  setterName: 'setUser'}
	 *   ]
	 * </code>
	 *
	 *   (source http://docs.sencha.com/ext-js/4-0/#/api/Ext.data.Model)
	 *
	 *   in cakephp all association types are a property on the model containing a full configuration, like
	 *   <code> Array ( [Article] => Array ( [className] => Article [foreignKey] => user_id [dependent] =>
	 *          [conditions] => [fields] => [order] => [limit] => [offset] => [exclusive] => [finderQuery] =>
	 *          [counterQuery] => ) )</code>
	 *
	 * @param Model $Model instance of model
	 * @return Array An array of ExtJS/Sencha Touch association definitions
	 */
	public function getAssociated(Model $Model) {
		$assocTypes = $Model->associations();
		$assocs = array();
		foreach ($assocTypes as $type) {
			foreach($Model->{$type} as $modelName => $config) {
				if($type != 'hasAndBelongsToMany') { // extjs doesn't support hasAndBelongsToMany
					//generate the name to retrieve associations
					$name = ($type == 'hasMany') ? Inflector::pluralize($modelName) : $modelName;
					
					$assocs[] = array(
							'type' => $type,
							'model' => 'Bancha.model.'.$config['className'],
							'foreignKey' => $config['foreignKey'],
							'getterName' => ($type == 'hasMany') ? lcfirst($name) : 'get'.$name,
							'setterName' => 'set'.$name,
							'name' => lcfirst($name)
					);
				} else {
					$name = Inflector::pluralize($modelName);
					
					$assocs[] = array(
							'type' => 'hasMany',
							'model' => 'Bancha.model.'.$config['with'],
							'foreignKey' => $config['foreignKey'],
							'associationForeignKey' => $config['associationForeignKey'],
							'getterName' => lcfirst($name),
							'setterName' => 'set'.$name,
							'name' => lcfirst($name)
					);
				}
			}
		}
		return $assocs;
	}
	
}
