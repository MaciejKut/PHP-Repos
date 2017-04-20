<?php
include 'connection.php';

$sql1 = "INSERT INTO Product (name, description) VALUES ('piłka', 'zielona piłka lekarska')";
$sql2 = "INSERT INTO Product (name, description) VALUES ('piłka2', '2zielona piłka lekarska')";
$sql3 = "INSERT INTO Product (name, description) VALUES ('piłka2', '3zielona piłka lekarska')";
$sql4 = "INSERT INTO Address (street, town, post) VALUES ('ulica Sezamkowa 1', 'Wrocław', 'Zagłębie Lubin')";


//mysqliFunct($sql1);
//mysqliFunct($sql2);
//mysqliFunct($sql3);
//mysqliFunct($sql4);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['street']) && isset($_POST['town']) && isset($_POST['post'])) {
        $a = $_POST['street'];
        $b = $_POST['town'];
        $c = $_POST['post'];
    }
    $sql6 = "INSERT INTO Address (street, town, post) VALUES ('$a', '$b', '$c')";
    mysqliFunct($sql6);
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>formularz dodawania produktu</title>
    </head>
    <body>
        <form action="#" method="POST">
            <label>
                Ulica: <input type="text" name="street">
            </label>
            <label>
                Miasto: <input type="text" name="town">
            </label>
            <label>
                Poczta: <input type="text" name="post">
            </label>
            <input type="submit">
        </form>
    </body>
</html>