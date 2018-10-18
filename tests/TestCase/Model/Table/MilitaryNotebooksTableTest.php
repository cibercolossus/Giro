<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MilitaryNotebooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MilitaryNotebooksTable Test Case
 */
class MilitaryNotebooksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MilitaryNotebooksTable
     */
    public $MilitaryNotebooks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.military_notebooks',
        'app.personal_information'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MilitaryNotebooks') ? [] : ['className' => MilitaryNotebooksTable::class];
        $this->MilitaryNotebooks = TableRegistry::getTableLocator()->get('MilitaryNotebooks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MilitaryNotebooks);

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
