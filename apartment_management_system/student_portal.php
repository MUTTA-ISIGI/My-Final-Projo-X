<?php
session_start();
if (!isset($_SESSION['reg_number'])){
    header("location:student.php");
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
        <hr>
        <br><br><br>
        <ul class="menu-item"><a href="finance.php">Finances</a></ul>
        <br><br><br>
        <ul class="menu-item"><a href="accommodation.php">Accommodation</a></ul>
        <br><br><br>
        <ul class="menu-item"><a href="reports.php">Reports</a></ul>
        <br><br><br>

    </div>
    <div class="row">
        <div class="col-lg-2 col-sm-2 col-md-2"></div>
        <div class="col-lg-10 col-sm-10 col-md-10 jumbotron bg-success">
            <h4 class="text-center">Get to Know More Of Your Information</h4>
            <ul>
                <li class="jumbotron text-success text-center">Your Financial Status:
                    <hr>
                    <br>*Get Your Receipts
                    <br><br>*Get Your Balances
                    <br><br>*Get Your advance Payment Details
                </li>
                <li class="jumbotron text-success text-center">Your House Status:
                    <hr>
                    <br>*House Booked
                    <br><br>*House Name
                    <br><br>*House Number
                    <br><br>*House Invoice

                <li class="jumbotron text-success text-center">Reports From the Admin
                    <hr></li>
            </ul>
        </div>
    </div>

</body>
</html>
