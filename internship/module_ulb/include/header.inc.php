<?php include '../src/php/dbh.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title>
        AICTE Internship | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
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
    <link rel="stylesheet" href="../asssets/build/scss/_modal.scss">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../assets/js/sweetalert.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../assets/js/validate.js"></script>

</head>
<?php if(isset($_SESSION['loggedIn']))
{ 
/* Header For ULB  */
if($_SESSION['login_level']==2)
{
?>

                        <body class="hold-transition sidebar-mini layout-fixed">
                            <div class="wrapper">
                                <!-- Navbar -->
                                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                                    <!-- Left navbar links -->
                                    <b>Welcome:<?php echo $_SESSION['organisation'] ?></b>
                                    <b style="margin-left:10px">Name:<?php echo $_SESSION['user'] ?></b>
                                    <b style="margin-left:10px">Email:<?php echo $_SESSION['email'] ?></b>
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
                                <aside style="background: #ffffff;
background: linear-gradient(50deg, rgba(23,119,76,1) 0%, #ffffff 100%); box-shadow: rgba(239, 139, 117, 0.6) 0px 8px 29px 0px;" class="main-sidebar sidebar-light-primary elevation-4">
<center>
    <img src="./Dashboard/Tulip/extra-images/logo1.png"alt="User Image" style="width:150px">
    </center>    
    <!-- Sidebar -->
                                    <div class="sidebar">
                                        <!-- Sidebar user panel (optional) -->
                                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                            
                                            <!-- <div class="info">
                                                <b class="d-block text-light">
                                                    <?php echo $_SESSION['user'];  ?>
                                                    </br>
                                                    <?php echo $_SESSION['email'];  ?>
                                                </b>
                                            </div> -->
                                        </div>
                                    <!-- Admin Rights -->
<?php  if($_SESSION['role']==1)
{
?>                                     
                                        <nav class="mt-2">
                                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                                role="menu" data-accordion="false">
                                                <li class="nav-item">
                                                    <a href="./index_dashboard.php" class="nav-link">
                                                        <i class="far fa-circle nav-icon"></i>
                                                        <p class="text-light font-weight-bold">Dashboard</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="./profile.php" class="nav-link">
                                                        <i class="nav-icon fas fa-th"></i>
                                                        <p class="text-light font-weight-bold " style="font-color:#ede510">
                                                            Profile
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="./add_admin.php" class="nav-link">
                                                        <i class="nav-icon fas fa-th"></i>
                                                        <p class="text-light font-weight-bold">
                                                            Admin Management
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="./simple_post_internship.php" class="nav-link">
                                                        <i class="nav-icon fas fa-th"></i>
                                                        <p class="text-light font-weight-bold">
                                                            Post Internship
                                                        </p>
                                                    </a>
                                                </li>

                                               <!--  <li class="nav-item">
                                                    <a href="./total_interns_applied.php" class="nav-link">
                                                        <i class="nav-icon fas fa-th"></i>
                                                        <p class="text-light font-weight-bold">
                                                            Total Interns Applied
                                                        </p>
                                                    </a>
                                                </li> -->
                                               

                                                <li class="nav-item">
                                                    <a href="./interview_management.php" class="nav-link">
                                                        <i class="nav-icon fas fa-th"></i>
                                                        <p class="text-light font-weight-bold">
                                                            Internship Management
                                                        </p class="text-light font-weight-bold">
                                                    </a>
                                                </li>
                                                
                                               <!--  <li class="nav-item">
                                                    <a href="./internships.php" class="nav-link">
                                                        <i class="nav-icon fas fa-th"></i>
                                                        <p class="text-light font-weight-bold">
                                                            Internships
                                                        </p>
                                                    </a>
                                                </li> -->

                                              <!--   <li class="nav-item">
                                                    <a href="./reports.php" class="nav-link">
                                                        <i class="nav-icon fas fa-th"></i>
                                                        <p class="text-light font-weight-bold">
                                                            Report
                                                        </p>
                                                    </a>
                                                </li>   -->
    

                                               
                                                <li class="nav-item">
                                                    <a href="./completed_internship.php" class="nav-link">
                                                        <i class="nav-icon fas fa-th"></i>
                                                        <p class="text-light font-weight-bold">
                                                            Internships Completed
                                                        </p>
                                                    </a>
                                                </li>

                        <!-- Below is the right for creating Internship With Internship Management --> 

<?php }  if($_SESSION['role']==2)
{
?>

                                                <nav class="mt-2">
                                                    <ul class="nav nav-pills nav-sidebar flex-column"
                                                        data-widget="treeview" role="menu" data-accordion="false">
                                                        <li class="nav-item">
                                                            <a href="./index_dashboard.php" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p class="text-light font-weight-bold">Dashboard</p>
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
                                                            <a href="./simple_post_internship.php" class="nav-link">
                                                                <i class="nav-icon fas fa-th"></i>
                                                                <p class="text-light font-weight-bold">
                                                                    Post Internship
                                                                </p>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a href="./total_interns_applied.php" class="nav-link">
                                                                <i class="nav-icon fas fa-th"></i>
                                                                <p class="text-light font-weight-bold">
                                                                    Total Interns Applied
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

                    <!-- Below is Right With Only Creating Internship -->
<?php
}
if($_SESSION['role']==3)
{
?>

                                                <nav class="mt-2">
                                                    <ul class="nav nav-pills nav-sidebar flex-column"
                                                        data-widget="treeview" role="menu" data-accordion="false">
                                                        <li class="nav-item">
                                                            <a href="./index_dashboard.php" class="nav-link">
                                                                <i class="far fa-circle nav-icon"></i>
                                                                <p >Dashboard</p>
                                                            </a>
                                                        </li>


                                                        <li class="nav-item">
                                                            <a href="./internships.php" class="nav-link">
                                                                <i class="nav-icon fas fa-th"></i>
                                                                <p>
                                                                    Internships (187)
                                                                </p>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a href="./simple_post_internship.php" class="nav-link">
                                                                <i class="nav-icon fas fa-th"></i>
                                                                <p>
                                                                    Post Internship
                                                                </p>
                                                            </a>
                                                        </li>
<?php
}
}
}
?>

                                                        <!-- /.sidebar -->
                                </aside>