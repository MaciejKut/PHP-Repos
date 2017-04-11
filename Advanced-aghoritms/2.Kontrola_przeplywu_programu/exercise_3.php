<?php

$intNum = 75;
$sum = 0;
for ($i = 0; $i <= $intNum; $i++) {

    $sum += $i;
}

echo 'Suma wszystkich liczb całkowitych liczby ' . $intNum . ' to: ' . $sum;

echo '<br />';
$x = 5;
$y = 0;
$j = 0;

while ($j <= $x) {
    $y += $j;
    $j++;
}

echo 'Suma wszystkich liczb całkowitych liczby ' . $x . ' to: ' . $y;
