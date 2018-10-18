<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotebooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotebooksTable Test Case
 */
class NotebooksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NotebooksTable
     */
    public $Notebooks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.notebooks',
        'app.characters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Notebooks') ? [] : ['className' => NotebooksTable::class];
        $this->Notebooks = TableRegistry::getTableLocator()->get('Notebooks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Notebooks);

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
