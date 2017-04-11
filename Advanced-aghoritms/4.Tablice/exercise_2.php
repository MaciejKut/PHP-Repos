<?php

$array1 = array(
    [1, 2, 3, 5],
    [4, 5, 6, 5],
    [7, 8, 9, 9],
    [7, 8, 9, 9]
);

function print2DTable($table) {
    foreach ($table as $value) {
        foreach ($value as $val) {
            echo $val;
            echo ' ';
        }
        echo '<br />';
    }
}

print2DTable($array1);

function getMatrixTrace($array) {
    $trace = 0;

    foreach ($array as $key1 => $i) {
        foreach ($i as $key2 => $value) {
            if ($key1 == $key2) {
                $trace += $value;
            }
        }
    }
    echo $trace;
}

getMatrixTrace($array1);
