<?php

$array = [2, 34, 5, 6.4, 89, 2, 84, 'two', 2, 5, 9, 93, 58, 2];

$x = 2;


foreach ($array as $key => $value) {
    if($value === $x){
        echo $x.'jest na pozycji'.$key.'<br />';
    }
}