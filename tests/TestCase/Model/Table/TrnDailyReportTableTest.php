<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrnDailyReportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrnDailyReportTable Test Case
 */
class TrnDailyReportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrnDailyReportTable
     */
    public $TrnDailyReport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trn_daily_report',
        'app.dailies',
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
        $config = TableRegistry::getTableLocator()->exists('TrnDailyReport') ? [] : ['className' => TrnDailyReportTable::class];
        $this->TrnDailyReport = TableRegistry::getTableLocator()->get('TrnDailyReport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrnDailyReport);

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
