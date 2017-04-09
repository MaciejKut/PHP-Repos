<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['firstName']) || isset($_POST['lastName'])) {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        echo "Witaj $firstName $lastName";
    } else {
        echo 'Witaj nieznajomy';
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Maciej Kutzmann</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Superglobal $POST" />
        <meta name="keywords" content="POST, PHP" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    </head>
    <body>

        <form action="#" method="POST">
            <label>Imię: <input type="text" name="firstName"></label>
            <label>Nazwisko: <input type="text" name="lastName"></label>
            <input type="submit" value="Wyślij">
        </form>

    </body>
</html>




