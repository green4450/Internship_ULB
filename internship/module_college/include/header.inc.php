<?php include '../src/php/dbh.php';?>
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
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <b> Logged In As : <?php echo $_SESSION['user'] ?> </b>
            <b style="margin-left:10px"> Email : <?php echo $_SESSION['email'] ?></b>
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

        <aside style="background: rgb(0,191,254);
background: linear-gradient(90deg, rgba(0,191,254,1) 0%, rgba(160,106,232,1) 100%);" class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./index.php" class="brand-link">
            <img src="../assets/images3/internshiplogo.png" style="width:250px" alt="User Image">
            </a>
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
                            <a href="./student_mangement.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Student Management
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./add_college_role.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Admin Management
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./add_student.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Add Students
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./campus-interview.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Campus Interview Management
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./placed_students.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Placed Students
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./reports.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Report
                                </p>
                            </a>
                        </li>

                        <!-- /.sidebar -->
        </aside>