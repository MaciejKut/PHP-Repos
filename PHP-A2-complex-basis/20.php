<?php

/*
  sprawdzenie czy jest liczbą pierwszą
 */

function PrimeNumber($n) {

    for ($i = 2; $i < $n; $i++) {
        if (($n % $i) == 0) {
            echo 'Liczba ' . $n . ' nie jest liczbą pierwszą<br />';
            return;
        }
    }echo 'Liczba ' . $n . ' jest liczbą pierwszą <br />';
}

PrimeNumber(34);
PrimeNumber(2);
PrimeNumber(3);
PrimeNumber(4);
PrimeNumber(5);
PrimeNumber(7);
PrimeNumber(11);
PrimeNumber(13);
PrimeNumber(17);
PrimeNumber(345);
PrimeNumber(98);
PrimeNumber(16);
PrimeNumber(89);
