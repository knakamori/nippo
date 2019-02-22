<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MstRankTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MstRankTable Test Case
 */
class MstRankTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MstRankTable
     */
    public $MstRank;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mst_rank'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MstRank') ? [] : ['className' => MstRankTable::class];
        $this->MstRank = TableRegistry::getTableLocator()->get('MstRank', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MstRank);

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
}
