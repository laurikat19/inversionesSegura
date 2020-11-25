<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MigrationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MigrationsTable Test Case
 */
class MigrationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MigrationsTable
     */
    protected $Migrations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Migrations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Migrations') ? [] : ['className' => MigrationsTable::class];
        $this->Migrations = $this->getTableLocator()->get('Migrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Migrations);

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
}
