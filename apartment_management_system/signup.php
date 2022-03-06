<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
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
    <div class="log-box">
    <div class="row">
        <div class="col-sm-4 col-lg-4 col-md-4"></div>
        <div class="col-sm-4 col-lg-4 col-md-4 log-centre">
            <h4 class="text-success">SignUp here</h4><br>
                <form method="post" action="sign_up_handler.php">
                    <div class="form-group">
                        <label class="text-success">FullName:
                            <input name="name" class="form-control" placeholder="Enter FullNames" type="text">
                        </label><br><br>
                        <label class="text-success">RegNumber:
                            <input name="reg_number" class="form-control " placeholder="Enter RegNumber" type="text">
                        </label><br><br>
                        <label class="text-success">Password:
                            <input name="password" class="form-control " placeholder="Enter Password" type="password">
                        </label><br><br>
                        <input class="btn btn-success" name="btn_sgn" value="SignUp" type="submit">
                    </div>
                </form>
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4"></div>
    </div>
    </div>

</div>

</body>
</html>
