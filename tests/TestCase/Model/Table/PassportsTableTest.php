<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PassportsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PassportsTable Test Case
 */
class PassportsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PassportsTable
     */
    public $Passports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.passports',
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
        $config = TableRegistry::getTableLocator()->exists('Passports') ? [] : ['className' => PassportsTable::class];
        $this->Passports = TableRegistry::getTableLocator()->get('Passports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Passports);

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
