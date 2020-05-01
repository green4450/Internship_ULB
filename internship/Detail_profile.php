<?php 
include './src/php/dbh.php';
include './include/header_new.php';
?>
<section class="newSliderSec">
<div id="headerSlider">
<a href="#"><img src="./assets/images3/bg_1.jpg" alt="" /></a>
<a href="#"><img src="./assets/images3/bg_5.jpg" alt="" /></a>
<a href="#"><img src="./assets/images3/bg_4.jpg" alt="" /></a>
<a href="#"><img src="./assets/images3/bg_2.jpg" alt=""/></a>
<a href="#"><img src="./assets/images3/bg_7.jpg" alt=""/></a>
<a href="#"><img src="./assets/images3/bg_8.jpg" alt=""/></a>
<a href="#"><img src="./assets/images3/bg_9.jpg" alt=""/></a>
</div>
</section>
<div class="hero-wrap img">
    <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-10 d-flex align-items-center ftco-animate">
                <div class="text text-center pt-5 mt-md-5 _newTpDiv">
                    <div class="ftco-counter ftco-no-pt ftco-no-pb ftco-no-pp_new">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-worldwide" style="font-size:34px;margin-top:13px"></span>
                                        </div>
                                        <?php
                                        $sql = "SELECT count(*) as total from `post_internship_government`,tblipinternshala,tblipinternshala3";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        
                                        echo '<div class="desc text-left">
                                            <strong class="number" style="font-size:26px"data-number='.$row['total'].'>0</strong>
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
                                            <span class="flaticon-visitor" style="font-size:34px;margin-top:13px" ></span>
                                        </div>
                                        <?php
                                        $sql = "SELECT count(*) as total from internhip_apply,government_internship_apply ";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        echo '<div class="desc text-left">
                                        <strong class="number" style="font-size:26px" data-number='.$row['total'].'></strong>
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
                                            <span class="flaticon-resume" style="font-size:34px;margin-top:13px"></span>
                                        </div>
                                        <?php
                                        $sql = "SELECT count(*) as total from ubl_register,corporate_register";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        echo ' <div class="desc text-left">
                                        <strong class="number"style="font-size:26px"data-number='.$row['total'].'>0</strong>
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
                                        a Internship</a>

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
                                                                class="form-control border border-dark" style="width:300px"
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
                                                                name="search_InternshipBtn" ><b>Search</b></button>


                                                                <button type="button"
                                                                class="form-control d-none btn border-0 btn-primary"
                                                                id="scrollBtn"
                                                                onclick="myFunction();" ><b>OK</b></button>

                                                                <script>
                                                                function myFunction() {
                                                                    var elmnt = document.getElementById("myDIV");
                                                                    elmnt.scrollIntoView();
                                                                    window.scrollTo(0, 1000);
                                                                }
                                                                </script>

                                                                

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
<?php
$uid = $_GET['uid'];
$sql = "SELECT * FROM post_internship_government s INNER JOIN ubl_register u ON s.company_id=u.ulb_company_id and s.uid = '$uid'";
$result = mysqli_query($conn, $sql);
$resultChk = mysqli_num_rows($result);
if ($resultChk < 1) {
    echo '
        <center>
            <h2>No Result Found</h2>
        </center>
    ';
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="col-md-12 rounded ftco-animate" style="overlay:hidden;background-color:#f1f0f0" >
        <div style="margin-left: 13%;" class="job-post-item rounded w-75 p-4 d-block d-lg-flex align-items-center">
            <div class="one-third mb-4 mb-md-0">
                <div class="job-post-item-header align-items-center">
                    <span class="subadge">'.$row['internship_type'].'</span>
                    <h2 class="mr-3 text-black"><a href="#">'.$row['title'].'</a></h2>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['ulb_organisaton'].'</a>
                    </div>
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['department'].'</a>
                    </div>
                    <div><span class="icon-my_location"></span> <span>'.$row['locations'].'</span></div>
                </div>
                <h4> Description </h4>
                <p>
                    '.$row['description'].'
                </p>
               
            </div>
        </div>
    </div>
    
    <div class="col-md-12 ftco-animate"style="overlay:hidden;background-color:#f1f0f0">
        <div style="margin-left: 13%;" class="job-post-item p-4 rounded w-75 d-block d-lg-flex align-items-center">
            <div class="one-third mb-4 mb-md-0">
                <h4> Perks </h4>
                <p>
                    '.$row['eligibility'].'
                </p>
                <h4> Terms Of Engagement </h4>
                <p>
                    '.$row['terms_of_enagement'].'
                </p>

            </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 ftco-animate"style="overlay:hidden;background-color:#f1f0f0">
    <div style="margin-left: 13%;" class="job-post-item p-4 rounded w-75 d-block d-lg-flex align-items-center">
        <div class="one-third mb-4 mb-md-0">
            <h4>Who Can Apply</h4>
            <p>
               Only Students of '.$row['qualification'].','.$row['specialisation'].'
            </p>    
            <h4> Duration </h4>
            <p>
                '.$row['duration'].' months
            </p>
            <h4> Last Date Of Apply </h4>
            <p>
                '.$row['last_date'].'
            </p>
            <h4> Total Number Of Position </h4>
            <p>
                '.$row['last_date'].'
            </p>
        </div>
        </div>
    </div>
</div>
    <div class="col-md-12 ftco-animate" style="overlay:hidden">
        <div style="margin-left: 13%;" class="job-post-item rounded w-75 p-4 d-block d-lg-flex align-items-center">
            <div class="one-third mb-4 mb-md-0">
                
                <center>
                <a href="./module_student/login.php?uid='.$row['uid'].'&company_id='.$row['company_id'].'" style="background-color: #24E0DD;" class="btn btn-primary py-2">Apply Internship</a>
                </center>
            </div>
            </div>
        </div>
    </div>        
            ';
    }
    
}


include './include/footer_new.php';