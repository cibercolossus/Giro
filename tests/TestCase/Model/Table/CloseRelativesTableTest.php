<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CloseRelativesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CloseRelativesTable Test Case
 */
class CloseRelativesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CloseRelativesTable
     */
    public $CloseRelatives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.close_relatives',
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
        $config = TableRegistry::getTableLocator()->exists('CloseRelatives') ? [] : ['className' => CloseRelativesTable::class];
        $this->CloseRelatives = TableRegistry::getTableLocator()->get('CloseRelatives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CloseRelatives);

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
