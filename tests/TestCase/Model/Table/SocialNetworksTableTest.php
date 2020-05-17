<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialNetworksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialNetworksTable Test Case
 */
class SocialNetworksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialNetworksTable
     */
    protected $SocialNetworks;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SocialNetworks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SocialNetworks') ? [] : ['className' => SocialNetworksTable::class];
        $this->SocialNetworks = TableRegistry::getTableLocator()->get('SocialNetworks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SocialNetworks);

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
