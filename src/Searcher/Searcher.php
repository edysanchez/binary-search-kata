<?php
namespace Searcher;

class Searcher
{

    public static function binarySearch($array, $value)
    {
        if ($array[0]=='') {
            return false;
        }
        $max=sizeof($array)-1;
        $mid = intval($max/2);

        if ($array[$mid] == $value) {
            return true;
        } else if ($array[$mid]<$value) {
            if($array[$max] == $value) {
                return true;
            } else {
                return $array[$mid+1];
            }
        } else if ($array[$mid]>$value) {
            if($array[0] == $value) {
                return true;
            } else {
                return $array[$mid-1];
            }
        }
    }
}
