<?php
App::uses('AppController', 'Controller');
/**
 * TagsTransactions Controller
 *
 * @property TagsTransaction $TagsTransaction
 */
class TagsTransactionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TagsTransaction->recursive = 0;
		$tagsTransactions = $this->paginate();
		$this->set('tagsTransactions', $tagsTransactions);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['TagsTransaction'],
			array('records'=>$tagsTransactions));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TagsTransaction->id = $id;
		if (!$this->TagsTransaction->exists()) {
			throw new NotFoundException(__('Invalid tags transaction'));
		}
		$this->set('tagsTransaction', $this->TagsTransaction->read(null, $id));

		// provide a return value for Bancha requests
		return $this->TagsTransaction->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TagsTransaction->create();
			if ($this->TagsTransaction->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->TagsTransaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The tags transaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->TagsTransaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The tags transaction could not be saved. Please, try again.'));
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
		$this->TagsTransaction->id = $id;
		if (!$this->TagsTransaction->exists()) {
			throw new NotFoundException(__('Invalid tags transaction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TagsTransaction->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->TagsTransaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The tags transaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->TagsTransaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The tags transaction could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->TagsTransaction->read(null, $id);
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
		$this->TagsTransaction->id = $id;
		if (!$this->TagsTransaction->exists()) {
			throw new NotFoundException(__('Invalid tags transaction'));
		}
		if ($this->TagsTransaction->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->TagsTransaction->getLastSaveResult();
			}

			$this->Session->setFlash(__('Tags transaction deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->TagsTransaction->getLastSaveResult();
		}

		$this->Session->setFlash(__('Tags transaction was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
