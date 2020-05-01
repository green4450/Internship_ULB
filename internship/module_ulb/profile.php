<?php 
include './include/auth.php';
include './include/header.inc.php';
$id = $_SESSION['id'];
?>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Internship</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper overflow-hidden">
        <!-- Content Header (Page header) -->

        <section>
            <div class="container bootstrap snippet">
                <div class="row">
                    <div class="col-sm-10">
                        <h1>
                           ULB / Smart City Profile
                        </h1>
                    </div>
                    <div class="col-sm-2"><a href="/users" class="pull-right">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <!--left col-->


                        <div class="text-center">
                            <?php
                            $id = $_SESSION['id'];
                                $sql = "SELECT ulb_logo From ubl_register WHERE ulb_company_id = '$id'";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                            ?>
                            <img src="../uploads/logo/<?php echo $row['ulb_logo']?>"
                                class="avatar img-circle img-thumbnail" alt="avatar">
                                <?php }?>
                            <h6>Upload a Different Logo(Size<1MB)</h6>
                            <form action="./src/php/main.php" method="post" enctype="multipart/form-data" >
                            <input type="file" class="text-center center-block file-upload" id="logo" name="logo">
                            <input type="submit" value="submit" id="upload_logo" name="upload_logo">
                            </form>
                        </div>
                    </div>
                    <!--/col-3-->
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#personal">ULB / Smart City Details</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                                <hr>
                                <?php
                                $sql = "SELECT * FROM ubl_register WHERE ulb_company_id = '$id'";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                                echo '
                                <form action="./src/php/main.php" method="post">
                                <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Organisation Reference ID</h4>
                                            </label>
                                            <input type="text" class="form-control border border-dark" name="organisation_id" id="organisation_id"
                                                placeholder="first name" title="enter your first name if any."
                                                value="'.$row['ulb_company_id'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>First name</h4>
                                            </label>
                                            <input type="text" class="form-control border border-dark" name="first_name" id="first_name"
                                                placeholder="first name" title="enter your first name if any."
                                                value="'.$row['ulb_first_name'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>Last name</h4>
                                            </label>
                                            <input type="text" class="form-control border border-dark" name="last_name" id="last_name"
                                                placeholder="last name" title="enter your last name if any."
                                                value="'.$row['ulb_last_name'].'">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mobile">
                                                <h4>Mobile Number</h4>
                                            </label>
                                            <input type="text" class="form-control border border-dark" name="mobile" id="mobile"
                                                placeholder="enter mobile number"
                                                title="enter your mobile number if any." value=
                                                "'.$row['ulb_contact_num'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="password2">
                                                <h4>Organisation Name</h4>
                                            </label>
                                            <input type="text" class="form-control border border-dark" name="organisation_name" id="organisation_name"
                                                placeholder="course" title="enter your course." value="'.$row['ulb_organisaton'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="password2">
                                                <h4>Email</h4>
                                            </label>
                                            <input type="text" class="form-control border border-dark" name="email" id="email"
                                            placeholder="course" title="enter your course." value="'.$row['ulb_email'].'" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="password2">
                                                <h4>State</h4>
                                            </label>
                                            <input type="text" class="form-control border border-dark" name="ulb_state" id="ulb_state"
                                                placeholder="student_id" title="enter your student_id."
                                                value="'.$row['ulb_state'].'">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="password2">
                                                <h4>City</h4>
                                            </label>
                                            <input type="text" class="form-control border border-dark" name="ulb_city" id="ulb_city"
                                                placeholder="student_id" title="enter your student_id."
                                                value="'.$row['ulb_city'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit" name="update_profile"
                                            id="update_profile"><i class="glyphicon glyphicon-ok-sign"></i>
                                            Save</button>
                                        <button class="btn btn-lg btn-success" type="reset"><i
                                                class="glyphicon glyphicon-repeat"></i> Reset</button>
                                    </div>
                                </div>
                                </form>';
                                }
                                ?>
                                <hr>
                            </div>
                            <!--/tab-pane-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>