<?php

$array = [3, 54, 59, 005, 4, 13, 14];

function theGreatest(array $array) {

    $theGreatest = '';

    foreach ($array as $value) {

        if ($theGreatest <= $value) {
            $theGreatest = $value;
        }
    }
    echo "największa liczba w danej tablicy to $theGreatest";
}

theGreatest($array);

function biggestInArray($array) {
    $bigOne = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($bigOne <= $array[$i]) {
            $bigOne = $array[$i];
        }
    }
    echo "Największe jest $bigOne";
}

biggestInArray($array);
