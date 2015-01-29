<?php
namespace Searcher;

class Searcher
{

    public static function binarySearch($array, $value)
    {
        $mid = intval(sizeof($array)/2);

        if ($array[$mid] === $value) {
            return true;
        }
        if ($array[$mid]>$value) {
            return $array[0] === $value;
        }
    }
}
