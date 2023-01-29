<?php
include("php/dbconnect.php");

$error = '';
if (isset($_POST['register'])) {

    $username =  mysqli_real_escape_string($conn, trim($_POST['username']));
    $email =  mysqli_real_escape_string($conn, trim($_POST['email']));
    $phone =  mysqli_real_escape_string($conn, trim($_POST['phone']));
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password =  mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // verify if fields are filled
    if ($username == '' || $email == ''  || $phone == '' || $password == '' || $confirm_password == '') {
        $error = 'All fields are required';
    }

    // prepare a select query 
    $sql = "select * from user where username='" . $username . "' and password = '" . md5($password) . "'";

    // run the query into db and store result in $q
    $q = $conn->query($sql);
    if ($q->num_rows == 1) {
        $res = $q->fetch_assoc();
        // check if username already exist
        if ($username == $res['username']) {
            $error = 'User already exist';
        }
        if ($email = $res['email']) {
            $error = 'Email already used';
        }
    } else {
        //  prepare an insert query
        $sql = "insert into user(username,password,name,role) values ('$username','" . md5($password) . "','$username','USER') ";

        $query = $conn->query($sql);

        echo '<script type="text/javascript">window.location="login.php"; </script>';
    }
}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div class="container">

        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div class="panel-body" style="background-color: #E2E2E2; margin-top:50px; border:solid 3px #0e0e0e;">
                    <h3 class="myhead">REGISTRATION FORM</h3>
                    <form role="form" action="registration.php" method="post">
                        <hr />



                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="Enter Username " name="username" required />
                        </div>
                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="bi bi-chart"></i></span>
                            <input type="email" class="form-control" placeholder="Enter Email " name="email" required />
                        </div>
                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="number" class="form-control" placeholder="Enter Phone Number " name="phone" required />
                        </div>

                        <div class="form-group input-group">

                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password" required />
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required />
                        </div>

                        <div class="form-group">

                            <span class="pull-right">
                                <a href="login.html">already have an account ? </a>
                            </span>
                        </div>

                        <button class="btn btn-primary" type="submit" name="register">Register Now</button>

                    </form>
                </div>

            </div>


        </div>
    </div>

    </div>
</body>

</html>