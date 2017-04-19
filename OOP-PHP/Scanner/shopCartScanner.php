<?php

include 'Scanner.php';

$x = new Product('cebula', 1, 3, 'zwykła obrana');
$cart1 = new Scanner();

var_dump($cart1);

$cart1->addProduct($x);


var_dump($cart1);

$cart1->deleteProduct('cebula');

var_dump($cart1);


