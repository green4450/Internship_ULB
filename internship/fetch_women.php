<?php include './src/php/dbh.php';?>
<?php include './include/header_new.php';?>

    <!-- END nav -->


    <div class="hero-wrap img" style="background-image: url(./assets/images3/bg_1.jpg);">
        <!--  <div class="overlay"></div> -->
        <div class="container">
            <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-10 d-flex align-items-center ftco-animate">
                    <div class="text text-center pt-5 mt-md-5 _newTpDiv">
                    <div class="ftco-counter ftco-no-pt ftco-no-pb">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-worldwide"></span>
                                        </div>
                                        <?php
                                        $sql = "SELECT count(*) as total from `post_internship_government`,tblipinternshala,tblipinternshala3";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        
                                        echo '<div class="desc text-left">
                                            <strong class="number" data-number='.$row['total'].'>0</strong>
                                            <span>Total Internships</span>
                                        </div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-visitor"></span>
                                        </div>
                                        <?php
                                        $sql = "SELECT count(*) as total from internhip_apply ";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        echo '<div class="desc text-left">
                                        <strong class="number" data-number='.$row['total'].'></strong>
                                        <span>Student Got Internships</span>
                                    </div>';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-resume"></span>
                                        </div>
                                        <?php
                                        $sql = "SELECT count(*) as total from corporate_register";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        echo ' <div class="desc text-left">
                                        <strong class="number" data-number='.$row['total'].'>0</strong>
                                        <span>Total Companies</span>
                                    </div>';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="ftco-search my-md-5">
                            <div class="row">
                                <div class="col-md-12 nav-link-wrap">
                                    <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                            href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                            aria-selected="true">Find a Internship</a>

                                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                            role="tab" aria-controls="v-pills-2" aria-selected="false">Find a
                                            Candidate</a>

                                    </div>
                                </div>
                                <div class="col-md-12 tab-wrap">
                                    <div class="tab-content p-4" id="v-pills-tabContent">

                                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                            aria-labelledby="v-pills-nextgen-tab">
                                            <form method="post" class="search-job">
                                                <div class="row no-gutters">
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-briefcase"></span>
                                                                </div>
                                                                <input type="text" id="company" name="company"
                                                                    class="form-control border border-dark"
                                                                    placeholder="eg. Garphic. Web Developer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="category" id="category"
                                                                        class="form-control border border-dark">
                                                                        <option value="Part Time">Part Time</option>
                                                                        <option value="Full Time" selected>Full Time
                                                                        </option>
                                                                        <option value="Cooperative Education">
                                                                            Cooperative
                                                                            Education</option>
                                                                        <option value="Experience Learning">Experience
                                                                            Learning</option>
                                                                        <option value="On Campus Student Employement">On
                                                                            Campus Student Employement</option>
                                                                        <option value="Fellowship">Fellowship</option>
                                                                        <option value="Research">Research</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-map-marker"></span>
                                                                </div>

                                                                <?php 
                                                                include './search_city.php';
                                                            ?>

                                                                <!-- <input type="text" id="location" name="location"
                                                                class="form-control border border-dark"
                                                                placeholder="Location"> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  <div class="col-md mr-md-2">
                                                    <div class="form-group">
                                                        <div class="form-field">
                                                            <select name="type" id="type"
                                                                class="form-control border border-dark">
                                                                <option value="Private">Private</option>
                                                                <option value="Government">Government</option>
                                                            </select>
                                                        </div>  
                                                    </div>
                                                </div> -->
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <button type="submit"
                                                                    class="form-control btn border-0 btn-primary"
                                                                    id="search_InternshipBtn"
                                                                    name="search_InternshipBtn">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                            aria-labelledby="v-pills-performance-tab">
                                            <form action="#" class="search-job">
                                                <div class="row">
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-user"></span></div>
                                                                <input type="text" class="form-control"
                                                                    placeholder="eg. Adam Scott">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="select-wrap">
                                                                    <div class="icon"><span
                                                                            class="ion-ios-arrow-down"></span></div>
                                                                    <select name="" id="" class="form-control">
                                                                        <option value="">Category</option>
                                                                        <option value="">Full Time</option>
                                                                        <option value="">Part Time</option>
                                                                        <option value="">Freelance</option>
                                                                        <option value="">Internship</option>
                                                                        <option value="">Temporary</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="icon"><span class="icon-map-marker"></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Location">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <button type="submit"
                                                                    class="form-control btn btn-primary">Search</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="category-wrap">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <div class="top-category text-center no-border-left">
                                    <h3><a href="#">Website &amp; Software</a></h3>
                                    <span class="icon flaticon-contact"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center active">
                                    <h3><a href="#">Education &amp; Training</a></h3>
                                    <span class="icon flaticon-mortarboard"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center">
                                    <h3><a href="#">Graphic &amp; UI/UX Design</a></h3>
                                    <span class="icon flaticon-idea"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center">
                                    <h3><a href="#">Accounting &amp; Finance</a></h3>
                                    <span class="icon flaticon-accounting"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center">
                                    <h3><a href="#">Restaurant &amp; Food</a></h3>
                                    <span class="icon flaticon-dish"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="top-category text-center">
                                    <h3><a href="#">Health &amp; Hospital</a></h3>
                                    <span class="icon flaticon-stethoscope"></span>
                                    <p><span class="number">143</span> <span>Open position</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" style="background-color:#f1f0f0">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Internship Categories</span>
                    <h2 class="mb-0">Top Categories</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">
                        <li><a href="#">Internship by Company <br><span class="number">354</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Internship By Category <br><span class="number">100</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Internship for Woman<br><span class="number">90</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">
                        <li><a href="#">Internship by ULB<br><span class="number">354</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>

                        <li><a href="#">Online Internship <br><span class="number">100</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Internship in DM<br><span class="number">90</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">
                        <li><a href="#">Internship In J&K<br><span class="number">354</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Browse All Internship <br><span class="number">143</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Advertising <br><span class="number">90</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftco-animate">
                    <ul class="category text-center">
                        <li><a href="#">Internship For NHAI <br><span class="number">143</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Internship With BSNL <br><span class="number">143</span> <span>Open
                                    position</span><i class="ion-ios-arrow-forward"></i></a></li>
                        <li><a href="#">Multimedia <br><span class="number">100</span> <span>Open position</span><i
                                    class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light" style="background-color:#f1f0f0">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pr-lg-5">
                    <div class="row justify-content-center pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 style="font-color:#4f4f4f">ULB Internships</h2>
                            <!-- <h2 class="mb-4">Featured Internships Posts For This Week</h2> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="row" id="result">
                            <?php 
    include_once './src/php/dbh.php';
    if (isset($_POST['search_InternshipBtn'])) {
        $company = mysqli_real_escape_string($conn, $_POST['company']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $sql = "SELECT uid,title,internship_type,locations,ulb_organisaton FROM post_internship_government g inner join ubl_register a ON a.ulb_company_id = g.company_id WHERE internship_type LIKE '%$category%' and title LIKE '%$company%' and locations LIKE '%$location%'";
        $res = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
         echo'<div class="col-md-12 ftco-animate" style="overlay:hidden">
             <div class="job-post-item rounded p-4 d-block d-lg-flex align-items-center">
                 <div class="one-third mb-4 mb-md-0">
                     <div class="job-post-item-header align-items-center">
                         <span class="subadge">'.$row['internship_type'].'</span>
                         <h2 class="mr-3 text-black"><a href="#">'.$row['title'].'</a></h2>
                     </div>
                     <div class="job-post-item-body d-block d-md-flex">
                         <div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['ulb_organisaton'].'</a>
                         </div>
                         <div><span class="icon-my_location"></span> <span>'.$row['locations'].'</span></div>
                     </div>
                     <a href="./login_type.php" style="background-color: #24E0DD;" class="btn btn-primary py-2">Apply Internship</a>

                     <a href="Detail_profile.php?uid='.$row['uid'].'" class="btn btn-primary py-2">View Details</a>
                 </div>

                 <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                     <div>
                         <a href="#"
                             class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                             <span class="icon-heart"></span>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
         ';
         
        }

/*         $sql = "SELECT Distinct title,city,country,salary,StartDate,company,working_hours,url FROM tblipinternshala WHERE company LIKE '%$company%' and working_hours LIKE '%$category%' and city LIKE '%$location%';";
				   $res = mysqli_query($conn,$sql);
				   while($row = mysqli_fetch_assoc($res))
				   {
                    echo'<div class="col-md-12 ftco-animate" style="overlay:hidden">
                        <div class="job-post-item rounded p-4 d-block d-lg-flex align-items-center">
                            <div class="one-third mb-4 mb-md-0">
                                <div class="job-post-item-header align-items-center">
                                    <span class="subadge">'.$row['working_hours'].'</span>
									<h2 class="mr-3 text-black"><a href="#">'.$row['title'].'</a></h2>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['company'].'</a>
                                    </div>
                                    <div><span class="icon-my_location"></span> <span>'.$row['city'].','.$row['country'].'</span></div>
                                </div>
                                
                                <a href='.$row['url'].' style="background-color: #24E0DD;" class="btn btn-primary py-2">Apply Internship</a>

                            </div>

                            <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                <div>
                                    <a href="#"
                                        class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                        <span class="icon-heart"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>';
        } */
    } else {
				   $sql = "SELECT uid,title,internship_type,locations,ulb_organisaton,posted_on,stiphen FROM post_internship_government g inner join ubl_register a ON a.ulb_company_id = g.company_id ORDER BY `g`.`posted_on` DESC ;";
				   $res = mysqli_query($conn,$sql);
				   while($row = mysqli_fetch_assoc($res))
				   {
                    echo'<div class="col-md-12 ftco-animate" style="overlay:hidden">
                        <div class="job-post-item rounded p-4 d-block d-lg-flex align-items-center">
                            <div class="one-third mb-4 mb-md-0">
                                <div class="job-post-item-header align-items-center">
                                    <span class="subadge">'.$row['internship_type'].'</span>
									<h2 class="mr-3 text-black"><a href="#">'.$row['title'].'</a></h2>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['ulb_organisaton'].'</a>
                                    </div>
                                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['stiphen'].'</a>
                                    </div>
                                    <div><span class="icon-my_location"></span> <span>'.$row['locations'].'</span></div>
                                </div>
                                <a href="./login_type.php" style="background-color: #24E0DD;" class="btn btn-primary py-2">Apply Job</a>

                                <a href="Detail_profile.php?uid='.$row['uid'].'" class="btn btn-primary py-2">View Details</a>
                            </div>

                            <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                <div>
                                    <a href="#"
                                        class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                        <span class="icon-heart"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                }
                   /*  $sql = "SELECT title,city,country,salary,StartDate,company,working_hours,url FROM tblipinternshala";
                    $res = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($res))
                    {
                     echo'<div class="col-md-12 ftco-animate" style="overlay:hidden">
                         <div class="job-post-item rounded p-4 d-block d-lg-flex align-items-center">
                             <div class="one-third mb-4 mb-md-0">
                                 <div class="job-post-item-header align-items-center">
                                     <span class="subadge">'.$row['working_hours'].'</span>
                                     <h2 class="mr-3 text-black"><a href="#">'.$row['title'].'</a></h2>
                                 </div>
                                 <div class="job-post-item-body d-block d-md-flex">
                                     <div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['company'].'</a>
                                     </div>
                                     <div><span class="icon-my_location"></span> <span>'.$row['city'].','.$row['country'].'</span></div>
                                 </div>
                                 
                                 <a href='.$row['url'].' style="background-color: #24E0DD;" class="btn btn-primary py-2">Apply Internship</a>
                                 <a style="background-color: #24E0DD;" class="btn btn-primary py-2""data-toggle="modal" data-target="#exampleModal1">View Details</a>
 
                             </div>
 
                             <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                 <div>
                                     <a href="#"
                                         class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                         <span class="icon-heart"></span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>';
                     }
                    }     */
                ?>
                        </div>
                    </div><!-- end -->
                </div>
            </div>
        </div>
    </section>



    <!--  <section class="ftco-section testimony-section" style="background-color:#f1f0f0">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-4">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="ftco-section ftco-candidates bg-primary">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Candidates</span>
                    <h2 class="mb-4">Latest Candidates</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-candidates owl-carousel">
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                <h2>Danica Lewis</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                <h2>Nicole Simon</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_3.jpg);"></div>
                                <h2>Cloe Meyer</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_4.jpg);"></div>
                                <h2>Rachel Clinton</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_5.jpg);"></div>
                                <h2>Dave Buff</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/person_6.jpg);"></div>
                                <h2>Dave Buff</h2>
                                <span class="position">Western City, UK</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Our Blog</span>
                    <h2><span>Recent</span> Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">August 28, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">August 28, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">August 28, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('images/image_4.jpg');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#">August 28, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                    blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-4 mb-4">
                            <div class="col-md-12">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Skillhunt Jobboard</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Employers</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="pb-1 d-block">Browse Candidates</a></li>
                            <li><a href="#" class="pb-1 d-block">Post a Internship</a></li>
                            <li><a href="#" class="pb-1 d-block">Employer Listing</a></li>
                            <li><a href="#" class="pb-1 d-block">Resume Page</a></li>
                            <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                            <li><a href="#" class="pb-1 d-block">Internship Packages</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Candidate</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="pb-1 d-block">Browse Internships</a></li>
                            <li><a href="#" class="pb-1 d-block">Submit Resume</a></li>
                            <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                            <li><a href="#" class="pb-1 d-block">Browse Categories</a></li>
                            <li><a href="#" class="pb-1 d-block">My Bookmarks</a></li>
                            <li><a href="#" class="pb-1 d-block">Candidate Listing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Account</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="pb-1 d-block">My Account</a></li>
                            <li><a href="#" class="pb-1 d-block">Sign In</a></li>
                            <li><a href="#" class="pb-1 d-block">Create Account</a></li>
                            <li><a href="#" class="pb-1 d-block">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Nelson Mandela Marg,
                                        Vasant Kunj, New Delhi-110070</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">011-29581050</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">neat@aicte-india.org</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <script src="./assets/js2/jquery.min.js"></script>
    <script src="./assets/js2/jquery-migrate-3.0.1.min.js"></script>
    <script src="./assets/js2/popper.min.js"></script>
    <script src="./assets/js2/bootstrap.min.js"></script>
    <script src="./assets/js2/jquery.easing.1.3.js"></script>
    <script src="./assets/js2/jquery.waypoints.min.js"></script>
    <script src="./assets/js2/jquery.stellar.min.js"></script>
    <script src="./assets/js2/owl.carousel.min.js"></script>
    <script src="./assets/js2/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js2/aos.js"></script>
    <script src="./assets/js2/jquery.animateNumber.min.js"></script>
    <script src="./assets/js2/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="./assets/js2/google-map.js"></script>
    <script src="./assets/js2/main.js"></script>

</body>

</html>