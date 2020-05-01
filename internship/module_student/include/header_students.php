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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../assets/js/validate.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
           <b>Welcome:<?php echo $_SESSION['user'] ?></b>
           <b style= "margin-left:10px">Email:<?php echo $_SESSION['email'] ?></b>
           


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
               
                
                <div class="form-group" style="margin-right:10px;margin-top:7px">
                <?php
                    $id = $_SESSION['id'];
                    $sql ="SELECT count(*) as total from government_internship_apply where student_uid = '$id'";
                    $res = mysqli_query($conn,$sql);
                    if($res){
                        while($row = mysqli_fetch_assoc($res)){
                echo' 
                    <b>Government Internships Applied: '.$row['total'].' Application Limit: 7</b>';
                    }
                }
                    ?>
                </div>
                <div class="form-group" style="margin-right:10px;margin-top:7px">
                    <a href="#">help</a>
                </div>
                <div class="form-group" style="margin-right:10px;margin-top:7px">
                    <a href="logout.php">logout</a>
                </div>
                
                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
            </ul>
        </nav>
        <aside style="background-image: -webkit-linear-gradient(47deg, rgb(238, 130, 25) 0px, rgb(239, 69, 89) 100%);" class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <img src="../assets/images3/internshiplogo.png" style="width:250px" alt="User Image">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!-- <div class="image">
                        <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div> -->
                 <!--    <div class="info">
                        
                    </div> -->
                </div>
                <!-- Sidebar Menu -->
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
                            <a href="./user_profile_student.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Profile
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./offer.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    View Offer
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./interview_student.php?level=1" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Private Internships
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./interview_student.php?level=2" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Government Internships
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./chat_profile_student.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p class="text-light font-weight-bold">
                                    Messaging
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.sidebar -->
        </aside>