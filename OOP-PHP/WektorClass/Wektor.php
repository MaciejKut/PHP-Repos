<?php

class Wektor {

    protected $x;
    protected $y;

    public function __construct($x, $y) {
        if (is_numeric($x)) {
            $this->x = $x;
        } else {
            $this->x = 0;
        }
        if (is_numeric($y)) {
            $this->y = $y;
        } else {
            $this->y = 0;
        }
    }

    function setX($x) {
        if (is_numeric($x)) {
            $this->x = $x;
        } else {
            $this->x = 0;
        }
    }

    function setY($y) {
        if (is_numeric($y)) {
            $this->y = $y;
        } else {
            $this->y = 0;
        }
    }

    public function length() {
        $length = sqrt(pow($this->x, 2) + pow($this->y, 2));
        return $length;
    }

    public function addWektors(Wektor $wektor) {
        $a1 = $wektor->x;
        $b1 = $wektor->y;

        $a2 = $this->x;
        $b2 = $this->y;

        return new Wektor(($a1 + $a2), ($a2 + $b2));
    }

    public function multiplyW($num2) {
        return new Wektor(($this->x * $num2), ($this->y * $num2));
    }

    public function __destruct() {
        
    }

}
