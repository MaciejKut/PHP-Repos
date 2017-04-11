<?php

function createMultiTable($n) {

    $arrayIn = [];
    $arrayOut = [];

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            $arrayIn[] = $j;
        }
        $arrayOut[] = $arrayIn;
        unset($arrayIn);
    } return $arrayOut;
}

var_dump(createMultiTable(9));
