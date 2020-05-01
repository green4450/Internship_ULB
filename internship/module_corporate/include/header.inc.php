<?php include '../src/php/dbh.php'?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AICTE Internship | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <b> Logged In As : <?php echo $_SESSION['user']; ?></b>
            <b style="margin-left:10px"> Email :<?php echo $_SESSION['email'];  ?></b>
            <!-- SEARCH FORM -->
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <div class="form-group" style="margin-right:10px;margin-top:7px">
                    <a href="#">help</a>
                </div>

                <div class="form-group" style="margin-right:10px;margin-top:7px">
                    <a href="logout.php">logout</a>
                </div>
                <!-- Notifications Dropdown Menu -->
                </li>
            </ul>
        </nav>
        <!-- Header For Admin -->
        <aside style="background: rgb(29,23,119);
background: linear-gradient(90deg, rgba(29,23,119,1) 0%, rgba(32,109,251,1) 100%);

" class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
                        <img src="../assets/images3/internshiplogo.png"  style="width: 250px;" alt="User Image">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!-- <div class="image">
                        <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div> -->
                   <!--  <div class="info">
                        <a class="text-light"href="./company_profile.php" class="d-block">
                            <?php /* echo $_SESSION['user']; */  ?>
                            </br>
                            <?php /* echo $_SESSION['email'];  */ ?>
                        </a>

                    </div> -->
                </div>


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="./index_dashboard.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="text-light font-weight-bold">Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./company_profile.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./post_internship.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Post Internship
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./internships.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Internships (187)
                                </p>
                            </a>
                        </li>

                       

                        <li class="nav-item">
                            <a href="./interview_management.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Interviews Management
                                </p>
                            </a>
                        </li>

 
                        <li class="nav-item">
                            <a href="./chat_profile.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Messaging 
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./projects.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Internship Management System
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./search_institute.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Campus Interview
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./industry_problems.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Industry Problems
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./comapny-solution.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Solutions Submitted
                                </p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="./solutions.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Solutions
                                </p>
                            </a>
                        </li> -->

                       <!--  <li class="nav-item">
                            <a href="./challenges.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Challenges
                                </p>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="./admin.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Admin
                                </p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="./mentor.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Mentors
                                </p>
                            </a>
                        </li> -->

                        <!-- Drop down will be selected by interns all submit application submited -->
                        <li class="nav-item">
                            <a href="./reports.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Reports
                                </p>
                            </a>
                        </li>
                        <!-- /.sidebar -->
        </aside>