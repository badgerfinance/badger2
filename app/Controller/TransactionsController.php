<?php
App::uses('AppController', 'Controller');
/**
 * Transactions Controller
 *
 * @property Transaction $Transaction
 */
class TransactionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Transaction->recursive = 0;
		$transactions = $this->paginate();
		$this->set('transactions', $transactions);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['Transaction'],
			array('records'=>$transactions));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Transaction->id = $id;
		if (!$this->Transaction->exists()) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		$this->set('transaction', $this->Transaction->read(null, $id));

		// provide a return value for Bancha requests
		return $this->Transaction->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transaction->create();
			if ($this->Transaction->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Transaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The transaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Transaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->Transaction->Account->find('list');
		$recurringTransactions = $this->Transaction->RecurringTransaction->find('list');
		$transferalSources = $this->Transaction->TransferalSource->find('list');
		$transferalTargets = $this->Transaction->TransferalTarget->find('list');
		$tags = $this->Transaction->Tag->find('list');
		$this->set(compact('accounts', 'recurringTransactions', 'transferalSources', 'transferalTargets', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Transaction->id = $id;
		if (!$this->Transaction->exists()) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Transaction->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Transaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The transaction has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Transaction->getLastSaveResult();
				}

				$this->Session->setFlash(__('The transaction could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->Transaction->read(null, $id);
		}
		$accounts = $this->Transaction->Account->find('list');
		$recurringTransactions = $this->Transaction->RecurringTransaction->find('list');
		$transferalSources = $this->Transaction->TransferalSource->find('list');
		$transferalTargets = $this->Transaction->TransferalTarget->find('list');
		$tags = $this->Transaction->Tag->find('list');
		$this->set(compact('accounts', 'recurringTransactions', 'transferalSources', 'transferalTargets', 'tags'));
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
		$this->Transaction->id = $id;
		if (!$this->Transaction->exists()) {
			throw new NotFoundException(__('Invalid transaction'));
		}
		if ($this->Transaction->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->Transaction->getLastSaveResult();
			}

			$this->Session->setFlash(__('Transaction deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->Transaction->getLastSaveResult();
		}

		$this->Session->setFlash(__('Transaction was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
