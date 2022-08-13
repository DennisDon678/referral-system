<?php

$db_host = 'localhost';
$db_username = "root";
$db_password = '';
$db_name = 'chuks';


$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
    echo ('an Error occured');
}