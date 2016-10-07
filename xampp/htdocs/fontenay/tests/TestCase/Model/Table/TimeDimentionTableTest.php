<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TimeDimentionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TimeDimentionTable Test Case
 */
class TimeDimentionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TimeDimentionTable
     */
    public $TimeDimention;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.time_dimention'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TimeDimention') ? [] : ['className' => 'App\Model\Table\TimeDimentionTable'];
        $this->TimeDimention = TableRegistry::get('TimeDimention', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TimeDimention);

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
