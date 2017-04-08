<?php

function inArray($foo, array $array, &$n) {

    foreach ($array as $key => $value) {

        if ($n == $value) {
            $n = $key;
        }
    }

    foreach ($array as $value) {
        if ($foo === $value) {
            return TRUE;
        }
    }
    return FALSE;
}

$array = [3, 54, 59, 005, 4, 13, 14];

$g = 59;

var_dump(inArray(4, $array, $g));

var_dump($g);
