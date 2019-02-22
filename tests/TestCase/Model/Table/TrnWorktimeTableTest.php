<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrnWorktimeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrnWorktimeTable Test Case
 */
class TrnWorktimeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrnWorktimeTable
     */
    public $TrnWorktime;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trn_worktime',
        'app.reports',
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
        $config = TableRegistry::getTableLocator()->exists('TrnWorktime') ? [] : ['className' => TrnWorktimeTable::class];
        $this->TrnWorktime = TableRegistry::getTableLocator()->get('TrnWorktime', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrnWorktime);

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
