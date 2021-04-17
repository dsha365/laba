<?php

namespace ignateva;
include 'ignatevaExeption.php';

class Line
{
    protected $X1;

    public function line($a, $b)
    {
        if ($a == 0) {
            throw new ignatevaExeption('The equation does not have exist');
        }
        MyLog::log("This is linear equation\n");
        MyLog::log('Roots: ');
        MyLog::log(-($b / $a));
    }
}