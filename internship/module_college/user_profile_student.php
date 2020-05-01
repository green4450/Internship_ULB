<?php 
include './include/auth.php';
include './include/header.inc.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
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
              <div class="content-wrapper">       
<section class="mt-4 mb-4" id="profile">

<div class="container">

    <div class="row">
        <div class="col-4">
            <!-- Start -->
                <!-- Card Regular -->
                <div class="card card-cascade sticky-top">
                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg" alt="Card image cap">
                    <a>
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                             

                    <!-- Title -->
                    <h4 class="card-title"><strong>Akash Pandey</strong></h4>
                    <!-- Subtitle -->
                    <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
                    <!-- Text -->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae.
                    Facere modi sunt, quod quibusdam.
                    </p>

                    <!-- Linkedin -->
                    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                    <!-- Twitter -->
                    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                    <!-- Dribbble -->
                    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

                </div>

                <!-- Card footer -->
                <div class="card-footer text-muted text-center">
                    2 days ago
                </div>

                </div>
                <!-- Card Regular -->
            <!-- END -->
        </div>
        <div class="col">
            <!-- START -->
                <!-- Card -->
                    <div class="card">
                        <!-- Card content -->
                        <div class="card-body">
                        <button data-toggle="modal" data-target="#basicExampleModal" class="btn float-right btn-primary btn-sm">
                            <i class="fas fa-share-alt"></i> Share
                        </button>
                        <a href="./edit_profile_user.php" class="btn float-right btn-primary btn-sm"> Edit</a>

                        <!-- Modal -->
                        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Share On</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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


                            <!-- Title -->
                            <h4 class="card-title"><?php echo $_SESSION['user'];?></h4>
                            <!-- Text -->
                            <h5>Graphic Era Deemed to be University</h5>
                            <p class="card-text mt-4">
                            <i class="fas fa-envelope"></i> <?php echo $_SESSION['email']?> <br>
                            <i class="fas fa-fax mt-2"></i> 9283 2736 1839 2837 <br>
                            <i class="fas fa-phone mt-2"></i> +91 7060133531 <br>
                            </p>
                            <!-- Button -->

                            <a href="#" class="card-link">Download Resume</a> <a href="#" class="card-link">View GitHub</a>  <a href="#" class="card-link">View Figma</a>

                        </div>
                    </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Introduction</h4>
                            <!-- Text -->
                            <br>
                            <h6>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            <br>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            </h6>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">General Carrer Interest Categories</h4>
                            <!-- Text -->
                            <h4>
                                <span class="badge badge-pill badge-primary">Python with Machine Learning</span>
                                <span class="badge badge-pill badge-primary">UI/UX</span>
                                <span class="badge badge-pill badge-primary">Content Writing</span>
                                <span class="badge badge-pill badge-primary">Marketing & Sales</span>
                                <span class="badge badge-pill badge-primary mt-3">DevOps with Kubernetes</span>
                                <span class="badge badge-pill badge-primary">Docker</span>
                                <span class="badge badge-pill badge-primary">Hadoop</span>
                            </h4>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Acadmic & Carrier Related Integrest</h4>
                            <!-- Text -->
                            <h4>
                                <span class="badge badge-pill badge-success">Web Devlopment</span>
                                <span class="badge badge-pill badge-success">Designing</span>
                                <span class="badge badge-pill badge-success">Solution Architect</span>
                                <span class="badge badge-pill badge-success">Leader</span>
                            </h4>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                <div class="row mt-2">
                    <div class="col">
                        <!-- Card -->
                        <div class="card card-image"
                        style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                            <div>
                            <h5 class="pink-text"><i class="fas fa-chart-pie"></i>Recommendation in Marketing</h5>
                            <h3 class="card-title pt-2"><strong>Marketing for SalesForce</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!.</p>
                            <a class="btn btn-pink"><i class="fas fa-clone left"></i> View project</a>
                            </div>
                        </div>

                        </div>
                        <!-- Card -->
                    </div>
                </div>


                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Skills</h4>
                            <!-- Text -->
                            <h6>Programming Languages: Python, Ruby, Swift</h6>
                            <h6>Other Task: JavaScript</h6>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                
                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Participation in Hackthons & Events</h4>
                            <!-- Text -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Smart India Hackthon (National level)</li>
                                <li class="list-group-item">Google Summer of Code (International Level)</li>
                                <li class="list-group-item">Google Code JAM (International Level)</li>
                                <li class="list-group-item">HackWithInfy (National Level)</li>
                                <li class="list-group-item">Adobe Hackthon (National Level)</li>
                            </ul>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Publication & Research</h4>
                            <!-- Text -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Research with Kubernetes</li>
                                <li class="list-group-item">Research with Docker</li>
                                <li class="list-group-item">Research with Hadoop</li>
                                <li class="list-group-item">Research with ApacheSpark</li>
                            </ul>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->


                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Work & Volunteer Experience</h4>
                            <!-- Text -->
                            <p class="card-text">
                                1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!.
                                <br>
                                2. Lorem ipsum dolor sit amet.
                            </p>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Internship Experience</h4>
                            <!-- Text -->
                            <p class="card-text">
                                Microsoft: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!.
                                <br>
                                AICTE: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                Odit sed qui, dolorum!.
                                
                            </p>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                <div class="mt-2">

                    <!-- Jumbotron -->
                    <div class="card blue-gradient py-2" id="intro">

                        <!-- Content -->
                        <div class="card-body text-white text-center">

                        <h2 class="mb-4 font-weight-bold">
                            Work Experience with Microsoft
                        </h2>
                        <p class="mb-4">
                            <strong>
                                Working on Batch Processes on Operating System.
                                Working on Batch Processes on Operating System.
                                Working on Batch Processes on Operating System.
                            </strong>
                        </p>
                        <a target="_blank" href="https://flutter.dev/" class="btn btn-outline-white btn-rounded">
                            View my Work
                            <i class="fas fa-graduation-cap ml-2"></i>
                        </a>

                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Jumbotron -->
                
                </div>

                

                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Student Organization & Activitites</h4>
                            <!-- Text -->
                            <h4>
                                <span class="badge badge-pill badge-info">Web Devlopment</span>
                                <span class="badge badge-pill badge-info">Designing</span>
                                <span class="badge badge-pill badge-info">Solution Architect</span>
                                <span class="badge badge-pill badge-info">Leadership</span>
                                <span class="badge badge-pill badge-info">Android</span>
                                <span class="badge badge-pill badge-info mt-2">Comunication Skills</span>
                                <span class="badge badge-pill badge-info mt-2">Accounting</span>
                                <span class="badge badge-pill badge-info mt-2">Singing</span>
                            </h4>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mt-2">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">Hobbies & Interest</h4>
                            <!-- Text -->
                            <h4>
                                <span class="badge badge-pill badge-info">Watching News</span>
                                <span class="badge badge-pill badge-info">Dealing with News</span>
                                <span class="badge badge-pill badge-info">Listning News</span>
                                <span class="badge badge-pill badge-info">Plitical Leader</span>
                            </h4>
                            <!-- Button -->
                        </div>
                </div>
                <!-- Card -->

                

            <!-- END -->
        </div>
    </div>

</div>
</section>
</div>

                <?php /* } */?>
<!-- JQuery -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 --><!-- Bootstrap tooltips -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
 --><!-- Bootstrap core JavaScript -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
<!-- MDB core JavaScript -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script> -->
</body>
</html>