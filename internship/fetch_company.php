<?php include './include/header1.inc.php'?>

<div class="hero-wrap img" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-10 d-flex align-items-center ftco-animate">
                <div class="text text-center pt-5 mt-md-5 _newTpDiv">
                    <!-- <h4 class="text-light mb-5">
                        AICTE HELPS STUDENT FIND WORK THEY LOVE & ORGANIZATIONS FIND BEST INTERNS ON PAN INDIA BASIS
                    </h4> -->
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
                                        $sql = "SELECT count(*) as total from internhip_apply,government_internship_apply ";
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
                                        $sql = "SELECT count(*) as total from ubl_register,corporate_register";
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
                                        href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find
                                        Internship</a>

                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                        role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a>

                                    <a class="nav-link" id="v-pills-2-tab" href="login_type.php" role="tab"
                                        aria-selected="false">Post Internship</a>

                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">

                                <div class="tab-content p-4" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                        aria-labelledby="v-pills-nextgen-tab">
                                        <form action="./fetch_company.php" method="post" class="search-job">
                                            <div class="row no-gutters">
                                                <div class="col-md mr-md-2">
                                                    <div class="form-group">
                                                        <div class="form-field">
                                                            <div class="icon"><span class="icon-briefcase"></span></div>
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
                                                <div class="col-md mr-md-2">
                                                    <div class="form-group">
                                                        <div class="form-field">
                                                            <div class="icon"><span class="icon-map-marker"></span>
                                                            </div>
                                                            <input type="text" id="location" name="location"
                                                                class="form-control border border-dark"
                                                                placeholder="Location">
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
                                                            <button type="submit" class="form-control btn btn-primary"
                                                                id="search_c" namespace="search_c">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade " id="v-pills-2" role="tabpanel"
                                        aria-labelledby="v-pills-performance-tab">
                                        <form action="./fetch_company.php" method="post" class="search-job">
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
                                                                <select name="category" id="category"
                                                                    class="form-control">
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
                                                            <input type="text" id="location" name="location"
                                                                class="form-control" placeholder="Location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <div class="form-field">
                                                            <button type="submit" class="form-control btn btn-primary"
                                                                type="submit" id="search" name="search">Search</button>
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

<!-- <section class="ftco-section">
<div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Job Categories</span>
                <h2 class="mb-0">Top Categories</h2>
            </div>
        </div>
        <div class="row">
            <div class="col ftco-animate">
                <ul class="text-center">
                    <li><a class="text-danger" href="./fetch_company.php">Internship by Company </li>
                    <br>
                    <li><a class="text-danger" href="./fetch_woman.php">Internship for Women </li>
                    <br>
                    <li><a class="text-danger" href="#">Online Internship</li>
                    <br>
                    <li><a class="text-danger" href="#">Internship By Category</li>
                    <br>
                </ul>
            </div>
            <div class="col ftco-animate">
                <ul class="text-center">
                    <li><a class="text-danger" href="#">Browse al Internship</li>
                    <br>

                    <li><a class="text-danger" href="#">Internship with NHAI</li>
                    <br>

                    <li><a class="text-danger" href="#">Internship in DM</li>
                    <br>

                    <li><a class="text-danger" href="#">Internship with BSNL</li>
                    <br>
                </ul>
            </div>
            <div class="col ftco-animate">
                <ul class="text-center">
                    <li><a class="text-danger" href="#">Internship in J&K</li>
                    <br>
                    <li><a class="text-danger" href="./fetch_government">Internship By Government</li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 pr-lg-5">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Recently Added Jobs</span>
                        <h2 class="mb-4">Featured Jobs Posts For This Week</h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                    if(isset($_POST['search']))
                    { 
                      $company = mysqli_real_escape_string($conn,$_POST['company']);
                      echo $company;
                      $location = mysqli_real_escape_string($conn,$_POST['location']);
                      echo $location;
                      $category = mysqli_real_escape_string($conn,$_POST['category']);
				   $sql = "SELECT title,city,country,salary,StartDate,company,working_hours,url FROM tblipinternshala where working_hours like '%{$category}%' and city like '%{$location}%' and title  LIKE '%{$company}%'";
				   $res = mysqli_query($conn,$sql);
				   while($row = mysqli_fetch_assoc($res))
				   {
                    echo'<div class="col-md-12 ftco-animate" style="overlay:hidden">
                        <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
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
                                
                                <a href='.$row['url'].' class="btn btn-primary py-2">Apply Job</a>

                                <a href="#" class="btn btn-primary py-2">View Details</a>
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
                    ?>

                    <?php 
				   $sql = "SELECT title,internship_type,locations,ulb_organisaton FROM post_internship_government,ubl_register";
				   $res = mysqli_query($conn,$sql);
				   while($row = mysqli_fetch_assoc($res))
				   {
                    echo'<div class="col-md-12 ftco-animate" style="overlay:hidden">
                        <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
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
                                <a href="./login_type.php" class="btn btn-primary py-2">Apply Job</a>

                                <a href="Detail_profile.php" class="btn btn-primary py-2">View Details</a>
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
                    } ?>
                </div>
            </div>
            <div class="col-lg-3 sidebar">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h2 class="mb-4">Top Recruitments</h2>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="">
                        <a href="#" class="company-wrap"><img src="./assets/images/company-1.jpg" class="img-fluid"></a>
                        <div class="text p-3">
                            <h3><a href="#">Company Company</a></h3>
                            <p><span class="number">500</span> <span>Open position</span></p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="">
                        <a href="#" class="company-wrap"><img src="./assets/images/company-2.jpg" class="img-fluid"></a>
                        <div class="text p-3">
                            <h3><a href="#">Facebook Company</a></h3>
                            <p><span class="number">700</span> <span>Open position</span></p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="">
                        <a href="#" class="company-wrap"><img src="./assets/images/company-3.jpg" class="img-fluid"></a>
                        <div class="text p-3">
                            <h3><a href="#">IT Programming INC</a></h3>
                            <p><span class="number">700</span> <span>Open position</span></p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="">
                        <a href="#" class="company-wrap"><img src="./assets/images/company-4.jpg" class="img-fluid"></a>
                        <div class="text p-3">
                            <h3><a href="#">IT Programming INC</a></h3>
                            <p><span class="number">700</span> <span>Open position</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './include/footer1.inc.php'?>