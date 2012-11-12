<?php
App::uses('AppController', 'Controller');
/**
 * AccountProperties Controller
 *
 * @property AccountProperty $AccountProperty
 */
class AccountPropertiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccountProperty->recursive = 0;
		$accountProperties = $this->paginate();
		$this->set('accountProperties', $accountProperties);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['AccountProperty'],
			array('records'=>$accountProperties));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AccountProperty->id = $id;
		if (!$this->AccountProperty->exists()) {
			throw new NotFoundException(__('Invalid account property'));
		}
		$this->set('accountProperty', $this->AccountProperty->read(null, $id));

		// provide a return value for Bancha requests
		return $this->AccountProperty->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountProperty->create();
			if ($this->AccountProperty->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->AccountProperty->getLastSaveResult();
				}

				$this->Session->setFlash(__('The account property has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->AccountProperty->getLastSaveResult();
				}

				$this->Session->setFlash(__('The account property could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->AccountProperty->Account->find('list');
		$this->set(compact('accounts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AccountProperty->id = $id;
		if (!$this->AccountProperty->exists()) {
			throw new NotFoundException(__('Invalid account property'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountProperty->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->AccountProperty->getLastSaveResult();
				}

				$this->Session->setFlash(__('The account property has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->AccountProperty->getLastSaveResult();
				}

				$this->Session->setFlash(__('The account property could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->AccountProperty->read(null, $id);
		}
		$accounts = $this->AccountProperty->Account->find('list');
		$this->set(compact('accounts'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->AccountProperty->id = $id;
		if (!$this->AccountProperty->exists()) {
			throw new NotFoundException(__('Invalid account property'));
		}
		if ($this->AccountProperty->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->AccountProperty->getLastSaveResult();
			}

			$this->Session->setFlash(__('Account property deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->AccountProperty->getLastSaveResult();
		}

		$this->Session->setFlash(__('Account property was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
