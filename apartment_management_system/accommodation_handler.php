<?php
//start session
session_start();

//check if button is clicked
if (isset($_POST["btn_book"])) {
    //connect to the database
    require_once "db_connect.php";
    //start receiving the data now
    $name = $_POST["name"];
    $regNumber = $_POST["reg_number"];
    $password = $_POST["password"];
    $houseName = $_POST["house_name"];
    $houseFloor = $_POST["house_floor"];
    $houseNumber = $_POST["house_number"];

    $errors = array();
    $rg ="SELECT reg_number FROM `user_details` WHERE reg_number =$regNumber";
    $rgg= mysqli_query($connection,$rg);
    $hnm ="SELECT house_name FROM `user_details` WHERE house_name =$houseName";
    $hm= mysqli_query($connection,$hnm);
    $hr ="SELECT house_floor FROM `user_details` WHERE house_floor =$houseFloor";
    $hrr= mysqli_query($connection,$hr);
    $hbr ="SELECT house_number FROM `user_details` WHERE house_number =$houseNumber";
    $hb= mysqli_query($connection,$hbr);

    if (empty($name)) {
        $errors['nm'] = "Input Name";
    }

    if (empty($regNumber)) {
        $errors['rg'] = "Input RegNumber";
    }elseif (mysqli_num_rows($rgg)>0){
        $errors['rg']= "RegNumber Exists";
    }

    if (empty($password)) {
        $errors['pss'] = "Input Password";
    }

    if (empty($houseName)) {
        $errors['hnm'] = "Choose HouseNumber";
    }elseif (mysqli_num_rows($hm)>0){
        $errors['hnm']= "House Booked";
    }


    if (empty($houseFloor)) {
        $errors['hr'] = "Choose HouseFloor";
    }elseif (mysqli_num_rows($hrr)>0){
        $errors['hr']= "House Booked";
    }

    if (empty($houseNumber)) {
        $errors['hbr'] = "Choose HouseNumber";
    }elseif (mysqli_num_rows($hb)>0){
        $errors['hbr']= "House Booked";
    }

    if (count($errors) == 0) {
        $insertQuery = "INSERT INTO `user_details`(`id`, `name`, `reg_number`, `password`, `house_name`, `house_floor`, `house_number`) 
                        VALUES (NULL,'$name','$regNumber','$password','$houseName','$houseFloor','$houseNumber')";
        $result = mysqli_query($connection, $insertQuery);
        if ($result) {
            echo "<script>alert(done)</script>";
        } else {
            echo "<script>alert(failed)</script>";
        }
    }
}














