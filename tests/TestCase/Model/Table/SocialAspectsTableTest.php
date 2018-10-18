<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialAspectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialAspectsTable Test Case
 */
class SocialAspectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialAspectsTable
     */
    public $SocialAspects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.social_aspects',
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
        $config = TableRegistry::getTableLocator()->exists('SocialAspects') ? [] : ['className' => SocialAspectsTable::class];
        $this->SocialAspects = TableRegistry::getTableLocator()->get('SocialAspects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SocialAspects);

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
