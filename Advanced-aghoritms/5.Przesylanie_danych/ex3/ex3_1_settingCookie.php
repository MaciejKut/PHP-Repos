<?php

if (!isset($_COOKIE['counter'])) {

    setcookie('counter', 0, time() + 3600);

    echo 'Cookie was created';
}


