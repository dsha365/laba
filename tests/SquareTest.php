<?php

use PHPUnit\Framework\TestCase;
use ignateva\Square;
use ignateva\ignatevaException;

class SquareTest extends TestCase {
    public function testSolve() {
        $result = new Square();

        $this->assertEquals([1, 3.5], $result->solve(2, -9, 7));
        $this->assertEquals([1, -3], $result->solve(1, 2, -3));

        // a = 0
        $this->assertEquals([5], $result->solve(0, 2, -10));

        // one solution
        $this->assertEquals([3.5], $result->solve(-4, 28, -49));

        // no solution
        $this->expectException(ignatevaException::class);
        $result->solve(2, 3, 45);
    }
}