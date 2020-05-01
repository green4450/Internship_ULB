<?php

include '../../../src/php/dbh.php';
include '../../../validate.php';
session_start();

/* To post the internship By the Company */
if (isset($_POST['internship_post'])) {
    $locations = "";
    $state = "";
    $id = $_SESSION['id'];
    $advertisement_id = mysqli_real_escape_string($conn, $_POST['adid']);
    /* $advertisement_id = validatestringsandnumber($advertisement_id);
    if($advertisement_id =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidadid");
    } */
    $job_type = " "; /* mysqli_real_escape_string($conn, $_POST['job_type']); */
    $job_type = /* validatestrings($job_type); */
    $internship_type = mysqli_real_escape_string($conn, $_POST['internship__type']);
    $sql = "SELECT ulb_state,ulb_city FROM ubl_register Where ulb_company_id = '$id'";
    $res = mysqli_query($conn,$sql);
    while($row= mysqli_fetch_assoc($res)){
        $locations = $row['ulb_city'];
        $state = $row['ulb_state'];
    }
   /*  $locations = validatestringsandnumber($locations);
    if($locations =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidlocations");
    } */
      /* mysqli_real_escape_string($conn,strtoupper($_POST['state'])); */
    /* $state = validatestringsandnumber($state);
    if($state =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidstate");
    } */
    $title = mysqli_real_escape_string($conn,strtoupper($_POST['title']));
   /*  $title = validatestrings($title);
    if($title =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidtitle");
    } */
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $department =  " ";
    if (!empty($_POST['department'])) {
        foreach($_POST['department'] as $selected){
            $department = $department.$selected.',';
        }
    }
    $department = rtrim($department, ",");
    $qualification = " ";
    if (!empty($_POST['qualification'])) {
        foreach($_POST['qualification'] as $selected){
            $qualification = $qualification.$selected.',';
        }
    }
    $qualification = rtrim($qualification, ",");
    $specialisation =" ";
    if (!empty($_POST['specialisation'])) {
        foreach($_POST['specialisation'] as $selected){
            $specialisation = $specialisation.$selected.',';
        }
    }
    $specialisation = rtrim($specialisation, ",");
    
    $description=mysqli_real_escape_string($conn, $_POST['description']);
 /*    $description = validatestringsandnumber($description);
    if($description =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invaliddescription");
    } */
    $stiphen = mysqli_real_escape_string($conn, $_POST['stiphen']);
  /*   $stiphen = validatestringsandnumber($stiphen);
    if($stiphen =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidstiphen");
    } */
    $eligibility=mysqli_real_escape_string($conn,$_POST['eligibility']);
   /*  $eligibility = validatestringsandnumber($eligibility);
    if($eligibility =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalideligibility");
    } */
    $terms_of_enagement=mysqli_real_escape_string($conn,$_POST['terms_of_enagement']);
    /* $terms_of_enagement = validatestringsandnumber($terms_of_enagement);
    if($terms_of_enagement =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidterms_of_enagement");
    } */
    $logistics="";   /* mysqli_real_escape_string($conn,$_POST['logistics']); */
    /* $logistics = validatestringsandnumber($logistics);
    if($logistics =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidlogistics");
    } */
    $guidelines= "";  /* mysqli_real_escape_string($conn,$_POST['guidelines']); */
   /*  $guidelines = validatestringsandnumber($guidelines);
    if($guidelines =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidguidelines");
    } */
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    /* $duration = validatestringsandnumber($duration);
    if($duration =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidduration");
    } */
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    /* $email = validateemail($email);
    if($email =="erroremail"){
        header("location:../../simple_post_internship.php?error=Invalidemail");
    } */
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    /* $phone = validatephone($phone);
    if($email =="InvalidNumber"){
        header("location:../../simple_post_internship.php?error=Invalidphone");
    } */
    $fees = "";/* mysqli_real_escape_string($conn, $_POST['fees']); */
    $age= "";/* mysqli_real_escape_string($conn,$_POST['age']); */
  /*   $phone = validatephone($phone);
    if($email =="InvalidInput"){
        header("location:../../simple_post_internship.php?error=Invalidphone");
    } */
    $id =" ";
    $reservation=" ";
    if (!empty($_POST['reserve'])) {
        foreach($_POST['reserve'] as $selected){
            $reservation = $reservation.$selected.',';
        }
    }
    $reservation = rtrim($reservation, ",");
    $posted_on=date("Y/m/d");
    $internship_status="On Going";
    $last_date = mysqli_real_escape_string($conn,$_POST['last_date']);
    $internshipId = $advertisement_id;
    $companyId = $_SESSION['id'];
    $sql = "INSERT INTO `post_internship_government`(`uid`, `company_id`, `advertisement_id`, `job_type`, `internship_type`, `locations`,`state`, `title`, `interns`, `department`, `qualification`, `specialisation`, `description`, `stiphen`, `eligibility`, `terms_of_enagement`, `logistics`, `guidelines`, `duration`, `phone`, `email`, `fees`, `reservation`, `age`, `posted_on`, `internship_status`, `last_date`) VALUES('$internshipId','$companyId','$advertisement_id','$job_type','$internship_type','$locations','$state','$title','$role','$department','$qualification','$specialisation','$description','$stiphen','$eligibility','$terms_of_enagement','$logistics','$guidelines','$duration','$phone','$email','$fees','$reservation','$age','$posted_on','$internship_status','$last_date')";
    mysqli_query($conn, $sql);
    header('Location: ../../index_dashboard.php?task=createdSuccessfully');
}

