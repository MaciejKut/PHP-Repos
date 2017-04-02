<?php

// algorytm liczący silnie 
// while

$x = 1;
$y = 5; // szukana liczba silni
$silnia = 1;

while ($x <= $y) {
    $silnia = $silnia * $x;
    $x++;
}

echo "$silnia";


// for

$silnia2 = 8;
$sum = 1;

for ($i = 1; $i <= $silnia2; $i++) {
    $sum = $sum * $i;
}
echo '<br />Wynik wynosi' . $sum;
