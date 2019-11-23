<?php

namespace Tests\Leetcode\TwoSum;

use Exception;
use Kkame\Leetcode\TwoSum\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    /**
     * @dataProvider data
     * @param array $problem
     * @param int $target
     * @param array $answer
     */
    public function testSolution(array $problem, int $target, array $answer)
    {
        $solution = new Solution();

        $result = $solution->twoSum($problem, $target);

        $this->assertEquals($result, $answer);
    }

    public function data()
    {
        return [
            [
                [2, 7, 11, 15],
                9,
                [0, 1],
            ],
            [
                [3, 3],
                6,
                [0, 1],
            ],
            [
                [3, 2, 3],
                6,
                [0, 2],
            ],
            [
                [3, 2, 4],
                6,
                [1, 2],
            ],
        ];
    }

}
