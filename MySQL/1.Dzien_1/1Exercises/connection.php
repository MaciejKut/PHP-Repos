<?php

//This is just connection to practice
//remeber to add it to gitignore !

function openConn() {
    $conn = new mysqli('localhost', 'root', 'maciej', 'Maciej2');


    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    }
    return $conn;
}

function mysqliFunct($x) {

    $conn = new mysqli('localhost', 'root', 'maciej', 'Maciej2');
    $result = $conn->query($x);

    if ($result === TRUE) {
        echo("SQL was executed<br>");
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

