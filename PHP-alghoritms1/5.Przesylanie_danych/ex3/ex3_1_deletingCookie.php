<?php

if (isset($_COOKIE['counter'])) {

    setcookie('counter', null, time() - 3600);
    echo 'Cookie has just been deleted';
} else {
    echo 'Sorry there is no such a cookie';
}