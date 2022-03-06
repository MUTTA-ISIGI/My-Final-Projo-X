<?php
session_start();
if (!isset($_SESSION['reg_number'])){
    header("location:admin.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My_portal</title>
    <!--    link to bootstrap-->
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/custom.css">
    <!--    end the link to bootstrap-->
</head>
<body>
<div class="container">
    <a class="float-right" href="logout.php">logOut</a>
    <h4 >Hello,<?php echo $_SESSION['reg_number']; ?></h4>
</div>
<div class="main-menu">
    <ul class="menu-item">Dashboard</ul>
    <br><br><br>
    <ul class="menu-item">Tenants</ul>
    <br><br><br>
    <ul class="menu-item">BookedHouses</ul>
    <br><br><br>
    <ul class="menu-item">Etc</ul>
    <br><br><br>

</div>
</body>
</html>

