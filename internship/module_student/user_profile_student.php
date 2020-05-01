<?php 
include './include/auth.php';
include './include/header_students.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <?php 
               /*  $id=$_GET['id'];
                $sql = "SELECT * FROM student_register WHERE id='$id'";
                $res = mysqli_query($conn,$res);
                while($row=mysqli_fetch_assoc($res))
                { */
              ?>
    
        <?php 
               $id=$_SESSION['id'];
                $sql = "SELECT * FROM student_register WHERE student_uid='$id'";
                $res = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($res))
                { 
    ?>
    <div class="content-wrapper">
        <section class="mt-4 mb-4" id="profile">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- START -->
                        <!-- Card -->
                        <div class="card">
                            <!-- Card content -->
                            <div class="card-body">
                            <a href="./edit_profile_user.php"
                                    class="btn float-left btn-primary btn-lg">
                                     Edit
                                </a>
                                <button data-toggle="modal" data-target="#basicExampleModal"
                                    class="btn float-left btn-primary btn-lg">
                                    <i class="fas fa-share-alt"></i> Share
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Share On</h5>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <button class="btn btn-block btn-primary">Facebook</button>
                                                <button class="btn btn-block mt-2 btn-info">Twitter</button>
                                                <button class="btn btn-block mt-2 btn-danger">Google</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <center>
                                <div class="avatar mx-auto white">
                            
                              <img style="width: 18%;" src="../uploads/profile/<?php echo $row['student_profile_photo'];?>" class="rounded-circle"
                              alt="men avatar">
                            
                            </div>
                            </center>

                                <!-- Title -->
                                <h3><b><?php echo $row['student_first_name'].$row['student_last_name']?></b></h3 ><br>
                                <!-- Text -->
                                <h4><?php echo $row['institute_name']?></h4>
                                <p style="font-size:15px" class="card-text mt-4">
                                    <i class="fas fa-envelope"></i><?php echo $row['student_email']?><br>
                                    <i class="fas fa-phone mt-2"></i> +91<?php echo $row['student_contact']?> <br>
                                </p>
                                <!-- Button -->

                                <a href="../uploads/resume/resume<?php echo $id?>.pdf"  target="_blank" class="card-link" >Download Resume</a> <a href="<?php echo $row['link']?>" target="_blank" class="card-link">View
                                    Link</a>

                            </div>
                        </div>
                        <!-- Card -->
                        <?php
                        if($row['student_description']!=" "){
                        ?>
                        <!-- Card -->
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>About Me</b></h4>
                                <h4>
                                <?php echo $row['student_description']?>
                                </h4>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Education Details</b></h4>
                                <!-- Text -->
                                <h4>
                                <table class="table" style="font-size:20px">
                                <thead>
                                  <tr>
                                    <th style="font-size:15px"scope="col">Qualification</th>
                                    <th style="font-size:15px"scope="col">Name Of Institute</th>
                                    <th style="font-size:15px"scope="col">Marks</th>
                                    <th style="font-size:15px"scope="col">Year</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row" style="font-size:15px">10th</th>
                                    <td style="font-size:15px"><?php echo $row['student_10th_school']?></td>
                                    <td style="font-size:15px"><?php echo $row['student_10th_marks']?></td>
                                    <td style="font-size:15px"><?php echo $row['student_10th_year']?></td>
                                  </tr>
                                  <tr>
                                    <th scope="row"style="font-size:15px">12th</th>
                                    <td style="font-size:15px"><?php echo $row['student_12th_school']?></td>
                                    <td style="font-size:15px"><?php echo $row['student_12th_marks']?></td>
                                    <td style="font-size:15px"><?php echo $row['student_12th_year']?></td>
                                  </tr>
                                  <h4>
                                  <tr>
                                    <th style="font-size:15px" scope="row">Graduation</th>
                                    <td style="font-size:15px"><?php echo $row['institute_name']?></td>
                                    <td style="font-size:15px"><?php echo $row['student_graduating_marks']?></td>
                                    <td style="font-size:15px"><?php echo $row['student_graduating_year']?></td>
                                  </tr>
                                  </h4>
                                  </tbody>
                                  </table>
                                
                                <!-- Button -->
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <?php if($row['student_carrer_intrest']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>General Career Interest Categories</b></h4>
                                <!-- Text -->
                                <h4>
                                <br>
                                    <span class="badge badge-pill badge-primary"style="font-size:15px"><?php echo $row['student_carrer_intrest']?></span>
                                </h4>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->

                        <!-- Card -->
                        <?php if($row['student_languages']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Languages Known</b></h4>
                                <!-- Text -->
                                <h4>
                                <br>
                                    <span class="badge badge-pill badge-success" style="font-size:15px"><?php echo $row['student_languages']?></span>
                                </h4>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->

                        <!-- Card -->
                        <?php if($row['student_skills']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Skills</b></h4>
                                <br>
                                <!-- Text -->
                                <h4><?php echo $row['student_skills']; ?></h4>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->


                        <!-- Card -->
                        <?php if($row['events_and_research']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Participation in Hackthons & Events</b></h4>
                                <br>
                                <!-- Text -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-size:15px"><?php echo $row['student_events'];?></li>
                                </ul>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->

                        <!-- Card -->
                        <?php if($row['publication_and_research']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Publication & Research</b></h4>
                                <br>
                                <!-- Text -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="font-size:15px"><?php echo $row['publication_and_research'];?></li>
                                </ul>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->


                        <!-- Card -->
                        <?php if($row['student_work_and_volunteer']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Work & Volunteer Experience</b></h4>
                                <!-- Text -->
                                <p class="card-text" style="font-size:15px">
                        <?php echo $row['student_work_and_volunteer']; ?>
                                    <br>
                                </p>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->

                        <!-- Card -->
                        <?php if($row['internship_experience']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Internship Experience</b></h4>
                                <!-- Text -->
                                <p class="card-text" style="font-size:15px">
                                <?php echo $row['internship_experience']; ?>
                                </p>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->
                        <!-- Card -->
                        <?php if($row['student_work_and_volunteer']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Student Organisation & Activities</b></h4>
                                <!-- Text -->
                                <h4>
                                <br>
                                    <span class="badge badge-pill badge-info" style="font-size:15px"> <?php echo $row['student_work_and_volunteer']; ?></span>
                                </h4>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->

                        <!-- Card -->
                        <?php if($row['student_hobbies']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Hobbies & Interest</b></h4>
                                <!-- Text -->
                                <h4>
                                    <span class="badge badge-pill badge-info"style="font-size:15px"><?php echo $row['student_hobbies ']; ?></span>
                                </h4>
                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>
                        <!-- Card -->
                        <!-- Card -->
                        <?php if($row['student_sports']!=" "){?>
                        <div class="card mt-2">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4><b>Sports Acheivement(If Any)</b></h4>
                                <!-- Text -->
                                <h4>
                                    <span class="badge badge-pill badge-info"style="font-size:15px"><?php echo $row['student_sports']; ?></span>
                                 
                                </h4>

                                <!-- Button -->
                            </div>
                        </div>
                        <?php }?>



                        <!-- END -->
                    </div>
                </div>

            </div>
        </section>
    </div>
    </div>
                        <?php }?>
    
    <!-- JQuery -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 -->
    <!-- Bootstrap tooltips -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
 -->
    <!-- Bootstrap core JavaScript -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
    <!-- MDB core JavaScript -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script> -->
</body>

</html>