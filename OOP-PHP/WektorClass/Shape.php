<?php

class Shape {

    private $color;
    private $x;
    private $y;

    public function __construct($x, $y, $color) {
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

        if (is_string($color)) {
            $this->color = "$color";
        }

        echo "Created shape (x:$this->x,y:$this->y) in color: $this->color </br>";
    }

    public function __destruct() {
        echo "We have just deleted (x:$this->x,y:$this->y) in color: $this->color </br>";
    }

}
