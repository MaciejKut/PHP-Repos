<?php

class Calc {

    public $array1;

    public function __construct() {

        $this->array1 = [];
    }

    public function add($num1, $num2) {
        $result = $num1 + $num2;
        $this->array1[] = "Added $num1 to $num2 got $result";
        return $result;
    }

    public function printHistory() {
        foreach ($this->array1 as $value) {
            echo $value.'<br/>';
        }
    }

}
