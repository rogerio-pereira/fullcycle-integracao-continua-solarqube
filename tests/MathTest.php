<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use src\Math;

class MathTest extends TestCase
{
    public static function sum_provider(): array
    {
        return [
            [10, 10, 20],
            [10, 2, 12],
            [-5, 7, 2],
            [2, -5, -3],
            [5, -5, 0],
        ];
    }

    /**
     * @dataProvider sum_provider
     * @test
     */
    public function test_sum(int $a, int $b, int $result): void
    {
        $math = new Math();
        $r = $math->sum($a, $b);

        $this->assertEquals($result, $r);
    }
}
