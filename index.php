<?php
include("php/dbconnect.php");
include("php/checklogin.php");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online School Fees Payment System</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<style>
    .pointer {
        cursor: pointer;
    }
    .text-white{
        color: white n;
    }
</style>
<script src="js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="js/custom1.js"></script>

<body>
    <?php
    if ($_SESSION['role'] == 'ADMIN') {
        include("php/header.php");
        echo '<div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">DASHBOARD</h1>
                    <h1 class="page-subhead-line">Welcome to <strong> ' . $_SESSION['rainbow_username'] . '</strong>. "Payment system" </h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">

            <a href="student.php" class="pointer">
                <div class="col-md-4  ">
                    <div class="main-box mb-pink text-white">
                  
                            <i class="fa fa-users fa-5x "></i>
                            <h5>Student</h5>
                    
                    </div>
                </div>
                </a>




                <div class="col-md-4">
                    <div class="main-box mb-dull">
                        <a href="fees.php">
                            <i class="fa fa-inr fa-5x"></i>
                            <h5>Take Fees</h5>
                        </a>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="main-box mb-red">
                        <a href="report.php">
                            <i class="fa fa-file-text fa-5x"></i>
                            <h5>Report</h5>
                        </a>
                    </div>
                </div>


            </div>
            <!-- /. ROW  -->


        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        Online School Fees Payment System | Developed By : <a href="" target="_blank">Create Networks NG</a>
    </div>';
    } else {

        echo '
       <div>
           <h1> Hello world </h1>
       </div>';
    }
    ?>
    </div>

</body>

</html>