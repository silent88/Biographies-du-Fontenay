<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsHighlightsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsHighlightsTable Test Case
 */
class EventsHighlightsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventsHighlightsTable
     */
    public $EventsHighlights;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.events_highlights',
        'app.events',
        'app.highlights',
        'app.layers',
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
        $config = TableRegistry::exists('EventsHighlights') ? [] : ['className' => 'App\Model\Table\EventsHighlightsTable'];
        $this->EventsHighlights = TableRegistry::get('EventsHighlights', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EventsHighlights);

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
