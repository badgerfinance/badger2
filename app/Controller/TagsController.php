<?php
App::uses('AppController', 'Controller');
/**
 * Tags Controller
 *
 * @property Tag $Tag
 */
class TagsController extends AppController {
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->Paginator->setAllowedFilters(array('title'));
		
		$this->Tag->recursive = 0;
		$tags = $this->paginate();
		$this->set('tags', $tags);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['Tag'],
			array('records'=>$tags));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		$this->set('tag', $this->Tag->read(null, $id));

		// provide a return value for Bancha requests
		return $this->Tag->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tag->create();
			if ($this->Tag->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Tag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Tag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->Tag->Account->find('list');
		$recurringTransactions = $this->Tag->RecurringTransaction->find('list');
		$transactions = $this->Tag->Transaction->find('list');
		$parents = $this->Tag->Parent->find('list');
		$children = $this->Tag->Child->find('list');
		$this->set(compact('accounts', 'recurringTransactions', 'transactions', 'parents', 'children'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tag->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Tag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->Tag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->Tag->read(null, $id);
		}
		$accounts = $this->Tag->Account->find('list');
		$recurringTransactions = $this->Tag->RecurringTransaction->find('list');
		$transactions = $this->Tag->Transaction->find('list');
		$parents = $this->Tag->Parent->find('list', array('conditions' => array('Parent.id !=' => $this->Tag->id)));
		$children = $this->Tag->Child->find('list', array('conditions' => array('Child.id !=' => $this->Tag->id)));
		$this->set(compact('accounts', 'recurringTransactions', 'transactions', 'parents', 'children'));
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
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Invalid tag'));
		}
		if ($this->Tag->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->Tag->getLastSaveResult();
			}

			$this->Session->setFlash(__('Tag deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->Tag->getLastSaveResult();
		}

		$this->Session->setFlash(__('Tag was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
