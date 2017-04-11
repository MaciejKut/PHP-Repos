<?php

if (isset($_COOKIE['counter'])) {

    echo $_COOKIE['counter'];
    $var = $_COOKIE['counter'];
    setcookie('counter', ($var + 1), time() + 3600);
} else {
    echo 'Cookie was not set, sorry';
}