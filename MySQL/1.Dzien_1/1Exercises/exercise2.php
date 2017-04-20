<?php

include 'connection.php';

$table1 = 'Create Table if not exists Product (
        id int auto_increment primary key,
        name varchar(255),
        description varchar(255)
        )';
$table2 = 'Create Table if not exists `Order` (
        id int auto_increment primary key,
        description varchar(255)
        )';
$table3 = ' Create Table if not exists Client (
        id int auto_increment primary key,
        name varchar(255),
        surname varchar (255)
        )';
$table4 = ' Create Table if not exists Address (
        id int auto_increment primary key,
        street varchar(255),
        town varchar (255),
        post varchar(255)
        )';



createTable($table1);
createTable($table2);
createTable($table3);
createTable($table4);


