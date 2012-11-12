<?php
App::uses('AppController', 'Controller');
/**
 * ChildTagsParentTags Controller
 *
 * @property ChildTagsParentTag $ChildTagsParentTag
 */
class ChildTagsParentTagsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ChildTagsParentTag->recursive = 0;
		$childTagsParentTags = $this->paginate();
		$this->set('childTagsParentTags', $childTagsParentTags);

		// provide a return value for Bancha requests
		return array_merge($this->request['paging']['ChildTagsParentTag'],
			array('records'=>$childTagsParentTags));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ChildTagsParentTag->id = $id;
		if (!$this->ChildTagsParentTag->exists()) {
			throw new NotFoundException(__('Invalid child tags parent tag'));
		}
		$this->set('childTagsParentTag', $this->ChildTagsParentTag->read(null, $id));

		// provide a return value for Bancha requests
		return $this->ChildTagsParentTag->data;
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ChildTagsParentTag->create();
			if ($this->ChildTagsParentTag->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->ChildTagsParentTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The child tags parent tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->ChildTagsParentTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The child tags parent tag could not be saved. Please, try again.'));
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
		$this->ChildTagsParentTag->id = $id;
		if (!$this->ChildTagsParentTag->exists()) {
			throw new NotFoundException(__('Invalid child tags parent tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ChildTagsParentTag->save($this->request->data)) {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->ChildTagsParentTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The child tags parent tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {

				// provide a return value for Bancha requests
				// never use SessionComponent::setFlash() in Bancha requests
				if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
					return $this->ChildTagsParentTag->getLastSaveResult();
				}

				$this->Session->setFlash(__('The child tags parent tag could not be saved. Please, try again.'));
			}
		} else {
			// Bancha will never do this request, so no return needed here
			$this->request->data = $this->ChildTagsParentTag->read(null, $id);
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
		$this->ChildTagsParentTag->id = $id;
		if (!$this->ChildTagsParentTag->exists()) {
			throw new NotFoundException(__('Invalid child tags parent tag'));
		}
		if ($this->ChildTagsParentTag->delete()) {

			// provide a return value for Bancha requests
			// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
			if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
				return $this->ChildTagsParentTag->getLastSaveResult();
			}

			$this->Session->setFlash(__('Child tags parent tag deleted'));
			$this->redirect(array('action' => 'index'));
		}

		// provide a return value for Bancha requests
		// never use SessionComponent::setFlash() or Controller::redirect() in Bancha requests
		if(isset($this->request->params['isBancha']) && $this->request->params['isBancha']) {
			return $this->ChildTagsParentTag->getLastSaveResult();
		}

		$this->Session->setFlash(__('Child tags parent tag was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
