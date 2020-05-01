<?php
include './include/auth.php';
include './include/header_students.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Internship Details</h1>
                        </div>
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="interview_student.php">Home</a></li>
                                <li class="breadcrumb-item active">All Interviews</li>
                            </ol>
                        </div> -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">


                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Interviews</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <!-- <a target="_blank" href="https://www.google.com/maps/@28.535427,77.155449,16z" class="btn ml-2 btn-sm btn-outline-success">
                                        Google Maps
                                    </a> --> 
                    <?php 
    $id = $_GET['uid'];
    $sql = "SELECT * FROM post_internship_government Where uid = '$id'";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
                echo '<div class="card-body mt-2">
                        <div class="card">
                        <div class="card-body">
                            <span class="float-right">
                                <p>
                                  
                                </p>
            
                            </span>
                            <br />
                            <h3>'.$row['title'].'</h3>
                            <br>
                            <h5 class="mt-2 font-weight-bold text-success">Stipend: Rs. '.$row['stiphen'].'</h5>
                            <h5 class="mt-2">Email: ' .$row['email'].'</h5>
                            <h5 class="mt-2">Phone No: '.$row['phone'].'</h5>
                            <h5 class="mt-2">locations: '.$row['locations'].'</h5>
                            <h5 class="mt-2">Department: ' .$row['department'].'</h5>
                            <br/>
                            <h4>
                            Who Can Apply
                            </h4>               
                            <p class="card-text mt-2">
                                '.$row['qualification'].' '.$row['specialisation'].'
                            </p>
                            <br/>
                            <h4>
                            Description
                            </h4>               
                            <p class="card-text mt-2">
                                '.$row['description'].'
                            </p>
                            <br/>
                            <h4>
                            Terms Of Engagement
                            </h4> 
                            <p class="card-text mt-2">
                                '.$row['terms_of_enagement'].'
                            </p>
                            <br/>
                            <h4>
                            Perks
                            </h4> 
                            <p class="card-text mt-2">
                                '.$row['eligibility'].'
                            </p>
                            <center>
                            <a href="./apply.php?uid='.$row['uid'].'&company_id='.$row['company_id'].'&level=2" class="btn btn-success">Apply</a>
                            </center>
                        </div>
                        </div>
                    </div>';
    }
    ?>
            </section>
        </div>
    </section>

</body>

</html>