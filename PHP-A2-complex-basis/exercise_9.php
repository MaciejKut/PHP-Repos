<?php
//Ćwiczenie 9
//Napisz program który na podstawie wartości zmiennej n będzie wypisywał wszystkie liczby od 0..n. 
//Przy każdej liczbie ma napisać czy jest ona parzysta czy nie, liczba i informacja o niej mają znaleźć się w jednej linii. Np:
//```
//0 – parzysta
//1 – nieparzysta
//2 – parzysta
//3 – nieparzysta
//...

$n =23;

for ($i=0; $i <= $n; $i++){
    if($i%2 != 0){
        echo "$i - nieparzysta <br />";
    }else {
        echo "$i - parzysta <br />";
    }
}