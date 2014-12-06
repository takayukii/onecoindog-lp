<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registrants Model
 */
class RegistrantsTable extends Table {

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('registrants');
		$this->displayField('name');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->allowEmpty('name')
			->add('email', 'valid', ['rule' => 'email', 'message' => '有効なメールアドレスをご登録ください'])
			->requirePresence('email', 'create')
			->notEmpty('email')
			->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => '登録済のメールアドレスです'])
			->allowEmpty('comment');

		return $validator;
	}

}
