<?php

if (isset($_COOKIE['User'])) {
    echo 'Witaj' . $_COOKIE['User'];
} else {
    echo 'Cookie User was not set sorry';
}