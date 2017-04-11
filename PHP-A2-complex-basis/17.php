<?php

/* 
 Napisz funkcję, która przyjmuje liczbę n jako argument i wyświetla n razy na stronie napis "Programowanie w PHP jest fajne!".
 */

function phpIsCool (Int $n){
    for($i = 1; $i <= $n; $i++){
        echo 'PHP coding is cool! <br />';
    }
}

phpIsCool(100);

// phpIsCool('kfd');