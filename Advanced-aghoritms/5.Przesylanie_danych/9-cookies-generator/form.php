<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cookieName']) && isset($_POST['cookieVal'])) {
        $cName = $_POST['cookieName'];
        $cVal = $_POST['cookieVal'];
        if (preg_match('/[=,; \t\r\n\013\014]/', $cName)) {
            echo 'Nieprawidłowa nazwa ciasteczka';
            echo 'Nie można wstawiać =,; \t\r\n\013\014 - patrze regex';
        } else {
            setcookie($cName, $cVal, time() + 3600);
            echo 'Ciasteczko zostało stworzone';
        }
    } else {
        echo 'Ups, something went wrong';
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
    <head>

        <meta charset="utf-8">
        <title>Cookie saver</title>
        <meta name="description" content="Multiple cookie generator">
        <meta name="keywords" content="cookie anchor generator">
        <meta name="author" content="Maciej Kutzmann">
        <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    </head>

    <body>
        <form action="#" method="POST">
            <label>Nazwa ciasteczka
                <input type="text" name="cookieName"/>
            </label>
            <label>Wartość ciasteczka
                <input type="text" name="cookieVal"/>
            </label>
            <input type="submit"/>
        </form>

        <div></div>
        <a href="cookies.php">Wyświetl wszystkie zapisane ciasteczka</a>


    </body>
</html>



