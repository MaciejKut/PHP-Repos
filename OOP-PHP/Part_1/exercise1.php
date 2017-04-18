<?php

require 'Calc.php';

$calculator = new Calc();

$calculator->add(2, 2);
$calculator->divide(3, 4);
$calculator->multiply(2, 5);
$calculator->substract(4, 5);
$calculator->printHistory();
$calculator->clearOperations();
$calculator->printHistory();
