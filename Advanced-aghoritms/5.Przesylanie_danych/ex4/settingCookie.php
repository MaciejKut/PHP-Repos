<?php

if (!isset($_COOKIE['User'])) {
    setcookie('User', 'Maciej', time() + 3600);
} else {
    echo 'Cookie User was already set';
}