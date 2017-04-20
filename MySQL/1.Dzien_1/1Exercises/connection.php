<?php

function openConn() {
    $conn = new mysqli('localhost', 'root', 'maciej', 'Maciej2');


    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    }
}

function createTable($x) {

    $conn = new mysqli('localhost', 'root', 'maciej', 'Maciej2');
    $result = $conn->query($x);

    if ($result === TRUE) {
        echo("Table was created properly");
    } else {
        echo("Error: " . $conn->error);
    }
    $conn->close();
    $conn = null;
}

function closeConn($conn) {
    $conn->close();
    $conn = null;
}
