<?php

$array = [4, 3, 5, 3, 5, 6, 3, 2, 4, 5];

function lessThanAvrg(array $array) {
    $sum = '';

    foreach ($array as $value) {
        $sum += $value;
    }

    $avr = $sum / count($array);

    echo 'Mniejsze od średniej są: ';
    foreach ($array as $val) {
        if ($val < $avr) {
            echo "$val , ";
        }
    }
}

lessThanAvrg($array);
