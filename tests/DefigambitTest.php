<?php
/**
 * Tests for DefiGambit
 */

use PHPUnit\Framework\TestCase;
use Defigambit\Defigambit;

class DefigambitTest extends TestCase {
    private Defigambit $instance;

    protected function setUp(): void {
        $this->instance = new Defigambit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defigambit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
