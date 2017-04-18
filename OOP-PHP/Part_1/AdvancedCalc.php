<?php

/**
 * Description of AdvancedCalc
 *
 * @author maciej
 */
require_once 'Calc.php';

class AdvancedCalc extends Calc {

    static public $PI = 3.14;

    public function __construct() {
        parent::__construct();
    }

    public function pow($num1, $num2) {
        $result = pow($num1, $num2);
        $this->array1[] = " $num1 ^ $num2 equals $result";
        return $result;
    }

    public function root($num1, $num2) {
        $result = pow($num1(1 / $num2));
        $this->array1[] = " root of $num2 of $num1 equals $result";
        return $result;
    }

    static public function computeCircleArea($r) {

        return $r * $r * self::$PI;
    }

}
