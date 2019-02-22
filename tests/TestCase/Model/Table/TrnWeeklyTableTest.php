<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrnWeeklyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrnWeeklyTable Test Case
 */
class TrnWeeklyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrnWeeklyTable
     */
    public $TrnWeekly;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trn_weekly',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TrnWeekly') ? [] : ['className' => TrnWeeklyTable::class];
        $this->TrnWeekly = TableRegistry::getTableLocator()->get('TrnWeekly', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrnWeekly);

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
