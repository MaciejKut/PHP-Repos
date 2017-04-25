<?php

echo "<a href='exercise4.php'>Wróć do wyników</a>";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    var_dump($_GET);

    $id = (int) $_GET['id'];
    $table = $_GET['table'];

    $conn = new mysqli('localhost', 'root', 'maciej', 'cinemas_db');

    $sql = "DELETE FROM $table WHERE id =$id";
    if ($conn->query($sql) && $conn->affected_rows == 1) {
        echo 'Skasowano rekord o id:' . $id . ' z tabeli ' . $table;
    } else {
        echo 'Wystąpił błąd: ' . $conn->error;
    }

    $conn->close();
    $conn = null;
}