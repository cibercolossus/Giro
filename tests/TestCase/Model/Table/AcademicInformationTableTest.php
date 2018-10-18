<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcademicInformationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcademicInformationTable Test Case
 */
class AcademicInformationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AcademicInformationTable
     */
    public $AcademicInformation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.academic_information',
        'app.home_visities',
        'app.studies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AcademicInformation') ? [] : ['className' => AcademicInformationTable::class];
        $this->AcademicInformation = TableRegistry::getTableLocator()->get('AcademicInformation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AcademicInformation);

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
