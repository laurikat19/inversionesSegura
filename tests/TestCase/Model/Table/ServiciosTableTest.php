<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiciosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiciosTable Test Case
 */
class ServiciosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiciosTable
     */
    protected $Servicios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Servicios') ? [] : ['className' => ServiciosTable::class];
        $this->Servicios = $this->getTableLocator()->get('Servicios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Servicios);

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
