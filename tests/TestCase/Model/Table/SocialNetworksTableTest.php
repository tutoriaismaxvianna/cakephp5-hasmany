<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocialNetworksTable;
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
     * @var array<string>
     */
    protected array $fixtures = [
        'app.SocialNetworks',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SocialNetworks') ? [] : ['className' => SocialNetworksTable::class];
        $this->SocialNetworks = $this->getTableLocator()->get('SocialNetworks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SocialNetworks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SocialNetworksTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SocialNetworksTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
