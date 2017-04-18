<?php

require_once 'AdvancedCalc.php';

$calculator = new AdvancedCalc;



$calculator->add(3, 4);
$calculator->multiply(2, 2);
$calculator->pow(4, 2);
$calculator->printHistory();

var_dump($calculator::computeCircleArea(5));