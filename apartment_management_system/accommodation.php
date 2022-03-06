<?php
session_start();

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
<div class="1">
    <div class="x1">
        <div class="row">
            <div class="col-sm-4 col-lg-4 col-md-4"></div>
            <div class="col-sm-4 col-lg-4 col-md-4">
                <h4 class="text-success">Book House here</h4><br>
                <form method="post" action="accommodation_handler.php">
                    <div class="form-group">
                        <label class="text-success">FullName:
                            <input name="name" class="form-control" placeholder="Enter FullNames" type="text">
                            <p class="text-danger"><?php if (isset($errors['nm'])) echo $errors['nm'];?></p>
                        </label><br><br>
                        <label class="text-success">RegNumber:
                            <input name="reg_number" class="form-control " placeholder="Enter RegNumber" type="text">
                            <p class="text-danger"><?php if (isset($errors['rg'])) echo $errors['rg'];?></p>
                        </label><br><br>
                        <label class="text-success">Password:
                            <input name="password" class="form-control " placeholder="Enter Password" type="password">
                            <p class="text-danger"><?php if (isset($errors['pss'])) echo $errors['pss'];?></p>
                        </label><br><br>
                        <label class="text-success">HouseName:
                            <select name="house_name" id="">
                                <option value="">SelectHouseName</option>
                                <option value="HELLENAH">HELLENAH</option>
                                <option value="KINGDOM">KINGDOM</option>
                                <option value="GEMSTONE">GEMSTONE</option>
                            </select>
                            <p class="text-danger"><?php if (isset($errors['hnm'])) echo $errors['hnm'];?></p>
                        </label><br><br>
                        <label class="text-success">HouseFloor:
                            <select name="house_floor" id="">
                                <option value="">SelectHouseFloor</option>
                                <option value="GROUND">GROUND</option>
                                <option value="FIRST">FIRST</option>
                                <option value="SECOND">SECOND</option>
                                <option value="THIRD">THIRD</option>
                                <option value="FOURTH">FOURTH</option>
                                <option value="FIFTH">FIFTH</option>
                            </select>
                            <p class="text-danger"><?php if (isset($errors['hr'])) echo $errors['hr'];?></p>
                        </label><br><br>
                        <label class="text-success">HouseNumber:
                            <select name="house_number" id="">
                                <option value="">SelectHouseNumber</option>
                                <option value="ONE">ONE</option>
                                <option value="TWO">TWO</option>
                                <option value="THREE">THREE</option>
                                <option value="FOUR">FOUR</option>
                                <option value="FIVE">FIVE</option>
                                <option value="SIX">SIX</option>
                            </select>
                            <p class="text-danger"><?php if (isset($errors['hbr'])) echo $errors['hbr'];?></p>
                        </label><br><br>

                        <input class="btn btn-danger" name="btn_book" value="BookNow" type="submit">
                    </div>
                </form>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4"></div>
        </div>
    </div>

</div>

</body>
</html>

