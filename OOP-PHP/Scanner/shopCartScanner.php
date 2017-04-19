<?php

include 'Scanner.php';

$x = new Product('cebula', 1, 3, 'zwykła obrana');
$x2 = new Product('ziemniaki', 4, 25, 'Ziemniaki kopane');
$cart1 = new Scanner();

//var_dump($cart1);

$cart1->addProduct($x);
$cart1->addProduct($x2);


//var_dump($cart1);
//$cart1->deleteProduct('cebula');
$cart1->changeQty('cebula', 8);

$cart1->printRecipt();

//var_dump($cart1);


