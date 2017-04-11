<?php

function max2($arg1, $arg2) {

    if ($arg1 >= $arg2) {
        return $arg1;
    } else {
        return $arg2;
    }
}

function max3($arg1, $arg2, $arg3) {

    $argBigger = max2($arg3, $arg2);

    if ($arg1 >= $argBigger) {
        return $arg1;
    } else {
        return $argBigger;
    }
}

var_dump(max3(7, 65, 5));
