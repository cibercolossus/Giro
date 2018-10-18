<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelativesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelativesTable Test Case
 */
class RelativesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RelativesTable
     */
    public $Relatives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.relatives',
        'app.families'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Relatives') ? [] : ['className' => RelativesTable::class];
        $this->Relatives = TableRegistry::getTableLocator()->get('Relatives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Relatives);

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
