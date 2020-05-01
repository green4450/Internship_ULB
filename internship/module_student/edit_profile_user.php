<?php 
include './include/auth.php';
include './include/header_students.php';
$id = $_SESSION['id'];
$status = " ";
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
                            Profile
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
                            $sql = "SELECT student_profile_photo FROM student_register WHERE student_uid = '$id';";
                            $res = mysqli_query($conn, $sql);
                            if ($row = mysqli_fetch_assoc($res)) {
                                echo '
                                    <img src="../uploads/profile/'.$row['student_profile_photo'].'"
                                    class="avatar img-circle img-thumbnail" alt="avatar">
                                ';
                            }
                        
                        ?>
                            
                            <h6>Upload a different photo...</h6>
                            <form action="./src/php/main.php" method="post" enctype="multipart/form-data">
                            <input type="file" class="text-center center-block file-upload" id="profile1" name="profile1">
                            <input type="submit" id="upload_profile" name="upload_profile" value="upload" required>
                            </form>
                        </div>
                        </hr><br>


                       <!--  <div class="panel panel-default">
                            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                            <div class="panel-body"><a href="http://bootnipets.com">Website</a></div>
                        </div> -->


                    </div>
                    <!--/col-3-->
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs">
                        <?php
                            $id = $_SESSION['id'];
                            $sql = "SELECT status FROM student_register WHERE student_uid = '$id';";
                            $res = mysqli_query($conn, $sql);
                             while( $status1 =mysqli_fetch_assoc($res)){
                                $status = $status1['status'];
                            }
                        ?>
                        <?php
                         if($status==0){
                            echo'
                            <li class="active"><a data-toggle="tab" href="#personal">Personal Details</a></li>
                            <li><a data-toggle="tab" href="#tpo">Training and Placement Officer</a></li>
                            <li><a data-toggle="tab" href="#skills">Skills, Languages & Certificatons</a></li>
                            <li><a data-toggle="tab" href="#letter">Reference Letter</a></li>
                            <li><a data-toggle="tab" href="#upload">Upload Documents</a></li>
                            <li><a data-toggle="tab" href="#locations">Preferred Location</a></li>
                            <li><a data-toggle="tab" href="#area_of_intrest">Area of Interest</a></li>
                            <li><a data-toggle="tab" href="#links">Links</a></li>';
                        }if($status==1){
                            echo'
                            <li><a data-toggle="tab" href="#personal">Personal Details</a></li>
                            <li class="active"><a data-toggle="tab" href="#tpo">Training and Placement Officer</a></li>
                            <li><a data-toggle="tab" href="#skills">Skills, Languages & Certificatons</a></li>
                            <li><a data-toggle="tab" href="#letter">Reference Letter</a></li>
                            <li><a data-toggle="tab" href="#upload">Upload Documents</a></li>
                            <li><a data-toggle="tab" href="#locations">Preferred Location</a></li>
                            <li><a data-toggle="tab" href="#area_of_intrest">Area of Interest</a></li>
                            <li><a data-toggle="tab" href="#links">Links</a></li>';
                        } if($status==2){
                            echo'
                            <li><a data-toggle="tab" href="#personal">Personal Details</a></li>
                            <li><a data-toggle="tab" href="#tpo">Training and Placement Officer</a></li>
                            <li class="active"><a data-toggle="tab" href="#skills">Skills, Languages & Certificatons</a></li>
                            <li><a data-toggle="tab" href="#letter">Reference Letter</a></li>
                            <li><a data-toggle="tab" href="#upload">Upload Documents</a></li>
                            <li><a data-toggle="tab" href="#locations">Preferred Location</a></li>
                            <li><a data-toggle="tab" href="#area_of_intrest">Area of Interest</a></li>
                            <li><a data-toggle="tab" href="#links">Links</a></li>';
                        }if($status==3){
                            echo'
                            <li><a data-toggle="tab" href="#personal">Personal Details</a></li>
                            <li class="active"><a data-toggle="tab" href="#tpo">Training and Placement Officer</a></li>
                            <li><a data-toggle="tab" href="#skills">Skills, Languages & Certificatons</a></li>
                            <li class="active"><a data-toggle="tab" href="#letter">Reference Letter</a></li>
                            <li><a data-toggle="tab" href="#upload">Upload Documents</a></li>
                            <li><a data-toggle="tab" href="#locations">Preferred Location</a></li>
                            <li><a data-toggle="tab" href="#area_of_intrest">Area of Interest</a></li>
                            <li><a data-toggle="tab" href="#links">Links</a></li>';
                        } if($status==4){
                            echo'
                            <li><a data-toggle="tab" href="#personal">Personal Details</a></li>
                            <li><a data-toggle="tab" href="#tpo">Training and Placement Officer</a></li>
                            <li><a data-toggle="tab" href="#skills">Skills, Languages & Certificatons</a></li>
                            <li><a data-toggle="tab" href="#letter">Reference Letter</a></li>
                            <li class="active"><a data-toggle="tab" href="#upload">Upload Documents</a></li>
                            <li><a data-toggle="tab" href="#locations">Preferred Location</a></li>
                            <li><a data-toggle="tab" href="#area_of_intrest">Area of Interest</a></li>
                            <li><a data-toggle="tab" href="#links">Links</a></li>';
                        }if($status==5){
                            echo'
                            <li><a data-toggle="tab" href="#personal">Personal Details</a></li>
                            <li><a data-toggle="tab" href="#tpo">Training and Placement Officer</a></li>
                            <li><a data-toggle="tab" href="#skills">Skills, Languages & Certificatons</a></li>
                            <li><a data-toggle="tab" href="#letter">Reference Letter</a></li>
                            <li><a data-toggle="tab" href="#upload">Upload Documents</a></li>
                            <li class="active"><a data-toggle="tab" href="#locations">Preferred Location</a></li>
                            <li><a data-toggle="tab" href="#area_of_intrest">Area of Interest</a></li>
                            <li><a data-toggle="tab" href="#links">Links</a></li>';
                        } if($status==6){
                            echo'
                            <li><a data-toggle="tab" href="#personal">Personal Details</a></li>
                            <li><a data-toggle="tab" href="#tpo">Training and Placement Officer</a></li>
                            <li><a data-toggle="tab" href="#skills">Skills, Languages & Certificatons</a></li>
                            <li><a data-toggle="tab" href="#letter">Reference Letter</a></li>
                            <li><a data-toggle="tab" href="#upload">Upload Documents</a></li>
                            <li><a data-toggle="tab" href="#locations">Preferred Location</a></li>
                            <li><a data-toggle="tab" href="#area_of_intrest">Area of Interest</a></li>
                            <li class="active"><a data-toggle="tab" href="#links">Links</a></li>';
                        }
                        ?>    
                        </ul>
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                                <h2> Personal Details</h2>
                                <hr>

                                <?php
                                $sql = "SELECT student_first_name,student_last_name,student_contact,student_course,student_year,student_description,student_caste,student_graduating_year,student_id,student_10th_marks,student_10th_school,student_10th_year,student_12th_marks,student_12th_school,student_12th_year,student_graduating_marks,institute_name FROM student_register WHERE student_uid = '$id'";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                                echo '
                                <form action="./src/php/main.php" method="post">
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>First name</h4>
                                            </label>
                                            <input type="text" class="form-control" name="first_name" id="first_name"
                                                placeholder="first name" onchange="validatestrings(this)" title="enter your first name if any."
                                                value="'.$row['student_first_name'].'" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>Last name</h4>
                                            </label>
                                            <input type="text" class="form-control" name="last_name" id="last_name"
                                                placeholder="last name" onchange="validatestrings(this)" title="enter your last name if any."
                                                value="'.$row['student_last_name'].'" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mobile">
                                                <h4>Mobile Number</h4>
                                            </label>
                                            <input type="text" class="form-control" name="mobile" id="mobile"
                                                placeholder="enter mobile number"onchange="phonenumber(this)"
                                                title="enter your mobile number if any." value=
                                                "'.$row['student_contact'].'" required>
                                        </div>
                                    </div>
                                 
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Gender</h4>
                                            </label>
                                            <select class="form-control" id="gender" name="gender"style="height:35px" required>
                                                <option value="Male" selected>Male</option>
                                                <option value="Female">Female </option>
                                                <option value="Other">Other</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="student_id">
                                                <h4>Student ID(Enrolment number)</h4>
                                            </label>
                                            <input type="text"onchange="validatenumber(this)" class="form-control" name="student_id" id="student_id"
                                                placeholder="student_id" title="enter your student_id."
                                                value="'.$row['student_id'].'" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Reservation Category</h4>
                                            </label>
                                            <select class="form-control" id="category" name="category"style="height:35px" required>
                                                <option value="General">General </option>
                                                <option value="SC">SC </option>
                                                <option value="ST ">ST </option>
                                                <option value="OBC">OBC </option>
                                                <option value="EWS">EWS </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="description">
                                                <h4>About Yourself</h4>
                                            </label>
                                            <textarea class="form-control" onchange="validatespecialstrings(this)"name="description" id="description" cols="50"
                                                rows="5">'.$row['student_description'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>School Name Class 10th</h4>
                                            </label>
                                            <input type="text" class="form-control" name="student_10th_school" id="student_10th_school"
                                                placeholder="10th School Name" title="10th School Name"
                                                value="'.$row['student_10th_school'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>Class 10th Percentage/SGPA</h4>
                                            </label>
                                            <input type="text" class="form-control" name="student_10th_marks"onchange="validatenumber(this) id="student_10th_marks"
                                                placeholder="10th Percentage" title="10th Percentage" value="'.$row['student_10th_marks'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>Class 10th Percentage/SGPA</h4>
                                            </label>
                                            <input type="text" class="form-control" name="student_10th_year"onchange="validatenumber(this) id="student_10th_year"
                                                placeholder="10th Percentage" title="10th Percentage" value="'.$row['student_10th_year'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>School Name Class 12th</h4>
                                            </label>
                                            <input type="text" class="form-control" name="student_12th_school"onchange="validatestring(this) id="student_12th_school"
                                                placeholder="School Name For class 12th" title="Graduation Date"
                                                value="'.$row['student_12th_school'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>Class 12th Percentage/CGPA</h4>
                                            </label>
                                            <input type="text" class="form-control" name="student_12th_marks" id="student_12th_marks"
                                                placeholder="12th Marks in percentage/CGPA " title="Graduation Date" value="'.$row['student_12th_marks'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="last_name">
                                            <h4>Class 12th Passing Year</h4>
                                        </label>
                                        <input type="text" class="form-control" name="student_12th_year" id="student_12th_year"
                                            placeholder="12th Passing Year " title="Graduation Date" value="'.$row['student_12th_year'].'">
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>College / Institute Name</h4>
                                            </label>
                                            <input type="text" class="form-control" name="institute_name" id="institute_name"
                                                placeholder="Institute Name" title="Institute Name" value="'.$row['institute_name'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>Date of Graduation/Date of Issue of Provisional Certificate/Date Of Declaration of Your Result </h4>
                                            </label>
                                            <input type="date" class="form-control" name="student_graduating_year"
                                                id="student_graduating_year" placeholder="Gradution Date"
                                                title="Graduation Date" value="'.$row['student_graduating_year'].'" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>Graduating Percentage/CGPA</h4>
                                            </label>
                                            <input type="text" class="form-control" name="student_graduating_marks"
                                                id="student_graduating_marks" placehoder="Gradution Percentage"
                                                title="Graduation Date" value="'.$row['student_graduating_marks'].'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="password2">
                                            <h4>Course</h4>
                                        </label>
                                        <input type="text" class="form-control" name="course" id="course"
                                            placeholder="Enter Course" onchange="validatestrings(this)"title="enter your course." value="'.$row['student_course'].'"required>
                                    </div>
                                </div>

                                <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Course</h4>
                                    </label>
                                    <input type="text" class="form-control" name="stream" id="stream"
                                        placeholder="Enter Stream If Available Else Leave Blank" onchange="validatestrings(this)"title="enter your course." value="'.$row['student_course'].'"required>
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="password2">
                                            <h4>Year</h4>
                                        </label>
                                        <select class="form-control" id="year" name="year"style="height:35px" required>
                                        <option value="1">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                        <option value="4">4th Year</option>
                                        <option value="5">5th Year</option>
                                        
                                    </select>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit" name="personal_info"
                                                id="personal_info"><i class="glyphicon glyphicon-ok-sign"></i>
                                                Save</button>
                                            <button class="btn btn-lg" type="reset"><i
                                                    class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>';
                                }
                                ?>
                                <hr>
                            </div>
                            <!--/tab-pane-->

                            <div class="tab-pane" id="locations">
                                <h2> Preferred Location</h2>
                                <hr>
                                <?php
                                $sql = "SELECT student_first_location,student_second_location,student_third_location,student_fourth_location FROM student_register WHERE student_uid = '$id'";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                echo    '<form action="./src/php/main.php" method="post">
                                            <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_location">
                                                <h4>First Location</h4>
                                            </label>
                                            <input type="text" class="form-control" name="first_location"
                                                id="first_location" value="'.$row['student_first_location'].' "placeholder="First Location" onchange="validatestrings(this)" title="Location">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="second_location">
                                                <h4>Second Location</h4>
                                            </label>
                                            <input type="text" class="form-control" name="second_location"
                                                id="second_location"onchange="validatestrings(this)"value="'.$row['student_second_location'].'" placeholder="Second Location" title="Location">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="third_location">
                                                <h4>Third Location</h4>
                                            </label>
                                            <input type="text" class="form-control" name="third_location"
                                                id="third_location"onchange="validatestrings(this)" value="'.$row['student_third_location'].'" placeholder="Third Location" title="Location.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="fourth_location">
                                                <h4>Fourth Location</h4>
                                            </label>
                                            <input type="text" class="form-control" name="fourth_location"
                                                id="fourth_location"onchange="validatestrings(this)" placeholder="Fourth Location"value="'.$row['student_fourth_location'].'"
                                                title="Fourth Location.">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit" id="add_location"
                                                name="add_location"><i class="glyphicon glyphicon-ok-sign"></i>
                                                Save</button>
                                            <button class="btn btn-lg" type="reset"><i
                                                    class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>';
                                }
                                ?>
                                <hr>
                            </div>

                            <div class="tab-pane" id="tpo">

                                <h2> Training and Placement officer/Institute Details</h2>

                                <hr>
                                <?php 
                                $id = $_SESSION['id'];
                                $sql = "SELECT institute_name,institute_phone,institute_mobile,institute_email,institute_location,tpo_name,tpo_email FROM student_register WHERE student_uid = '$id' ";
                                $res = mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($res)){
                                echo'<form action="./src/php/main.php" method="post" id="registrationForm">
                                    <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Name</h4>
                                            </label>
                                            <input type="text" class="form-control" name="institute_name"
                                                id="institute_name" placeholder="institute name"onchange="validatestrings(this)" value="'.$row['institute_name'].'"
                                                title="enter your first name if any.">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Phone</h4>
                                            </label>
                                            <input type="text" class="form-control" name="institute_phone"
                                                id="institute_phone"onchange="validatestrings(this)" placeholder="enter phone"value="'.$row['institute_phone'].'"
                                                title="enter your phone number if any.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mobile">
                                                <h4>Mobile</h4>
                                            </label>
                                            <input type="text" class="form-control" name="institute_mobile"
                                                id="institute_mobile"onchange="phonenumber(this)" placeholder="enter mobile number"value="'.$row['institute_mobile'].'"
                                                title="enter your mobile number if any.">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="email">
                                                <h4>Email</h4>
                                            </label>
                                            <input type="email" class="form-control" name="institute_email"
                                                id="institute_email"onchange="validateemail(this)" placeholder="you@email.com"value="'.$row['institute_email'].'"
                                                title="enter your email.">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="email">
                                                <h4>Location</h4>
                                            </label>
                                            <input type="text" class="form-control" id="institute_location"
                                                name="institue_location"onchange="validatestrings(this)" placeholder="somewhere"value="'.$row['institute_location'].'"
                                                title="enter a location">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>TPO Name</h4>
                                            </label>
                                            <input type="text" class="form-control" name="tpo_name"
                                                id="tpo_name" placeholder="TPO name"onchange="validatestrings(this)"value="'.$row['tpo_name'].'"
                                                title="enter your first name if any.">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>TPO Email</h4>
                                            </label>
                                            <input type="text" class="form-control" name="tpo_email"
                                                id="tpo_email"onchange="validateemail(this)" placeholder="first name"value="'.$row['tpo_email'].'"
                                                title="enter your first name if any.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit" id="add_institute"name="add_institute"><i class="glyphicon glyphicon-ok-sign"></i>
                                                Save</button>
                                            <button class="btn btn-lg" type="reset"><i
                                                    class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>';
                                }
                                ?>
                            </div>
                            <!--/tab-pane-->

                            <div class="tab-pane" id="skills">

                                <h2> Skills, Language & Certification</h2>

                                <hr>
                                <?php
                                $id= $_SESSION['id'];
                               
                                $sql ="SELECT student_languages,student_carrer_intrest,student_skills,student_certificate,student_activites,student_hobbies,internship_experience,student_work_and_volunteer,publication_and_research,events_and_research,student_events,student_tech_events,student_sports FROM student_register WHERE student_uid='$id'";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                                echo'<form action="./src/php/main.php" method="post" id="registrationForm">
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Skills </h4>
                                            </label>
                                            <textarea type="text" class="form-control" name="student_skills" id="student_skills"onchange="validatestringsandnumber(this)"
                                                placeholder="Add Skills" title="Add Skills">'.$row['student_skills'].'</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Languages Known</h4>
                                            </label>
                                            <Textarea type="text" class="form-control" name="student_languages" id="student_languages"onchange="validatestringsandnumber(this)"
                                                placeholder="enter phone" title="enter your phone number if any.">
                                                '.$row['student_languages'].'</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Internship Experience</h4>
                                            </label>
                                            <Textarea type="text" class="form-control" name="internship_experience" id="internship_experience"
                                                placeholder="enter Internship Experience"onchange="validatestringsandnumber(this)" title="enter Internship Experience">
                                                '.$row['internship_experience'].'</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Extra Curricular Activities</h4>
                                            </label>
                                            <Textarea type="text" class="form-control" name="student_activites" id="student_activites"onchange="validatestringsandnumber(this)"
                                                placeholder="Enter Any Activities Done" title="enter your phone number if any.">
                                                '.$row['student_activites'].'</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mobile">
                                                <h4>Certification</h4>
                                            </label>
                                            <textarea type="text" class="form-control" name="student_certificate"
                                                id="student_certificate"onchange="validatestringsandnumber(this)" placeholder="enter mobile number"
                                                title="enter your mobile number if any.">
                                                '.$row['student_certificate'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Career Interests</h4>
                                            </label>
                                            <textarea type="text" class="form-control" name="student_carrer_intrest"onchange="validatestringsandnumber(this)" id="student_carrer_intrest"
                                                placeholder="enter phone" title="enter your phone number if any.">
                                                '.$row['student_carrer_intrest'].'</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mobile">
                                                <h4>Volunteering Experience</h4>
                                            </label>
                                            <textarea type="text" class="form-control" name="student_work_and_volunteer"
                                                id="student_work_and_volunteer"onchange="validatestringsandnumber(this)" placeholder="If voluntered a event briefly describe"
                                                title="enter your mobile number if any.">
                                                '.$row['student_work_and_volunteer'].'</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Published Research</h4>
                                            </label>
                                            <textarea type="text" class="form-control" name="publication_and_research" onchange="validatestringsandnumber(this)"id="publication_and_research"
                                                placeholder="If Publihed Research Papers Breifly Describe" title="enter your phone number if any.">
                                                '.$row['publication_and_research'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="phone">
                                            <h4>Technical Events(Such As Hackathon)</h4>
                                        </label>
                                        <textarea type="text" class="form-control" name="student_tech_events" id="student_tech_events"
                                            placeholder="If Publihed Research Papers Breifly Describe" onchange="validatestringsandnumber(this)"title="enter your phone number if any.">
                                            '.$row['student_tech_events'].'</textarea>
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mobile">
                                                <h4>Events(Seminars/Conferences)</h4>
                                            </label>
                                            <textarea type="text" class="form-control" name="student_events"
                                                id="student_events"onchange="validatestringsandnumber(this)" placeholder="Technical Events You have Participated Till Now"
                                                title="enter your mobile number if any.">
                                                '.$row['student_events'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mobile">
                                                <h4>Sports Information</h4>
                                            </label>
                                            <textarea type="text" class="form-control" name="student_sports"
                                                id="student_sports"onchange="validatestringsandnumber(this)" placeholder="Technical Events You have Participated Till Now"
                                                title="enter your mobile number if any.">
                                                '.$row['student_sports'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit" id="add_skills" name="add_skills"><i class="glyphicon glyphicon-ok-sign"></i>
                                                Save</button>
                                            <button class="btn btn-lg" type="reset"><i
                                                    class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>';
                                }
                                ?>
                                </hr>
                            </div>

                            <div class="tab-pane" id="upload">

                                <h2>Other Documents</h2>

                                <hr>
                                <form class="form" action="./src/php/main.php" method="post" enctype="multipart/form-data" id="registrationForm">
                                    <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Resume </h4>
                                            </label>
                                            <input type="File" class="form-control" name="resume"
                                                id="resume" placeholder="recomendation"
                                                title="enter your first name if any.">
                                               
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Cover Letters </h4>
                                            </label>
                                            <input type="File" class="form-control" name="cover_letter"
                                                id="cover_letter" placeholder="cover_letter"
                                                title="enter your first name if any.">
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Transcripts </h4>
                                            </label>
                                            <input type="File" class="form-control" name="transcripts"
                                                id="transcripts" placeholder="recomendation"
                                                title="enter your first name if any.">
                                        </div>

                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Other Documents</h4>
                                            </label>
                                            <input type="File" class="form-control" name="other_documents"
                                                id="other_documents" placeholder="recomendation"
                                                title="enter your first name if any.">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit" id="upload_document" name="upload_document"><i
                                                    class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                            <button class="btn btn-lg" type="reset"><i
                                                    class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="letter">

                                <h2>Reference Letter</h2>

                                <hr>
                                <form class="form" action="./src/php/main.php" method="post"enctype="multipart/form-data" id="registrationForm">
                                    <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Reference Letter </h4>
                                            </label>
                                            <input type="File" class="form-control" name="reference_letter"
                                                id="reference_letter" placeholder="recomendation"
                                                title="enter your first name if any.">
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Mobile Number of Faculty</h4>
                                            </label>
                                            <input type="number" class="form-control" name="reference_mobile"
                                                id="reference_mobile"onchange="phonenumber(this)" placeholder="Reference Number"
                                                title="enter your first name if any.">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit" id="upload_reference" name="upload_reference"><i
                                                    class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                            <button class="btn btn-lg" type="reset"><i
                                                    class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/tab-content-->
                            <div class="tab-pane" id="links">
                                <h2>Link to External Profile (Github,LinkedIn,Issuu)</h2>
                                <hr>
                                <?php
                                $sql= "SELECT link from student_register where student_uid='$id'";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                                echo'
                                <form class="form" action="./src/php/main.php" method="post" id="registrationForm">
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Links </h4>
                                            </label>
                                            <input type="text" class="form-control" name="links" id="links"
                                                value="'.$row['link'].'"onchange="validateurl(this)" placeholder="Links" title="Git Hub Links">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button type="submit" class="btn btn-lg btn-success" id="submit_link" name="submit_link"><i
                                                    class="glyphicon glyphicon-ok-sign"></i>Submit</button>
                                            <button class="btn btn-lg" type="reset"><i
                                                    class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>';
                                }
                                ?>
                            <div class="tab-pane" id="area_of_intrest">

                                <h2>Area of Interest</h2>

                                <hr>
                                <form class="form" action="##" method="post" id="registrationForm">
                                    <div class="form-group">

                                        <div class="col-xs-6">
                                            <label for="first_name">
                                                <h4>Category </h4>
                                            </label>
                                            <select style="height:30px"onChange="getsub(this.value);" class="form-control" name="aoi"
                                                id="aoi">
                                                <?php
                                               $sql="SELECT * FROM `industry category` ";
                                               $res = mysqli_query($conn,$sql);
                                               while($row = mysqli_fetch_assoc($res))
                                               {
                                               echo  '<option value="'.$row['id'].'">'.$row['name'].'
                                                </option>';
                                                 }
                                                 ?>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="first_name">

                                                <h4>Sub Category </h4>
                                            </label>
                                            <select style="height:30px"name="sub_category" id="sub" class="form-control">
                                                <option value="">Select</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit"><i
                                                    class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                            <button class="btn btn-lg" type="reset"><i
                                                    class="glyphicon glyphicon-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/col-9-->
            </div>
            <!--/row-->



        </section>
    </div>
</head>
<!-- /.content-wrapper -->
<?php include './include/footer.inc.php' ?>
<script>
function getsub(val) {
    $.ajax({
        type: "POST",
        url: "./src/php/main.php",
        data: 'state_id=' + val,
        success: function(data) {
            $("#sub").html(data);
        }
    });
}
</script>
