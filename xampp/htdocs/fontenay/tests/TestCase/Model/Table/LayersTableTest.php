<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LayersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LayersTable Test Case
 */
class LayersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LayersTable
     */
    public $Layers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.layers',
        'app.highlights',
        'app.events',
        'app.events_highlights',
        'app.highlights_layers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Layers') ? [] : ['className' => 'App\Model\Table\LayersTable'];
        $this->Layers = TableRegistry::get('Layers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Layers);

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
