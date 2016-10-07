<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HighlightsLayersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HighlightsLayersTable Test Case
 */
class HighlightsLayersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HighlightsLayersTable
     */
    public $HighlightsLayers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.highlights_layers',
        'app.layers',
        'app.highlights',
        'app.events',
        'app.events_highlights'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HighlightsLayers') ? [] : ['className' => 'App\Model\Table\HighlightsLayersTable'];
        $this->HighlightsLayers = TableRegistry::get('HighlightsLayers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HighlightsLayers);

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
