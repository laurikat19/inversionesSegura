<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelHasRolesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelHasRolesTable Test Case
 */
class ModelHasRolesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelHasRolesTable
     */
    protected $ModelHasRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ModelHasRoles',
        'app.Roles',
        'app.Models',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ModelHasRoles') ? [] : ['className' => ModelHasRolesTable::class];
        $this->ModelHasRoles = $this->getTableLocator()->get('ModelHasRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ModelHasRoles);

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
