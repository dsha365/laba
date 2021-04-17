<?php

use PHPUnit\Framework\TestCase;
use ignateva\Line;
use ignateva\ignatevaException;

class LineTest extends TestCase {
    public function testLine() {
        $result = new Line();

        $this->assertEquals([-2], $result->line(2, 10));
        $this->assertEquals([35], $result->line(2, -70));

        $this->expectException(ignatevaException::class);
        $result->line(0, 2);
    }
}