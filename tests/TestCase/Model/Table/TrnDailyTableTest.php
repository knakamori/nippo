<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrnDailyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrnDailyTable Test Case
 */
class TrnDailyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrnDailyTable
     */
    public $TrnDaily;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trn_daily',
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
        $config = TableRegistry::getTableLocator()->exists('TrnDaily') ? [] : ['className' => TrnDailyTable::class];
        $this->TrnDaily = TableRegistry::getTableLocator()->get('TrnDaily', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrnDaily);

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
