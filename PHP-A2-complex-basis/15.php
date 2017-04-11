<?php

//
//Napisz funkcje o nazwie FooBar, przyjmującą jedną zmienną. Funkcja ta ma zwracać napis skonstruowany według nastepujących zasad: Napis ma się składać z kolejnych liczb całkowityczh (zaczynając od 1-ki), ale:
//
//W miejsce liczb podzielnych przez 3 wypisywać Foo
//W miejsce liczb podzielnych przez 5 wypisywać Bar
//W miejsce liczb podzielnych przez 3 i 5 wypisywać FOOBAR
//Np. Dla parametru x = 15 wynik ma być: 12Foo4BarFoo78FooBar11Foo1314FOOBAR
//

function FooBar($param) {
    if (is_int($param)) {

        for ($i = 1; $i <= $param; $i++) {
            if ($i < 3) {
                echo "$i";
            } elseif ($i % 3 == 0 && $i % 5 != 0) {
                echo 'Foo';
            } elseif ($i % 5 == 0 && $i % 3 != 0) {
                echo 'Bar';
            } elseif ($i % 3 == 0 && $i % 5 == 0) {
                echo 'FOOBAR';
            } else {
                echo "$i";
            }
        }
    } else {
        echo 'The value must be integer';
    }
}

FooBar('j');
echo '<br />';

FooBar(15);

