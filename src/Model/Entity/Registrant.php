<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registrant Entity.
 */
class Registrant extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'name' => true,
		'email' => true,
		'comment' => true,
	];

}
