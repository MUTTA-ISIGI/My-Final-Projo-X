<?php

//ensure you've started the session
session_start();

//connect to the database
require_once "db_connect.php";
//receive the data
$fullNames = $_POST["name"];
$regNumber = $_POST["reg_number"];
$password = $_POST["password"];
//select the query
$selectQuery = "SELECT * FROM `user_registration` WHERE reg_number ='$regNumber'&&password='$password'";
//get the result
$result = mysqli_query($connection, $selectQuery);
//check how many times the result is entered
$num = mysqli_num_rows($result);
//give a condition
if ($num == 1){
    $_SESSION['reg_number'] = $regNumber;
    header("location:owner_portal.php");
}else{
    header("location:home_page.php");
}
