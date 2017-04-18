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
        } else {
            $this->color = 'not given';
        }

        echo "Created shape (x:$this->x,y:$this->y) in color: $this->color </br>";
    }

    public function printInfo() {
        echo "position of center of the shape is x: $this->x, y: $this->y, and color: $this->color";
    }

    public function distOfAnothShape(Shape $x) {
        $distance = sqrt(pow(($this->x - $x->x), 2) + pow(($this->y - $x->y), 2));
        return $distance;
    }

    public function __destruct() {
        echo "We have just deleted (x:$this->x,y:$this->y) in color: $this->color </br>";
    }

}
