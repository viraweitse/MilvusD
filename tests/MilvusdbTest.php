<?php
/**
 * Tests for MilvusDB
 */

use PHPUnit\Framework\TestCase;
use Milvusdb\Milvusdb;

class MilvusdbTest extends TestCase {
    private Milvusdb $instance;

    protected function setUp(): void {
        $this->instance = new Milvusdb(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Milvusdb::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
