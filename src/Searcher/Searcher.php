<?php
namespace Searcher;

class Searcher
{

    public static function binarySearch($array, $value)
    {
            $mid = intval(sizeof($array)/2);
            return $array[$mid] == $value;
    }
}
