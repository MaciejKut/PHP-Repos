<?php

$array = [4, 2, 5, 4, 5, 6, 2, -1, 0, 45, 3, 8];

function bubbleSort($array) {

    $l = count($array);

    for ($i = 0; $i < $l; $i++) {

        for ($j = 0; $j < $l; $j++) {

            if ($array[$i] < $array[$j]) {
                $tmp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }
    return $array;
}

var_dump(bubbleSort($array));


