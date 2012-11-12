<?php
App::uses('AppController', 'Controller');
/**
 * RecurringTransactions Controller
 *
 * @property RecurringTransaction $RecurringTransaction
 */
class RecurringTransactionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecurringTransaction->recursive = 0;
		$recurringTransactions = $this->paginate();
		$this->set('recurringTransactions', $recurringTransactions);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['RecurringTransaction'],
			array('records'=>$recurringTransactions));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RecurringTransaction->id = $id;
		if (!$this->RecurringTransaction->exists()) {
			throw new NotFoundException(__('Invalid recurring transaction'));
		}
		$this->set('recurringTransaction', $this->RecurringTransaction->read(null, $id));

		// provide a return value for Bancha requests
		return $this->RecurringTransaction->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecurringTransaction->create();
			if ($this->RecurringTransaction->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->RecurringTransaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The recurring transaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->RecurringTransaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The recurring transaction could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->RecurringTransaction->Account->find('list');
		$tags = $this->RecurringTransaction->Tag->find('list');
		$this->set(compact('accounts', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->RecurringTransaction->id = $id;
		if (!$this->RecurringTransaction->exists()) {
			throw new NotFoundException(__('Invalid recurring transaction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecurringTransaction->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->RecurringTransaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The recurring transaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->RecurringTransaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The recurring transaction could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->RecurringTransaction->read(null, $id);
		}
		$accounts = $this->RecurringTransaction->Account->find('list');
		$tags = $this->RecurringTransaction->Tag->find('list');
		$this->set(compact('accounts', 'tags'));
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
		$this->RecurringTransaction->id = $id;
		if (!$this->RecurringTransaction->exists()) {
			throw new NotFoundException(__('Invalid recurring transaction'));
		}
		if ($this->RecurringTransaction->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->RecurringTransaction->getLastSaveResult();
			}

			$this->Session->setFlash(__('Recurring transaction deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->RecurringTransaction->getLastSaveResult();
		}

		$this->Session->setFlash(__('Recurring transaction was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
