<?php

namespace src;

class Math
{
    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }
}

$math = new Math();
$sum = $math->sum(10, 5);
echo $sum."\n";
