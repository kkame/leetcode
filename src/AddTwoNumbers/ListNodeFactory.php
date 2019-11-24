<?php


namespace Kkame\Leetcode\AddTwoNumbers;


class ListNodeFactory
{
    public static function create($number): ListNode
    {

        $arr = array_map(function ($int) {
            return new ListNode($int);
        }, str_split($number));


        for ($i = 0, $count = count($arr) - 1; $i < $count; $i++) {
            $arr[$i]->next = $arr[$i + 1];
        }

        return $arr[0];

    }

}