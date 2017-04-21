<?php

$conn = new mysqli('localhost', 'root', 'maciej', 'Maciej2');

if ($conn->connect_error) {
    die("Error occured:" . $conn->error);
}

$sql = "SELECT * FROM Product";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

    foreach ($result as $value) {
        echo "name = " . $value['name'] . " ";
        echo "description = " . $value['description'] . " ";
        echo "id = " . $value['id'] . " </br>";
    }
}

$conn->close();
$conn = null;
