<?php


echo '<br> powyżej var dump z s geta';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['cookie'])) {
        $cookieToDelete = $_GET['cookie'];

        setcookie($cookieToDelete, '', time() - 1);

        header("Location: cookies.php");
        die();

        
    }
}