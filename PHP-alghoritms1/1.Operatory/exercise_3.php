<?php

function RectangularProperties($a, $b) {

    $perimeter = 2 * $a + 2 * $b;
    $area = $a * $b;

    echo'perimeter of rectangle a=' . $a . ' b=' . $b . ' equal ' . $perimeter.'<br/>';
    echo'area of rectangle a=' . $a . ' b=' . $b . ' equal ' . $area;
}

RectangularProperties(4, 6);
