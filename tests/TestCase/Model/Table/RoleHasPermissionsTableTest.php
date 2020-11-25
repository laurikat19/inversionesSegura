<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleHasPermissionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleHasPermissionsTable Test Case
 */
class RoleHasPermissionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleHasPermissionsTable
     */
    protected $RoleHasPermissions;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RoleHasPermissions',
        'app.Permissions',
        'app.Roles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RoleHasPermissions') ? [] : ['className' => RoleHasPermissionsTable::class];
        $this->RoleHasPermissions = $this->getTableLocator()->get('RoleHasPermissions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RoleHasPermissions);

        parent::tearDown();
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
