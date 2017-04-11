<?php


function change($amount) {

    $tens = floor($amount / 10);
    $fives = floor(($amount - $tens * 10) / 5);
    $two = floor(($amount - $tens * 10 - $fives * 5) / 2);
    $ones = $amount - $tens * 10 - $fives * 5 - $two * 2;

    echo "Value $amount cab be divided into $tens dziesiątek, $fives piątek, $two dwójek, i $ones 1złotówek <br />";
}

change(188);
change(88);
change(8);

