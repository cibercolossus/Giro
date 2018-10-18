<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserVisitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserVisitiesTable Test Case
 */
class UserVisitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserVisitiesTable
     */
    public $UserVisities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_visities',
        'app.users',
        'app.home_visities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserVisities') ? [] : ['className' => UserVisitiesTable::class];
        $this->UserVisities = TableRegistry::getTableLocator()->get('UserVisities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserVisities);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
