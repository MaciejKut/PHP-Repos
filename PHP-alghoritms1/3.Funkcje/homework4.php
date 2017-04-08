<?php

$x = 1;

function print_conditional() {
    static $x;
    if($x++ == 1)
        echo "many";
    echo "good";
    echo "things";
    return $x;
}

print_conditional();
$x++;
print_conditional();

/*
Co zostanie wyświetlone przez funkcje?
a. manygoodthingsmanygoodthings
b. manygoodthings
c. goodthingsgoodthings
d. goodthingsmanygoodthings
e. nic nie wyświetli


Poprawna odpowiedź: d
Dlaczego: na początku zmienna ma wartość null != 1 więc robi goodthings
 * następnie zwraca na końcu zinkrementowaną x więc w drugim wywołaniu =1
 * i drukuje wszystkie po kolei

 */