if(isset($_POST['mohua'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $id =" ";
    $password = sha1(md5($password));
    $sql = "INSERT INTO ministry(`id`,`email`,`password`)VALUES('$id','$email','$password')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:../../mohua.php?task=plselogin");
    }
}


if(isset($_POST['login_mohua']))
{
$username = mysqli_real_escape_string($conn,$_POST['email']);
$username = validateemail($username);
if($username =="erroremail"){
    header("location:../../login_government.php?error=Invalidemail");
}
$password = mysqli_real_escape_string($conn,$_POST['password']);
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$organisation="";
$id=" ";
$role = " ";
$password=sha1(md5($password));
if ($username && $password) {
    $query   = ("SELECT * FROM ministry WHERE email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows>0) {   
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['email'];
            $dbpassword = $row['password'];
            $id=$row['id'];

    }
        if($username == $dbusername && $password == $dbpassword) 
        {   
            $_SESSION['email'] = $username;
            $_SESSION['loggedIn']=1;
            header("location: ../../Dashboard/Tulip-HTML/index.php"); //another file to send request to the next page if values are correct.
        } 
        else{
              header("location: ../../mohua.php?error=WrongPassword&id=1"); 
             
        }
    }
        else {
             header("location: ../../mohua.php?error=UserNotExist&id=1");
            }
}
else{
    header("location: ../../mohua.php?error=PlseEnterUsernameorPassword&id=1");
    }
}

/* Login Code For the Goverment  */
if(isset($_POST['login_government']))
{
$username = mysqli_real_escape_string($conn,$_POST['email']);
$username = validateemail($username);
if($username =="erroremail"){
    header("location:../../login_government.php?error=Invalidemail");
}
$password = mysqli_real_escape_string($conn,$_POST['password']);
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$organisation="";
$id=" ";
$role = " ";
$password=md5($password);
if ($username && $password) {
    $query   = ("SELECT * FROM ubl_register WHERE ulb_email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows>0) {   
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['ulb_email'];
            $dbpassword = $row['ulb_password'];
            $id=$row['ulb_company_id'];
            $user=$row['ulb_first_name'];
            $role = $row['ulb_role'];
            $organisation=$row['ulb_organisaton'];
            $location = $row['location'];

    }
        if($username == $dbusername && $password == $dbpassword) 
        {   
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=2;
            $_SESSION['organisation']=$organisation;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['role']=$role;
            $_SESSION['loggedIn']=1;
            $task = "successfull";
            header("location: ../../index_dashboard.php?task=successfull"); //another file to send request to the next page if values are correct.
        } 
        else{
            header("location: ../../login_type.php?error=WrongPassword&flag=1"); 
           
      }
  }
      else {
           header("location: ../../login_type.php?error=UserNotExist&flag=2");
          }
}
else{
  header("location: ../..login_type.php?error=PlseEnterUsernameorPassword&flag=3");
  }
}

