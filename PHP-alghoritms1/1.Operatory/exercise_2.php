<?php

$a = 3;
$b = 5;
$c = 5;

if (((pow($a, 2) + pow($b, 2)) === pow($c, 2)) OR (pow($a, 2) + pow($c, 2)) === pow($b, 2) OR (pow($c, 2) + pow($b, 2)) === pow($a, 2)) {
    echo "Zmienne $a, $b, i $c są to liczby z których da się zbudować"
    . "równanie pitagorejskie";
} else {
    echo "Zmienne $a, $b, i $c są to liczby z których nie da się zbudować"
    . "równania pitagorejskiego";
}