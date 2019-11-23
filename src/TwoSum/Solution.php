<?php

namespace Kkame\Leetcode\TwoSum;

/**
 * Class Solution
 * @package Kkame\Leetcode\TwoSum
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target): array
    {

        $hash = [];

        foreach ($nums as $key => $value) {

            $findKey = $target - $value;

            if (array_key_exists($findKey, $hash)) {
                return [$hash[$findKey], $key];
            }

            $hash[$value] = $key;

        }

    }
}
