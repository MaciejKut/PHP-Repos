<?php

if (isset($_COOKIE['User'])) {
    setcookie('User', '', time() - 3600);
    echo 'The User cookie has been deleted';
} else {
    echo 'Sorry there was no such a cookie';
}
