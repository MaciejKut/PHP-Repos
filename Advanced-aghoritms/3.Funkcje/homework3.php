<?php

$a = '0';
echo strlen($a);
echo empty($a) ? $a : 5;
echo $a ?: 5;

/*
Co zostanie wyświetlone przez funkcje?
a. 105
b. 100
c. 050
d. 005
e. 150


Poprawna odpowiedź: 105
Dlaczego:
pierwsze echo wyświetla długość
 * drugie sprawdza czy nie jest puste
 * a 3 arg operator wie że string ma 1 długości wiec nie jest pusty i zwraca a czyli 0
 * ostatni ostatni sprawca czy jest true i w a jest 0 co jest rzutowane na false 
 * i wyświetlane jest 5
 */