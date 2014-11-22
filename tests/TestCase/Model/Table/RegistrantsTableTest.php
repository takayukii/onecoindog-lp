<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use App\Model\Table\RegistrantsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrantsTable Test Case
 */
class RegistrantsTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'Registrants' => 'app.registrants'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Registrants') ? [] : ['className' => 'App\Model\Table\RegistrantsTable'];

		$this->Registrants = TableRegistry::get('Registrants', $config);

	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Registrants);

		parent::tearDown();
	}

/**
 * Test initialize method
 *
 * @return void
 */
	public function testInitialize() {
		$this->markTestIncomplete('Not implemented yet.');
	}

/**
 * Test validationDefault method
 *
 * @return void
 */
	public function testValidationDefault() {
		$this->markTestIncomplete('Not implemented yet.');
	}

}
