<?php

include 'Shape.php';
include '../Calculator_1/AdvancedCalc.php';

class Circle extends Shape {

    private $r;

    public function __construct($x, $y, $color, $r) {
        parent::__construct($x, $y, $color);

        if (is_numeric($r)) {
            $this->r = $r;
        } else {
            $this->r = 1;
        }
        echo " , circle with radius $this->r </br>";
    }

    function getR() {
        return $this->r;
    }

    function setR($r) {

        if (is_numeric($r)) {
            $this->r = $r;
        } else {
            $this->r = 1;
        }
    }

    public function printInfo() {
        parent::printInfo();
        echo "circle with radius $this->r </br>";
    }

    public function area() {
        return AdvancedCalc::computeCircleArea($this->r);
    }

    public function perimeter() {
        return $this->r * 2 * 3.14;
    }

    public function __destruct() {
        parent::__destruct();
        echo " circle with radius $this->r </br>";
    }

}
