<?php

namespace ignateva;

use core\core\LogAbstract;
use core\core\LogInterface;
include 'core\core\LogAbstract.php';
include 'core\core\LogInterface.php';

class MyLog extends LogAbstract implements LogInterface
{
    public function _write()
    {
        foreach ($this->log as $mass) {
            echo $mass;
        }

        $d = new \DateTime();
        $date = $d->format('d.m.Y_H.i.s.ms');
        $logFile = "log/$date.log";

        if (!file_exists("log")) {
            mkdir("log");
        }
        file_put_contents($logFile, implode("\n", $this->log));
    }

    public static function log(string $str): void
    {
        self::Instance()->log[] = $str;
    }

    public static function write(): void
    {
        self::Instance()->_write();
    }
}