<?php

namespace Tests\Leetcode\AddTwoNumbers;

use Kkame\Leetcode\AddTwoNumbers\ListNodeFactory;
use Kkame\Leetcode\AddTwoNumbers\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    /**
     * @dataProvider data
     * @param array $problem
     * @param array $target
     * @param array $answer
     */
    public function testSolution(array $problem, array $target, array $answer)
    {
        $solution = new Solution();

        $test = implode("", $problem);
        $result = $solution->addTwoNumbers(
            ListNodeFactory::create($test),
            ListNodeFactory::create(implode("", $target))
        );

        $this->assertEquals($result, ListNodeFactory::create(implode("", $answer)));
    }

    public function data()
    {
        return [
            [
                [2, 4, 3,],
                [5, 6, 4,],
                [7, 0, 8,],
            ],
            [
                [0,],
                [0,],
                [0,],
            ],
            [
                [1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1],
                [5,6,4],
                [6,6,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1],
            ],
        ];
    }

}
