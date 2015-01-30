<?php
namespace Searcher;

class Searcher
{

    public static function binarySearch($array, $value)
    {
        $mid = intval(sizeof($array)/2);
        $max=sizeof($array)-1;
        $min=0;
        if ($array[$mid] === $value) {
            return true;
        }
        if ($array[$mid]>$value) {
            return $array[$min] === $value;
        } else {
            return $array[$max] === $value;
        }
    }
}
