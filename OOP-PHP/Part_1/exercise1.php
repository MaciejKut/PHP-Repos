<?php 
require 'Calc.php';

$calculator = new Calc();

var_dump($calculator->add(2, 2));
$calculator->printHistory();