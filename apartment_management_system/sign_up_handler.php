<?php
//ensure you've started the session
 session_start();
 header("location:home_page.php");
 //connect to the database
require_once "db_connect.php";
//receive the data
     $fullNames = $_POST["name"];
     $regNumber = $_POST["reg_number"];
     $password = $_POST["password"];
     //select the query
    $selectQuery = "SELECT * FROM `user_registration` WHERE reg_number ='$regNumber'";
    //get the result
    $result = mysqli_query($connection, $selectQuery);
    //check how many times the result is entered
    $num = mysqli_num_rows($result);
    //give a condition
if ($num==1){
    echo "registration number already taken";
}else{
    //insert the data to the database
    $insertQuery ="INSERT INTO `user_registration`(`id`, `name`, `reg_number`, `password`)
                                        VALUES (NULL,'$fullNames','$regNumber','$password')";
    //save the data
    $save = mysqli_query($connection, $insertQuery);
    echo "Registration successful!";
}