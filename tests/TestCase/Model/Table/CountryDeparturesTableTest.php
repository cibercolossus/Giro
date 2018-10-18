<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CountryDeparturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CountryDeparturesTable Test Case
 */
class CountryDeparturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CountryDeparturesTable
     */
    public $CountryDepartures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.country_departures',
        'app.personal_information'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CountryDepartures') ? [] : ['className' => CountryDeparturesTable::class];
        $this->CountryDepartures = TableRegistry::getTableLocator()->get('CountryDepartures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CountryDepartures);

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
