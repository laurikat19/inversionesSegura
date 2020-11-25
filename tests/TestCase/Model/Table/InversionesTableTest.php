<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InversionesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InversionesTable Test Case
 */
class InversionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InversionesTable
     */
    protected $Inversiones;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Inversiones',
        'app.Users',
        'app.Servicios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Inversiones') ? [] : ['className' => InversionesTable::class];
        $this->Inversiones = $this->getTableLocator()->get('Inversiones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Inversiones);

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
