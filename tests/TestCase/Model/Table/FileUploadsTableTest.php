<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FileUploadsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FileUploadsTable Test Case
 */
class FileUploadsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FileUploadsTable
     */
    protected $FileUploads;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.FileUploads',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FileUploads') ? [] : ['className' => FileUploadsTable::class];
        $this->FileUploads = $this->getTableLocator()->get('FileUploads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->FileUploads);

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