if(isset($_POST['login_department']))
{
$username = mysqli_real_escape_string($conn,$_POST['email']);
$username = validateemail($username);
if($username =="erroremail"){
    header("location:../../login_government.php?error=Invalidemail");
}
$password = mysqli_real_escape_string($conn,$_POST['password']);
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$id=" ";
$role=" ";
$status =" ";
$password=md5($password);

if ($username && $password) {
    $query   = ("SELECT * FROM department_login WHERE email='$username'");
    $result  = mysqli_query($conn,$query);
    $numrows = mysqli_num_rows($result);
    if ($numrows>0) {
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['email'];
            $dbpassword = $row['password'];
            $id=$row['department_id'];
            $user=$row['name'];
            $role=$row['rights'];
            $organisation=$row['department'];
            $status = $row['status'];
        }
        if($status == 0){
        if($username == $dbusername && $password == $dbpassword) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=2;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            $_SESSION['role']=$role;
            $_SESSION['organisation']=$organisation;
            header("location: ../../index_dashboard.php"); //another file to send request to the next page if values are correct.
        } 
        else{
                header("location: ../../login_government.php?error=WrongPasswords&id=2");
            }
        }else {
            header("location: ../../login_government.php?error=Disabled&id=2"); 
             }
        
        }else {
            header("location: ../../login_government.php?error=UserNotExist&id=2"); 
             } 
        }else{
            header("location: ../../login.php?error=PlseEnterUsernameorPassword&id=2");
            }
}


