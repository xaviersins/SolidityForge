<?php
/**
 * Tests for SolidityForge
 */

use PHPUnit\Framework\TestCase;
use Solidityforge\Solidityforge;

class SolidityforgeTest extends TestCase {
    private Solidityforge $instance;

    protected function setUp(): void {
        $this->instance = new Solidityforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
