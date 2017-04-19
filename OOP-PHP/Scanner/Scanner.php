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

    public function changeQty($name, $quantity) {
        if (isset($this->cart[$name])) {
            $this->cart[$name]->setQuantity($quantity);
        }
    }

    public function printRecipt() {
        $totalValue = 0;
        foreach ($this->cart as $value) {

            echo "Nazwa produktu: " . $value->getName() . "  ,";
            echo " Opis: " . $value->getDescription() . " ,";
            echo " Cena: " . $value->getPrice() . " ,";
            echo " Ilość:" . $value->getQuantity() . " </br>";

            $totalValue += $value->totalValue();
        }
        echo "</br>Wartość po rabacie: $totalValue </br>";
    }

}
