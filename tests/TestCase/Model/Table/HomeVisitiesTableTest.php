<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HomeVisitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HomeVisitiesTable Test Case
 */
class HomeVisitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HomeVisitiesTable
     */
    public $HomeVisities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.home_visities',
        'app.users',
        'app.clients',
        'app.academic_information',
        'app.characters',
        'app.concepts',
        'app.economies',
        'app.families',
        'app.jobs',
        'app.photographies',
        'app.sectors',
        'app.social_aspects',
        'app.user_visities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('HomeVisities') ? [] : ['className' => HomeVisitiesTable::class];
        $this->HomeVisities = TableRegistry::getTableLocator()->get('HomeVisities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HomeVisities);

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
