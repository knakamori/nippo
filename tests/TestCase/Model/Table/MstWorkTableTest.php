<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MstWorkTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MstWorkTable Test Case
 */
class MstWorkTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MstWorkTable
     */
    public $MstWork;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mst_work'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MstWork') ? [] : ['className' => MstWorkTable::class];
        $this->MstWork = TableRegistry::getTableLocator()->get('MstWork', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MstWork);

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
