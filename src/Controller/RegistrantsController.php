<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;

/**
 * Registrants Controller
 *
 * @property App\Model\Table\RegistrantsTable $Registrants
 */
class RegistrantsController extends AppController {

	public function register(){

		$saved = false;
		$this->layout = 'onecoin';

		$registrant = $this->Registrants->newEntity($this->request->data);
		if ($this->request->is('post')) {

			if ($this->Registrants->save($registrant)) {
				$this->Flash->success('事前登録が完了しました。');
				$saved = true;

				$to = $this->request->data['email'];
$body = <<< EOF
$to 様

この度は「歩いて寄付するお散歩マーケットプレイス ONECOIN」に
事前登録頂き有難うございました。

ご期待に応えられるサービスになるよう鋭意開発して参ります。
リリース時期が近づいて参りましたら率先してお知らせ致します。

もしよろしければこちらのアンケートもご記入よろしくお願いします。
https://xxxxxxx

***************************************************************
歩いて寄付するお散歩マーケットプレイス ONECOIN
https://onecoin-dog.com/
***************************************************************
EOF;

				$email = new Email('default');
				$email->to($to)
					->bcc('takayukii@gmail.com')
					->subject('ONECOINの事前登録ありがとうございました')
					->send($body);

			} else {
				$this->Flash->error('事前登録に失敗しました。フォームの内容を再度ご確認ください。');
			}

		}
		$this->set(compact('registrant', 'saved'));

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
