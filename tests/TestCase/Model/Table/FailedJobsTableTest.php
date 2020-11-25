<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FailedJobsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FailedJobsTable Test Case
 */
class FailedJobsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FailedJobsTable
     */
    protected $FailedJobs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.FailedJobs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FailedJobs') ? [] : ['className' => FailedJobsTable::class];
        $this->FailedJobs = $this->getTableLocator()->get('FailedJobs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->FailedJobs);

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
