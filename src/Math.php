<?php

namespace src;

class Math
{
    public function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    public function sub(int $a, int $b): int
    {
        return $a - $b;
    }

    public function mult(int $a, int $b): int
    {
        return $a * $b;
    }

    public function div(int $a, int $b): int
    {
        return $a / $b;
    }

    public function pow(int $a, int $b): int
    {
        return $a ^ $b;
    }
}
