<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MapsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MapsTable Test Case
 */
class MapsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MapsTable
     */
    public $Maps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.maps',
        'app.sectors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Maps') ? [] : ['className' => MapsTable::class];
        $this->Maps = TableRegistry::getTableLocator()->get('Maps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Maps);

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
