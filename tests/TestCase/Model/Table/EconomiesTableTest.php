<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EconomiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EconomiesTable Test Case
 */
class EconomiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EconomiesTable
     */
    public $Economies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.economies',
        'app.home_visities',
        'app.bank_accounts',
        'app.expenses',
        'app.income'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Economies') ? [] : ['className' => EconomiesTable::class];
        $this->Economies = TableRegistry::getTableLocator()->get('Economies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Economies);

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
