<?php

App::uses('BanchaPaginatorComponent', 'Bancha.Controller/Component');

class CustomizedBanchaPaginatorComponent extends BanchaPaginatorComponent {
	/**
	 * Handles automatic pagination of model records.
	 *
	 * The BanchaPaginatorComponents extends the default
	 * behavior by supporting remote filtering on Bancha
	 * requests if the $allowedFilters property allows it.
	 *
	 * @param mixed $object Model to paginate (e.g: model instance, or 'Model', or 'Model.InnerModel')
	 * @param mixed $scope Additional find conditions to use while paginating
	 * @param array $whitelist List of allowed fields for ordering.  This allows you to prevent ordering
	 *   on non-indexed, or undesirable columns.
	 * @return array Model query results
	 * @throws MissingModelException
	 * @throws BanchaException
	 */
	public function paginate($object = null, $scope = array(), $whitelist = array()) {
		
		// bancha-specific access-restriction logic
		if(isset($this->Controller->request->params['isBancha']) && $this->Controller->request->params['isBancha']) {
			// this is a Bancha request, apply the allowed filters
			$this->whitelist[] = 'conditions';
			
			// filter given conditions-array and apply it to our pagination
			$remoteConditions = $this->sanitizeFilterConditions($this->allowedFilters, $this->Controller->request->named['conditions']);
			$scope = array_merge($remoteConditions, $scope);
		}
		
		return parent::paginate($object, $scope, $whitelist);
	}
	
	/**
	 * This functions loops through all filter conditions and check if the are valid
	 * according to the {@link allowedFilter} property.
	 *
	 * @param  Array|String $allowedFilters the $allowedFilters configuration for this pagination request
	 * @param  Array $conditions the given remote filter conditions to santisize
	 * @throws BanchaException
	 * @return Array the allowed filter conditions
	 */
	private function sanitizeFilterConditions($allowedFilters, $conditions) {
		if($allowedFilters == 'all') {
			return $conditions;
		}
		
		// check each condition and filter unalloweds out
		if($allowedFilters == 'associations') {
			// check each condition individualy
			foreach($conditions as $field=>$value) {
				list($modelName, $fieldName) = explode('.', $field);
				
				// look though all associations if we can find the field name as foreign key
				$model = $this->Controller->{$modelName};
				$assocs = $model->Behaviors->BanchaRemotable->getAssociated($model); // use the Bancha-specific method to get the foreign keys
				$valid = false;
				foreach($assocs as $assoc) {
					if($assoc['foreignKey'] == $fieldName || (isset($assoc['associationForeignKey']) && $assoc['associationForeignKey'] == $fieldName)) {
						$valid = true; // this is a valid association key
						break;
					}
				}
				
				if(!$valid) {
					if(Configure::read('debug') == 2) {
						throw new BanchaException('The last ExtJS/Sencha Touch request tried to filter the by '.$field.', which is not allowed according to the '.$this->Controller->name.' BanchaPaginatorComponent::allowedFilters configuration.');
					} else {
						// we are not in debug mode where we want to throw an exception, so just ignore this filtering
						unset($conditions[$field]);
					}
				}
			}
			return $conditions;
		}
		
		// allowedFilters is an array
		// check each condition individually
		foreach($conditions as $field=>$value) {
			if(!in_array($field, $allowedFilters)) {
				if(Configure::read('debug') == 2) {
					throw new BanchaException('The last ExtJS/Sencha Touch request tried to filter the by '.$field.', which is not allowed according to the '.$this->Controller->name.' BanchaPaginatorComponent::allowedFilters configuration.');
				} else {
					// we are not in debug mode where we want to throw an exception, so just ignore this filtering
					unset($conditions[$field]);
				}
			}
		}
		
		return $conditions;
	}
}
