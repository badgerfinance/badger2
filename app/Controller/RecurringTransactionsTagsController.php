<?php
App::uses('AppController', 'Controller');
/**
 * RecurringTransactionsTags Controller
 *
 * @property RecurringTransactionsTag $RecurringTransactionsTag
 */
class RecurringTransactionsTagsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RecurringTransactionsTag->recursive = 0;
		$recurringTransactionsTags = $this->paginate();
		$this->set('recurringTransactionsTags', $recurringTransactionsTags);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['RecurringTransactionsTag'],
			array('records'=>$recurringTransactionsTags));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->RecurringTransactionsTag->id = $id;
		if (!$this->RecurringTransactionsTag->exists()) {
			throw new NotFoundException(__('Invalid recurring transactions tag'));
		}
		$this->set('recurringTransactionsTag', $this->RecurringTransactionsTag->read(null, $id));

		// provide a return value for Bancha requests
		return $this->RecurringTransactionsTag->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecurringTransactionsTag->create();
			if ($this->RecurringTransactionsTag->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->RecurringTransactionsTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The recurring transactions tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->RecurringTransactionsTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The recurring transactions tag could not be saved. Please, try again.'));
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
		$this->RecurringTransactionsTag->id = $id;
		if (!$this->RecurringTransactionsTag->exists()) {
			throw new NotFoundException(__('Invalid recurring transactions tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RecurringTransactionsTag->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->RecurringTransactionsTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The recurring transactions tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->RecurringTransactionsTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The recurring transactions tag could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->RecurringTransactionsTag->read(null, $id);
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
		$this->RecurringTransactionsTag->id = $id;
		if (!$this->RecurringTransactionsTag->exists()) {
			throw new NotFoundException(__('Invalid recurring transactions tag'));
		}
		if ($this->RecurringTransactionsTag->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->RecurringTransactionsTag->getLastSaveResult();
			}

			$this->Session->setFlash(__('Recurring transactions tag deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->RecurringTransactionsTag->getLastSaveResult();
		}

		$this->Session->setFlash(__('Recurring transactions tag was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
