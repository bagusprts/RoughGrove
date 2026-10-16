<?php
/**
 * Tests for RoughGrove
 */

use PHPUnit\Framework\TestCase;
use Roughgrove\Roughgrove;

class RoughgroveTest extends TestCase {
    private Roughgrove $instance;

    protected function setUp(): void {
        $this->instance = new Roughgrove(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Roughgrove::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
