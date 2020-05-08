<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PodcastsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PodcastsTable Test Case
 */
class PodcastsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PodcastsTable
     */
    protected $Podcasts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Podcasts',
        'app.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Podcasts') ? [] : ['className' => PodcastsTable::class];
        $this->Podcasts = TableRegistry::getTableLocator()->get('Podcasts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Podcasts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
