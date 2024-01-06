<?php

function linearSearch($haystack,$needle,$typeIntensive = false): int
{
    foreach ($haystack as $key => $hay){
        if ($typeIntensive && $hay === $needle){
            return $key;
        }
    }
    return false;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo linearSearch($array,"2");