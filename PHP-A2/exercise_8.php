<?php

// sum of ranch from x to y

// for

$x = 5;
$y = 10;
$range =0;

for ($i = $x; $i <= $y ; $i++) {
    $range = $range + $i;
    
}

echo "Sum of range from $x to $y is $range";

// while


$x2 = 5;
$y2 = 10;

$sum2 = 0;
$i2 = $x2;

while($i2 <= $y2){
    $sum2 = $sum2 + $i2;
    $i2++;
}

echo "<br />Sum of range from $x2 to $y2 is $sum2";
// echo "<br />i2 = $i2   x2 = $x2";