<?php

include 'Shape.php';


$circle1 = new Shape(2, 5, 'white');

$triangle = new Shape(5, 9, 3);

var_dump($circle1->distOfAnothShape($triangle));
