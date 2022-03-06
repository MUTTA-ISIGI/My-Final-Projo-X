<?php

//connecting to the database
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "apartment_system";
$connection = mysqli_connect($host, $user, $pass, $db_name);

//check if it is connected
if (!isset($connection)) {
    echo("Database connection failed!!");
}

