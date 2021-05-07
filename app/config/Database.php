<?php

global $connect;

$SERVER_NAME = 'localhost';
$USER_NAME = 'root';
$PASSWORD = '';
$DB_NAME = 'data_antrian';

$connect = mysqli_connect($SERVER_NAME, $USER_NAME, $PASSWORD, $DB_NAME);

if (!$connect) {
    die(mysqli_connect_error());
}
