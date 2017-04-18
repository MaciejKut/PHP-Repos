<?php

require 'Wektor.php';

$wekt1 = new Wektor(4, 3);

$wekt1->length();
$wekt2 = new Wektor(3, 4);

var_dump($wekt1->addWektors($wekt2));

var_dump($wekt2->multiplyW(5));
