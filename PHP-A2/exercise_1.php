<?php

$array = [2, 34, 5, 6.4, 89, 84, 5, 9, 93, 58];


$var = $array[0];

foreach ($array as $value) {
    if ($value >= $var) {
        $var = $value;
    }
}
echo 'Największą liczbą spośród zadanej tablicy jest ' . $var;
