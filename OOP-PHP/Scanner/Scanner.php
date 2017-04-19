<?php

include 'Product.php';

class Scanner {

    private $cart;

    public function __construct() {
        $this->cart = [];
    }

    public function addProduct(Product $x) {
        $this->cart[$x->getName()] = $x;
    }

    public function deleteProduct($name) {

        if (isset($this->cart[$name])) {
            unset($this->cart[$name]);
        }
    }

}
