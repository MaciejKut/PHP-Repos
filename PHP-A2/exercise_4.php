<?php

$a = 5;
$b = 3;
$c = 7;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'Z podanych odcinków' . $a . '; ' . $b . '; ' . $c . ' można zbudować trójkąt';
} else {
    echo 'Z podanych odcinków' . $a . '; ' . $b . '; ' . $c . ' nie można zbudować trójkąta';
}