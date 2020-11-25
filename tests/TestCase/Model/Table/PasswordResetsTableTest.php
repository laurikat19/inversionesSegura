<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PasswordResetsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PasswordResetsTable Test Case
 */
class PasswordResetsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PasswordResetsTable
     */
    protected $PasswordResets;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PasswordResets',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PasswordResets') ? [] : ['className' => PasswordResetsTable::class];
        $this->PasswordResets = $this->getTableLocator()->get('PasswordResets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PasswordResets);

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
