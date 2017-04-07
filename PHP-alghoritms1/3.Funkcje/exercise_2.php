<?php

function perfectNumber($num) {
    $sumOfDivs = 0;

    for ($i = 1; $i <= ($num / 2); $i++) {
        if ($num % $i == 0) {
            $sumOfDivs += $i;
        }
    }

    if ($sumOfDivs == $num) {
        echo "Liczba $num jest liczbą doskonałą bo sumofDivs = $sumOfDivs <br />";
    } else {
        echo "Liczba $num NIE jest liczbą doskonałą, bo suma jej dzielnikóœ wynosi $sumOfDivs <br />";
    }
}

perfectNumber(6);
perfectNumber(8128);

perfectNumber(4);
perfectNumber(124);

