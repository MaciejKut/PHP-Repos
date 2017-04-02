<?php

$a = 2;
$b = 8;
$c = 4;

if ($a >= $b) {
    if ($a >= $c) {
        echo 'Największa liczba to:'.$a;
    } else {
        echo 'Największa liczba to:'.$c;
    }
}elseif ($b >= $c) {
    echo 'Największa liczba to:'.$b;
} else {
    echo 'Największa liczba to:'.$c;
}

    