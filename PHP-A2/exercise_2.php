<?php

$array = [2, 34, 5, 6.4, 89, 84, 5, 9, 93, 58];

$sum = 0;

foreach ($array as $value) {
    $sum = $sum + $value;
}

echo 'Suma wszystkich elemtów tablicy wynosi '.$sum;