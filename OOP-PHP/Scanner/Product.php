<?php

class Product {

    private $name;
    private $quantity;
    private $price;
    private $description;
    
    public function __construct($name, $quantity, $price, $description) {
        $this->price = $price ;
        $this->quantity = $quantity ;
        $this->name = $name ;
        $this->description = $description ;
    }

    public function getName() {
        return $this->name;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function totalValue() {
        return $this->price * $this->quantity;
    }

}
