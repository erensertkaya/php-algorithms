<?php

function binarySearch($haystack,$needle): int
{
    $high = count($haystack)-1;
    $low = 0;

    while ($low <= $high){
        $mid = floor(($low + $high) / 2);
        if ($haystack[$mid] == $needle){
            return $mid;
        }
        elseif ($haystack[$mid] < $needle){
            $low = $mid+1;
        }
        else{
            $high = $mid-1;
        }
    }

    return false;
}

$sortedArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo binarySearch($sortedArray,9);
