<?php

$a = 3;
$b = 4;
$c = 5;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    if ($a == $b && $b == $c) {
        echo 'Z podanych odcinków da się zbudować trójkąt równoboczny';
    } elseif ($a != $b && $b != $c && $a != $c) {
        echo 'Z podanych odcinków da się zbudoać tójkąt różnoboczny';
    } else {
        echo 'z podanch odcinków da się zbudować trójkąt równoramienny';
    }
} else {
    echo 'Z podanych odcinków nie da się zbudować tórjkąta';
}
