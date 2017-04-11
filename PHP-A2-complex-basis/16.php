<?php

function powerUp($a, $n) {
    $result = 1;

    if ($n == 0) {
        return 1;
    } elseif ($n == 1) {
        return $a;
    } else {
        for ($i = 1; $i <= $n; $i++) {

            $result = $a * $result;
        }
         return $result;
    }
}

var_dump(powerUp(2, 1));
