<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialnetworksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocialnetworksTable Test Case
 */
class SocialnetworksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SocialnetworksTable
     */
    protected $Socialnetworks;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Socialnetworks',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Socialnetworks') ? [] : ['className' => SocialnetworksTable::class];
        $this->Socialnetworks = TableRegistry::getTableLocator()->get('Socialnetworks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Socialnetworks);

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
