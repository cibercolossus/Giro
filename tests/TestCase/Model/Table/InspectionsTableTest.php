<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InspectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InspectionsTable Test Case
 */
class InspectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InspectionsTable
     */
    public $Inspections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inspections',
        'app.clients',
        'app.results'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Inspections') ? [] : ['className' => InspectionsTable::class];
        $this->Inspections = TableRegistry::getTableLocator()->get('Inspections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inspections);

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
