<?php
session_start();
require("connection.php");


if(!isset($_SESSION["user_id"]))
{
header("location:login.php");

}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile Exam</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/css/sweetalert2.min.css" rel="stylesheet" />
   <script src="assets/js/sweetalert2.min.js"></script>
   <script src="jquery-3.2.1.min.js"></script>
</head>
<body>



    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">Mobile Exam</div>
            </div>

            <ul class="nav navbar-right">
              <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
              <ul>



        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="#"><i class="fa fa-book"></i>Test<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_test.php">Add Test</a>
                            </li>
                            <li>
                                <a href="view_test.php">View Test</a>
                            </li>

                              </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i>Exam Questions<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_questions.php">Add Questions</a>
                            </li>
                            <li>
                                <a href="view_questions.php">View Questions</a>
                            </li>

                              </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-user"></i>Teachers<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view_teachers.php">View Teachers</a>
                            </li>

                              </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-female"></i>Students<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="view_students.php">View Students</a>
                            </li>

                              </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-table"></i>Results<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="view_results.php">View Results</a>
                            </li>

                              </ul>
                    </li>





                </ul>

            </div>

        </nav>
