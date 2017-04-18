<?php

class Calc {

    protected $array1;

    public function __construct() {

        $this->array1 = [];
    }

    public function add($num1, $num2) {
        $result = $num1 + $num2;
        $this->array1[] = "Added $num1 to $num2 got $result";
        return $result;
    }

    public function multiply($num1, $num2) {
        $result = $num1 * $num2;
        $this->array1[] = "Multiplied $num1 with $num2 got $result";
        return $result;
    }

    public function substract($num1, $num2) {
        $result = $num1 - $num2;
        $this->array1[] = "Subtracted $num1 from $num2 got $result";
        return $result;
    }

    public function divide($num1, $num2) {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            $this->array1[] = "Divided $num1 by $num2 got $result";
            return $result;
        } else {
            echo 'Cannot divide by 0!';
        }
    }

    public function printHistory() {

        if (count($this->array1) > 0) {
            foreach ($this->array1 as $value) {
                echo $value . '<br/>';
            }
        } else {
            echo 'No operations saved on this object';
        }
    }

    public function clearOperations() {

        $this->array1 = [];
        echo 'History is clean</br>';
    }

}
