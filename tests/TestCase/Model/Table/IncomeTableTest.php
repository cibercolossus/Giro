<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IncomeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IncomeTable Test Case
 */
class IncomeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IncomeTable
     */
    public $Income;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.income',
        'app.economies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Income') ? [] : ['className' => IncomeTable::class];
        $this->Income = TableRegistry::getTableLocator()->get('Income', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Income);

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
