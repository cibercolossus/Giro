<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonalInformationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonalInformationTable Test Case
 */
class PersonalInformationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonalInformationTable
     */
    public $PersonalInformation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.personal_information',
        'app.home_visities',
        'app.country_departures',
        'app.licenses',
        'app.military_notebooks',
        'app.passports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PersonalInformation') ? [] : ['className' => PersonalInformationTable::class];
        $this->PersonalInformation = TableRegistry::getTableLocator()->get('PersonalInformation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PersonalInformation);

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