/* To Register the ULB in the Database */
if (isset($_POST['ubl_register'])) 
{
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $fname = validatestringsandnumber($fname);
    if($fname =="InvalidInput"){
        header("location:../../ubl_register.php?error=fname");
    }
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $idnumber=" ";
    $organization=mysqli_real_escape_string($conn, $_POST['organization']);
    $authority=mysqli_real_escape_string($conn, $_POST['authority']);
    $state=mysqli_real_escape_string($conn, $_POST['state']);
    $city=mysqli_real_escape_string($conn, $_POST['city']);
    $certificate=" ";
    $logo = " ";
    // Hashning the password
    $password= md5($password);
    $id=" ";
    $uid = "UBL".uniqid().time();
    $refid= $uid;
    
    if(isset($_FILES['certificate'])){
        if(is_uploaded_file($_FILES['certificate']['tmp_name']))
    {  
        $targetfolder = "../../../uploads/certificate/";
        $userfile_name = $_FILES['certificate']['name'];
        $ext = substr($userfile_name, strrpos($userfile_name, '.')+1);
        if($ext=='pdf')
        {
            $file=$refid.".".$ext;
            $certificate= $file;
            $targetfolder = $targetfolder.$file;
            move_uploaded_file($_FILES['certificate']['tmp_name'], $targetfolder);
        }
        else
         {
             header('location:../../ubl_register.php?task=pdfnot');
         }
    }
    }
    $$certificate = mysqli_real_escape_string($conn,$certificate);
    $logo = mysqli_real_escape_string($conn,$logo);
    if (isset($_FILES["loggoo"])) 
    {
        // Get Image Dimension
        $fileinfo = @getimagesize($_FILES["loggoo"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];
        
        $allowed_image_extension = array(
            "png",
            "jpg",
            "jpeg"
        );
        
        // Get image file extension
        $file_extension = pathinfo($_FILES["loggoo"]["name"], PATHINFO_EXTENSION);
        
        // Validate file input to check if is not empty
        if (! in_array($file_extension, $allowed_image_extension)) {
            header("location:../../ubl_register.php?task=invalidfiletype");
        }    // Validate image file size
        else if (($_FILES["loggoo"]["size"] > 2000000)) {
            header("location:../../ubl_register.php?task=greater");
        }    // Validate image file dimension
        /* else if ($width > "300" || $height > "200") {
            header("location:../../ubl_register.php?task=invalidheightandwitdth");
        }  */else {
            $logo = $uid.".".$file_extension;
            $target = "./logo/" . basename($_FILES["loggoo"]["name"]);
            if (move_uploaded_file($_FILES["loggoo"]["tmp_name"],$target)) {
                $logo = mysqli_real_escape_string($conn,$logo); 
            } 
        }
    }
$role= 1;
    $sql = "SELECT * From ubl_register Where ulb_email = '$email'";
    $res=mysqli_query($conn,$sql);
    $res1 = mysqli_num_rows($res);
    if($res1<1){
    $sql = "INSERT INTO `ubl_register`(`ulb_id`, `ulb_company_id`, `ulb_organisaton`, `ulb_email`, `ulb_password`, `ulb_first_name`, `ulb_last_name`, `ulb_auhority_name`, `ulb_contact_num`, `ulb_logo`, `ulb_certificate`, `ulb_role`, `ulb_state`, `ulb_city`) VALUES('$id','$uid','$organization','$email','$password','$fname','$lname','$authority','$contactnum','$logo','$certificate','$role','$state','$city')";
    $res=mysqli_query($conn, $sql);
    if($res)
    {
        header("location:../../login_type.php?task=RegisteredSuccessfully");
    }

}else{
    header("location:../../ubl_register.php?task=DuplicateValue");
}
}
/* To Update Profile UBL */
if(isset($_POST['update_profile'])){
$organisation_id = mysqli_real_escape_string($conn,$_POST['organisation_id']);
$first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
$organisation_name = mysqli_real_escape_string($conn,$_POST['organisation_name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$ulb_state = mysqli_real_escape_string($conn,$_POST['ulb_state']);
$ulb_city = mysqli_real_escape_string($conn,$_POST['ulb_city']);

$sql= "UPDATE ubl_register SET ulb_first_name = '$first_name',ulb_last_name = '$last_name',ulb_contact_num = '$mobile',ulb_organisaton = '$organisation_name',ulb_state = '$ulb_state',ulb_city = '$ulb_city'";
$res = mysqli_query($conn,$sql);
if($res){
    header("location:../../profile.php?task=updated_successfully");
}
}
/* To add Department  */
if(isset($_POST['add_department'])){
    $department = mysqli_real_escape_string($conn,$_POST['department']);
    $id =" ";
    $uid =$_SESSION['id'];
    $sql="INSERT INTO `department`(`id`, `added_by`, `department_name`) VALUES ('$id','$uid','$department') ";
    $res=mysqli_query($conn, $sql);
    if($res){
        header("location:../../Department_mangement.php?task=added_Department");
    }
}

/* Fetch The department */
if(isset($_POST['add_admin']))
{
$uid = $_SESSION['id'];
$name = mysqli_real_escape_string($conn,$_POST['name']);
$employ_id = mysqli_real_escape_string($conn,$_POST['employ_id']);
$department = mysqli_real_escape_string($conn,$_POST['department']);
$role = mysqli_real_escape_string($conn,$_POST['role']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$status = 1;
$password = md5($password);
$departmentid="DEPARTMENT".uniqid().time();
$sql1 = "SELECT * FROM department_login WHERE email='$email'";
$res = mysqli_query($conn,$sql1);
$res1 = mysqli_num_rows($res);
if($res1<1){
$sql="INSERT INTO `department_login`(`id`, `given_by`, `given_to`, `employ_id`, `name`, `rights`, `department`, `email`, `password`, `status`) VALUES ('$id','$uid','$departmentid','$employ_id','$name','$role','$department','$email','$password','$status');";
$res = mysqli_query($conn,$sql);
if($res){
    header("Location:../../add_admin.php?task=admin_added");
}
else
header("Location:../../add_admin.php?task=queryProblem");
    }
    else {
        header("Location:../../add_admin.php?task=duplicatevalue");
    }
    }
/* Student Add Location preferences */
if(isset($_POST['add_location']))
{
$id = $_SESSION['id'];
$first_location = mysqli_real_escape_string($conn,$_POST['first_location']);
$second_location = mysqli_real_escape_string($conn,$_POST['second_location']);
$third_location = mysqli_real_escape_string($conn,$_POST['third_location']);
$fourth_location = mysqli_real_escape_string($conn,$_POST['fourth_location']);

$sql="UPDATE `student_register` SET `student_first_location`='$fourth_location',`student_second_location`='$second_location',`student_third_location`='$third_location',`student_fourth_location`='$fourth_location' WHERE student_uid='$id'";
mysqli_query($conn,$sql);
}
/* Student Add Skills */
if(isset($_POST['add_skills']))
{
$id = $_SESSION['id'];
$skills = mysqli_real_escape_string($conn,$_POST['skills']);
$language = mysqli_real_escape_string($conn,$_POST['language']);
$certfication= mysqli_real_escape_string($conn,$_POST['certfication']);

$sql="UPDATE `student_register` SET `student_languages`='$language',`student_skills`='$skills',`student_certificate` = '$certfication' WHERE student_uid='$id'";
mysqli_query($conn,$sql);
}

/* Student Add institute */
if(isset($_POST['add_institute']))
{
$id = $_SESSION['id'];
$fname = mysqli_real_escape_string($conn,$_POST['name']);
$location = mysqli_real_escape_string($conn,$_POST['location']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

$sql="UPDATE `institute_name`='$fname',`institute_phone`='$phone',`institute_mobile`='$mobile',`institue_location`='$location',`institue_email`='$email' WHERE student_uid='$id'";
mysqli_query($conn,$sql);
}
/* offerletter Release */
if(isset($_POST['btnShow'])){
    $student_id = $_POST['id2'];
    $company_id = $_POST['id1'];
    $internship_id = $_POST['id3'];
    $time_stamp = date('Y-m-d H:i:s','1299762201428');
    $id = " ";
    $offer="OFFER".uniqid().time();
    $sql = "SELECT * from offer_list Where student_id='$student_id'and company_id = '$company_id'";
    $res = mysqli_query($conn,$sql);
    $res1 = mysqli_num_rows($res);
    if($res1<1){
    $sql="INSERT INTO `offer_list`(`offer_id`, `company_id`, `student_id`,`internship_id`,`time_stamp`) VALUES ('$offer','$company_id','$student_id','$internship_id','$time_stamp');";
    $res = mysqli_query($conn,$sql);
    if($res){
        $status = 3;
        $sql="UPDATE `government_internship_apply` SET `status`= '$status' WHERE student_uid='$student_id' and internship_uid='$internship_id'and company_id='$company_id';";
        $res = mysqli_query($conn,$sql);    
        echo $student_id;    
        header("location:../../certificate_generator.php?uid=".$student_id);
        }
    }
    else{
        header("location:../../interview_management.php?task=allreadyreleased");
    }
}
/* Add Admin Section */

if(isset($_POST['disable'])){
$status = 0;
$given_to = mysqli_real_escape_string($conn,$_POST['uid']);
$sql = "UPDATE department_login SET status = '$status' where given_to = '$given_to'";
$res = mysqli_query($conn,$sql);
if($res){
header("Location: ../../add_admin.php?task=disabled");
    }
}

if(isset($_POST['delete_admin']))
{
    $department = mysqli_real_escape_string($conn,$_POST['department']);
     $company_id = $_SESSION['id'];
     $given_to = mysqli_real_escape_string($conn,$_POST['uid']);
     $sql = "DELETE FROM department_login Where given_by = '$company_id' and given_to = '$given_to' and department = '$department'";
     $res = mysqli_query($conn,$sql);
     if($res){
         header("location:../../add_admin.php?task=admin_removed");
     }
}                      
/* Add Admin Section End */
           
 /* Department Section */       
 if(isset($_POST['delete'])){
    $added_by = mysqli_real_escape_string($conn,$_POST['added_by']);
    $department_name = mysqli_real_escape_string($conn,$_POST['department_name']);
    $sql = "DELETE FROM department where added_by = '$added_by' and department_name = '$department_name' ";
    echo $sql;
    $res = mysqli_query($conn,$sql);
        if($res){
            header("Location: ../../Department_mangement.php?task=deleted");
        }
}       
 /* Department End */ 
 /* Delete Internship */              
 if(isset($_POST['delete_internship'])){
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $sql = "DELETE FROM post_internship_government where uid = '$uid'";
    $res = mysqli_query($conn,$sql);
        if($res){
            header("Location: ../../internships.php?task=deletedinternship");
        }
}              
 /* Delete Internship */    
 /* Add And Delete Course Section */                       
 if(isset($_POST['add_course'])){
    $company_id = $_SESSION['id'];
    $id = " ";
    $courses = mysqli_real_escape_string($conn,strtoupper($_POST['courses']));
    $streams = mysqli_real_escape_string($conn,strtoupper($_POST['streams']));
    $sql = "INSERT INTO `course`(`id`, `company_id`, `course_name`, `course_stream`) VALUES ('$id','$company_id','$courses','$streams')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:../../add_courses.php?task=successfullyadded");
    }
}
if(isset($_POST['delete_course'])){
    $courses = mysqli_real_escape_string($conn,$_POST['courses']);
    $streams = mysqli_real_escape_string($conn,$_POST['streams']);
    $company_id = $_SESSION['id'];
    $sql = "DELETE FROM course where company_id = '$company_id' and course_name = '$courses' and course_stream = '$streams'";
    echo $sql;
    $res = mysqli_query($conn,$sql);
        if($res){
            header("Location: ../../add_courses.php?task=deleted");
        }
    }                   
/* Add And Delete Course Section End*/
/* To Reject a Candidate */
if(isset($_POST['reject']))
{
        $student_id = $_POST['id2'];
        $company_id = $_POST['id1'];
        $internship_id = $_POST['id3'];
        $time_stamp = date("y/m/d");
        $id = " ";
        $sql = "SELECT * FROM offer_list where company_id = '$company_id' and student_id = '$student_id'";
        $res = mysqli_query($conn,$sql);
        $res1 = mysqli_num_rows($res);
        if($res1>0)
        {
        $sql="DELETE  FROM `offer_list` WHERE company_id = '$company_id' and student_id = '$student_id' and internship_id ='$internship_id'";
        $res = mysqli_query($conn,$sql);
        }
        $status = "rejected";
        $sql="UPDATE `government_internship_apply` SET `status`= '$status' WHERE student_uid='$student_id' and internship_uid='$internship_id'and company_id='$company_id';";
        $res = mysqli_query($conn,$sql);
        header("location:../../interview_management.php?task=rejected");
}                       
     /* Reject the candidate Section End */                   
                             /* To hold */   
if(isset($_POST['hold'])){
    $student_id = $_POST['id2'];
    $company_id = $_POST['id1'];
    $internship_id = $_POST['id3'];
    $time_stamp = date("y/m/d");
    $id = " ";
    $hold="HOLD".uniqid().time();
    /* $sql="INSERT INTO `hold_list`(`hold_uid`, `company_id`, `student_id`, `internship_id`, `time_stamp`) VALUES('$hold','$company_id','$student_id','$internship_id','$time_stamp') ;";
    $res = mysqli_query($conn,$sql);
    if($res){ */
        $status = "holded";
        $sql="UPDATE `government_internship_apply` SET `status`= '$status' WHERE student_uid='$student_id' and internship_uid='$internship_id'and company_id='$company_id';";
        $res = mysqli_query($conn,$sql);
        if($res){
            header("location:../../interview_management.php?task=holdedsuccessfully");
        }
    }                                                                   
                        
    if(isset($_POST['accept'])){
        $student_id = $_POST['id2'];
        $company_id = $_POST['id1'];
        $internship_id = $_POST['id3'];
        $time_stamp = date("y/m/d");
        $id = " ";
        $hold="HOLD".uniqid().time();
        /* $sql="INSERT INTO `hold_list`(`hold_uid`, `company_id`, `student_id`, `internship_id`, `time_stamp`) VALUES('$hold','$company_id','$student_id','$internship_id','$time_stamp') ;";
        $res = mysqli_query($conn,$sql);
        if($res){ */
            $status = 0;
            $sql="UPDATE `government_internship_apply` SET `status`= '$status' WHERE student_uid='$student_id' and internship_uid='$internship_id'and company_id='$company_id';";
            $res = mysqli_query($conn,$sql);
            if($res){
                header("location:../../interview_management.php?task=holdedsuccessfully");
            }
        }                                   
if(isset($_POST['called_for_interview']))
{
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $info = mysqli_real_escape_string($conn,$_POST['info']);
    $needed = mysqli_real_escape_string($conn,$_POST['needed']);
    $interview_place = mysqli_real_escape_string($conn,$_POST['interview_place']);
    $note = mysqli_real_escape_string($conn,$_POST['note']);
    $company_id = mysqli_real_escape_string($conn,$_POST['company_id']);
    $student_id = mysqli_real_escape_string($conn,$_POST['student_id']);
    $internship_uid = mysqli_real_escape_string($conn,$_POST['internship_uid']);
    $time = mysqli_real_escape_string($conn,$_POST['time']);
    $id =" ";
    $sql = "INSERT INTO `interview_info`(`company_id`, `student_id`, `internship_uid`, `date`, `time`, `info`, `needed`, `interview_place`, `note`) VALUES  ('$company_id','$student_id','$internship_uid','$date','$time','$info','$needed','$interview_place','$note')";
    $res = mysqli_query($conn,$sql);
    if($res){
        
        $status = 2;
        $sql="UPDATE `government_internship_apply` SET `status`= '$status' WHERE student_uid='$student_id' and internship_uid='$internship_uid'and company_id='$company_id';";
        $res = mysqli_query($conn,$sql);
        if($res){
            header("location:../../interview_management.php?task=called");
        }
    }
}                                                          
if(isset($_POST['offer_letter']))
{
    $start_date = mysqli_real_escape_string($conn,$_POST['start_date']);
    $end_date = mysqli_real_escape_string($conn,$_POST['end_date']);
    $address1 =" " ;/* mysqli_real_escape_string($conn,$_POST['address1']); */
    $address2 = mysqli_real_escape_string($conn,$_POST['address2']);
    $note = mysqli_real_escape_string($conn,$_POST['note']);
    $company_id = mysqli_real_escape_string($conn,$_POST['company_id']);
    $internship_uid = mysqli_real_escape_string($conn,$_POST['internship_uid']);
    $contact_info = mysqli_real_escape_string($conn,$_POST['contact_info']);
    $student_id = mysqli_real_escape_string($conn,$_POST['student_id']);
    $id =" ";

    $sql = "INSERT INTO `letter_format`(`company_id`, `internship_id`, `starting_date`, `ending_date`, `address1`, `address2`, `note`,`contact_info`) VALUES  ('$company_id','$internship_uid','$start_date','$end_date','$address1','$address2','$note','$contact_info')";
    $res = mysqli_query($conn,$sql);
    if($res){
        $status = 3;
        $sql = "UPDATE `government_internship_apply` SET `status`='$status' WHERE `company_id`='$company_id' and internship_uid = '$internship_uid' and student_uid = '$student_id'";
        echo $sql;
        $res = mysqli_query($conn,$sql);
        if($res){
       header("location:../../offer_generator.php?uid=".$student_id);
        }
    }
}                        
if(isset($_POST['reject_reason']))
{
$internship_uid = mysqli_real_escape_string($conn,$_POST['internship_id']);
$id = $_SESSION['id'];
$student_id = mysqli_real_escape_string($conn,$_POST['student_id']);
$status = "rejected";
$reason = mysqli_real_escape_string($conn,$_POST['reason']);
$sql = "UPDATE `government_internship_apply` SET `status`='$status',`reason`='$reason' WHERE `company_id`='$id' and internship_uid = '$internship_uid' and student_uid = '$student_id'";
$res = mysqli_query($conn,$sql);
if($res){
    header("location:../../interview_management.php?task=rejected_successfully");
}
} 
if(isset($_POST['hold_reason']))
{
$internship_uid = mysqli_real_escape_string($conn,$_POST['internship_id']);
$id = $_SESSION['id'];
$student_id = mysqli_real_escape_string($conn,$_POST['student_id']);
$status = "holded";
$reason = mysqli_real_escape_string($conn,$_POST['reason']);
$sql = "UPDATE `government_internship_apply` SET `status`='$status',`reason`='$reason' WHERE `company_id`='$id' and internship_uid = '$internship_uid' and student_uid = '$student_id'";
$res = mysqli_query($conn,$sql);
if($res){
    header("location:../../interview_management.php?task=waitlisted_successfully");
}
}                                              
if(isset($_POST['certificate_gen'])){
    $id =" ";
    $company_id = mysqli_real_escape_string($conn,$_POST['company_id']);
    $student_id = mysqli_real_escape_string($conn,$_POST['student_id']);
    $internship_id = mysqli_real_escape_string($conn,$_POST['internship_id']);
    $starting_date = mysqli_real_escape_string($conn,$_POST['starting_date']);
    $ending_date = mysqli_real_escape_string($conn,$_POST['ending_date']);
    $working_under = mysqli_real_escape_string($conn,$_POST['working_under']);
    $working_area = mysqli_real_escape_string($conn,$_POST['working_area']);
    $performance = mysqli_real_escape_string($conn,$_POST['performance']);
    $rate = mysqli_real_escape_string($conn,$_POST['rate']);
    $sql = "INSERT INTO `college_format`(`id`, `company_id`, `student_id`, `internship_id`, `starting_date`, `ending_date`, `working_under`, `working_area`, `performance`, `rate`) VALUES ('$id','$company_id','$student_id',' $internship_id','$starting_date','$ending_date','$working_under','$working_area','$performance','$rate')";
    $res = mysqli_query($conn,$sql);
    if($res){
        $status = "completed";
        $sql="UPDATE `government_internship_apply` SET `status`= '$status' WHERE student_uid='$student_id' and internship_uid='$internship_id'and company_id='$company_id';";
        $res = mysqli_query($conn,$sql);
        if($res){
        header("location:../../certificate_generator.php?uid=".$student_id);
    }

}
}                                                  
if(isset($_POST['shortlist'])){
    $student_id = $_POST['id2'];
    $company_id = $_POST['id1'];
    $internship_id = $_POST['id3'];
    $time_stamp = date("y/m/d");
    $id = " ";
    $hold="HOLD".uniqid().time();
        $status = 1;
        $sql="UPDATE `government_internship_apply` SET `status`= '$status' WHERE student_uid='$student_id' and internship_uid='$internship_id'and company_id='$company_id';";
        $res = mysqli_query($conn,$sql);
        if($res){
            header("location:../../interview_management.php?task=shortlistedsuccessfully");
        }
}
 $logo = "";
 $uid = $_SESSION['id'];                                 
if(isset($_POST['upload_logo'])){

    if (isset($_FILES["logo"])) 
    {
        // Get Image Dimension
        $fileinfo = @getimagesize($_FILES["logo"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];
        
        $allowed_image_extension = array(
            "PNG",
            "png",
            "jpg",
            "jpeg"
        );
        
        // Get image file extension
        $file_extension = pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
        
        // Validate file input to check if is not empty
        if (! in_array($file_extension, $allowed_image_extension)) {
            header("location:../../profile.php?task=invalidfiletype");
        }    // Validate image file size
        else if (($_FILES["logo"]["size"] > 2000000)) {
            header("location:../../profile.php?task=greater");
        }    // Validate image file dimension
        /* else if ($width > "300" || $height > "200") {
            header("location:../../ubl_register.php?task=invalidheightandwitdth");
        }  */else {
            $logo = $uid.".".$file_extension;
            $target = "../../../uploads/logo/".$logo;
            if (move_uploaded_file($_FILES["logo"]["tmp_name"],$target)) {
                $id = $_SESSION['id'];
                $logo = mysqli_real_escape_string($conn,$logo);
                $sql = "UPDATE ubl_register SET ulb_logo = '$logo' WHERE ulb_company_id = '$id'";
                $res = mysqli_query($conn,$sql);
                if($res){
                    header("location:../../profile.php?task=updated_profile");
                }
            } 
        }
    }
}                                      
                                    
                               
?>