<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControlsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControlsTable Test Case
 */
class ControlsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ControlsTable
     */
    public $Controls;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.controls',
        'app.elements',
        'app.answers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Controls') ? [] : ['className' => ControlsTable::class];
        $this->Controls = TableRegistry::getTableLocator()->get('Controls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Controls);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
