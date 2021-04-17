<?php

use PHPUnit\Framework\TestCase;
use ignateva\MyLog;

class MyLogTest extends TestCase {
    public function testLog() {
        $this->expectOutputString("Dasha");
        MyLog::log("Dasha");
        MyLog::write();
    }

    public function testInstance() {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}