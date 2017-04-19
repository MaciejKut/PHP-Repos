<?php

include 'Circle.php';

$circle2 = new Circle(2, 2, 'blue', 3);

var_dump($circle2->area());

var_dump($circle2->perimeter());
