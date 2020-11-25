<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelHasPermissionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelHasPermissionsTable Test Case
 */
class ModelHasPermissionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelHasPermissionsTable
     */
    protected $ModelHasPermissions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ModelHasPermissions',
        'app.Permissions',
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
        $config = $this->getTableLocator()->exists('ModelHasPermissions') ? [] : ['className' => ModelHasPermissionsTable::class];
        $this->ModelHasPermissions = $this->getTableLocator()->get('ModelHasPermissions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ModelHasPermissions);

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
