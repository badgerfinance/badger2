<?php
App::uses('AppController', 'Controller');
/**
 * AccountsTags Controller
 *
 * @property AccountsTag $AccountsTag
 */
class AccountsTagsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccountsTag->recursive = 0;
		$accountsTags = $this->paginate();
		$this->set('accountsTags', $accountsTags);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['AccountsTag'],
			array('records'=>$accountsTags));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AccountsTag->id = $id;
		if (!$this->AccountsTag->exists()) {
			throw new NotFoundException(__('Invalid accounts tag'));
		}
		$this->set('accountsTag', $this->AccountsTag->read(null, $id));

		// provide a return value for Bancha requests
		return $this->AccountsTag->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountsTag->create();
			if ($this->AccountsTag->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->AccountsTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The accounts tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->AccountsTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The accounts tag could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AccountsTag->id = $id;
		if (!$this->AccountsTag->exists()) {
			throw new NotFoundException(__('Invalid accounts tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountsTag->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->AccountsTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The accounts tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->AccountsTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The accounts tag could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->AccountsTag->read(null, $id);
		}
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
		$this->AccountsTag->id = $id;
		if (!$this->AccountsTag->exists()) {
			throw new NotFoundException(__('Invalid accounts tag'));
		}
		if ($this->AccountsTag->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->AccountsTag->getLastSaveResult();
			}

			$this->Session->setFlash(__('Accounts tag deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->AccountsTag->getLastSaveResult();
		}

		$this->Session->setFlash(__('Accounts tag was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
