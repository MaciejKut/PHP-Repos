<?php

$conn = new mysqli('localhost', 'root', 'maciej');


if ($conn->connect_error) {
    die("Polaczenie nieudane. Blad: " . $conn->connect_error);
}
echo("Polaczenie udane.");

$conn->query('CREATE DATABASE Maciej2');
