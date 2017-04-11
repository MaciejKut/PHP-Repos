<?php

function inArray($foo, array $array) {

    foreach ($array as $value) {
        if ($foo === $value) {
            return TRUE;
        }
    }
    return FALSE;
}

$array = [3, 54, 59, 005, 4, 13, 14];

var_dump(inArray(4, $array));
