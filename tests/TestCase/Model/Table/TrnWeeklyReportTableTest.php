<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrnWeeklyReportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrnWeeklyReportTable Test Case
 */
class TrnWeeklyReportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrnWeeklyReportTable
     */
    public $TrnWeeklyReport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trn_weekly_report',
        'app.weeklies',
        'app.reports'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TrnWeeklyReport') ? [] : ['className' => TrnWeeklyReportTable::class];
        $this->TrnWeeklyReport = TableRegistry::getTableLocator()->get('TrnWeeklyReport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrnWeeklyReport);

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
