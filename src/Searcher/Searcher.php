<?php
namespace Searcher;

class Searcher
{

    public static function binarySearch($array, $value)
    {
        $mid = intval(sizeof($array)/2);
        $max=sizeof($array)-1;
        $min=0;
        $testValue=$mid;
        if ($value<$array[$mid]) {
            $testValue = $min;
        } elseif ($value>$array[$mid]) {
            $testValue = $max;
        }
        return $array[$testValue] === $value;
    }
}
