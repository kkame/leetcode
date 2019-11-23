<?php

namespace Kkame\Leetcode\TwoSum;

use Exception;

/**
 * 각 메서드는 별개의 클래스로 빼고 싶었으나 릿코드 동작 환경을 감안하여 private method로 분리하였습니다
 * Class Solution
 * @package Kkame\Leetcode\TwoNumber
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     * @throws Exception
     */
    public function twoSum($nums, $target): array
    {


        $hashmap = $this->convertHashmapFromIntegers($nums);


        foreach ($nums as $value) {

            $findKey = $target - $value;

            if (false === $this->hasAnswer($findKey, $hashmap)) {
                continue;
            }


            if ($value != $findKey) {
                return [$hashmap[$value][0], $hashmap[$findKey][0]];
            }


            if ($value == $findKey && count($hashmap[$value]) > 1) {
                return [$hashmap[$value][0], $hashmap[$findKey][1]];
            }
        }


        throw new Exception("Not Founded");

    }

    /**
     * @param $nums
     * @return array
     */
    private function convertHashmapFromIntegers($nums): array
    {
        $hashmap = [];
        foreach ($nums as $i => $value) {
            if (empty($hashmap[$value])) {
                $hashmap[$value] = [];
            }

            $hashmap[$value][] = $i;
        }
        return $hashmap;
    }

    /**
     * @param int $findKey
     * @param array $hashmap
     * @return bool
     */
    private function hasAnswer(int $findKey, array $hashmap): bool
    {
        return array_key_exists($findKey, $hashmap);
    }
}
