<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Registrants Controller
 *
 * @property App\Model\Table\RegistrantsTable $Registrants
 */
class RegistrantsController extends AppController {

/**
 *
**/
	public function form(){

		$this->layout = 'onecoin';
		$registrant = $this->Registrants->newEntity($this->request->data);
		if ($this->request->is('post')) {

			if ($this->Registrants->save($registrant)) {
				$this->Flash->success('The registrant has been saved.');
				return $this->redirect(['action' => 'form']);
			} else {
				$this->Flash->error('The registrant could not be saved. Please, try again.');
			}

		}
		$this->set(compact('registrant'));

	}

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('registrants', $this->paginate($this->Registrants));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$registrant = $this->Registrants->get($id, [
			'contain' => []
		]);
		$this->set('registrant', $registrant);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$registrant = $this->Registrants->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Registrants->save($registrant)) {
				$this->Flash->success('The registrant has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The registrant could not be saved. Please, try again.');
			}
		}
		$this->set(compact('registrant'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$registrant = $this->Registrants->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$registrant = $this->Registrants->patchEntity($registrant, $this->request->data);
			if ($this->Registrants->save($registrant)) {
				$this->Flash->success('The registrant has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The registrant could not be saved. Please, try again.');
			}
		}
		$this->set(compact('registrant'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$registrant = $this->Registrants->get($id);
		$this->request->allowMethod(['post', 'delete']);
		if ($this->Registrants->delete($registrant)) {
			$this->Flash->success('The registrant has been deleted.');
		} else {
			$this->Flash->error('The registrant could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}

}
