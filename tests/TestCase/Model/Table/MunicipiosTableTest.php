<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MunicipiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MunicipiosTable Test Case
 */
class MunicipiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MunicipiosTable
     */
    protected $Municipios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Municipios',
        'app.Departamentos',
        'app.Sucursales',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Municipios') ? [] : ['className' => MunicipiosTable::class];
        $this->Municipios = $this->getTableLocator()->get('Municipios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Municipios);

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
