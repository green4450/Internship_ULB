<?php

include '../../../src/php/dbh.php';
session_start();                         /* Login Code For Student */
if(isset($_POST['login']))
{
$username = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$internship_uid = mysqli_real_escape_string($conn,$_POST['internship_uid']);
$company_id = mysqli_real_escape_string($conn,$_POST['company_id']);
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$id=" ";
$salt = " ";
$status = 0;
$locations = " ";
$password=md5($password);
if ($username && $password) {
    $query   = ("SELECT student_email,student_password,student_uid,student_first_name,salt,status,student_first_location,student_second_location,student_third_location,student_fourth_location FROM student_register WHERE student_email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows>0) {
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['student_email'];
            $dbpassword = $row['student_password'];
            $id=$row['student_uid'];
            $user=$row['student_first_name'];
            $salt = $row['salt'];
            $status = $row['status'];
            $locations = $row['student_first_location'];
            /* $qualification = $row['student_course']; */
        }
        if($username == $dbusername && $dbpassword == sha1($password.$salt)) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=1;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            $_SESSION['location']=$locations;
            if($status!=0){
                /* $sql = "Select qualification,posted_on From go   vernment_internship_apply LIKE %%";
                $res = mysqli_query($conn,$sql); */
                header("Location: ../../apply.php?uid=".$internship_uid."&company_id=".$company_id."&level=2");
            }else
            {
                header("location: ../../edit_profile_user.php?task=plseupdateprofile");
            }
             //another file to send request to the next page if values are correct.
         } 
        else{
             header("location: ../../login.php?task=WrongPassword"); 
            }
        }
        else {
           header("location: ../../login.php?task=UserNotExist");
            }
}
else{
    header("location: ../../login.php?task=PlseEnterUsernameorPassword");
    }
} 
                                        /* student register */
if (isset($_POST['student-register'])) {
    $id ='';
    $student_first_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $student_last_name = mysqli_real_escape_string($conn, $_POST['lname']);
    $student_contact = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $student_email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $$student_first_location = mysqli_real_escape_string($conn, $_POST['city']);
    $languages=" ";
    $technical=" ";
    $skills=" ";
    $student_certificate=" ";$student_hobbies=" ";$internship_experience=" ";$student_areaofintreset=" ";$student_work_and_volunteer=" ";$publication_and_research=" ";$events_and_research=" ";$student_second_location=" ";$student_third_location=" ";$student_fourth_location=" ";$institute_phone=" ";$institute_name=" ";$institute_mobile=" ";$institue_location=" ";$institue_email=" ";$student_activites=" ";$links=" ";$student_caste=" ";
    $student_graduating_year =" ";$tpo_name=" ";$year="";$stream="";$student_course="";$course="";
    $tpo_email =" ";$student_description=" ";
    // Hashning the password
    $hash_pwd = md5($password);
    
    // Generating a unique id
    $student_uid = "STU".uniqid().time();
    $salt = sha1(uniqid());
    $sql1 = "SELECT student_email FROM student_register WHERE student_email = '$student_email'";
    $res1=mysqli_query($conn, $sql1);
    $res2 = mysqli_num_rows($res1);
    if($res2<1){
    $hash_pwd=sha1($hash_pwd.$salt);
    $sql = "INSERT INTO `student_register`(`student_uid`, `student_first_name`, `student_last_name`, `student_email`, `student_contact`, `student_course`, `student_stream`, `student_year`, `student_description`, `student_languages`, `student_carrer_intrest`, `student_skills`, `student_certificate`, `student_password`, `salt`, `student_activites`, `student_hobbies`, `internship_experience`, `student_work_and_volunteer`, `publication_and_research`, `events_and_research`, `student_first_location`, `student_second_location`, `student_third_location`, `student_fourth_location`, `student_areaofintreset`, `institute_name`, `institute_phone`, `institute_mobile`, `institute_location`, `institute_email`, `tpo_name`, `tpo_email`, `link`, `student_caste`, `student_graduating_year`,`student_state`) VALUES('$student_uid', '$student_first_name', '$student_last_name', '$student_email', '$student_contact','$course','$stream','$year','$languages','$student_description','$technical','$skills','$student_certificate','$hash_pwd','$salt','$student_activites','$student_hobbies','$internship_experience','$student_work_and_volunteer','$publication_and_research','$events_and_research','$student_first_location','$student_second_location','$student_third_location','$student_fourth_location','$student_areaofintreset','$institute_name','$institute_phone','$institute_mobile','$institue_location','$institue_email','$tpo_name','$tpo_email','$links','$student_caste','$student_graduating_year','$state')";
    $res=mysqli_query($conn, $sql);
        if($res)         
        {
            header("location:../../login.php?task=RegisteredSuccessfully");
        }
    }
    else
    header("location:../../student-register.php?task=duplicatevalue");
}
                                        /* Messaging Section */

if (isset($_POST['loadDataCompany'])) {
    $projectId = mysqli_real_escape_string($conn, $_POST['company_id']);
    $userId=    mysqli_real_escape_string($conn, $_POST['userId']);
    $sql = "SELECT * FROM message where msg_from ='$projectId' and msg_to='$userId' or msg_to='$projectId' and msg_from='$userId'  ORDER BY msg_date ASC;";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if ($resultChk < 1) {
        echo '
        <span class="">
            <p class="h4 text-center" style="margin-top: 15%;">No Message Yet</p>
            <!-- <img src="https://media1.giphy.com/media/eonIj5bw871io/source.gif" class="img-fluid w-50" alt="No Message" srcset=""> -->
        </span>
        ';
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="chat_list">
            <div class="chat_people">
              <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    '.$row['msg_from_name'].'
            <div class="received_msg">
                <div class="received_withd_msg">
                    <p>'.$row['msg'].'</p>
                    <span class="time_date"> 11:01 AM | Today</span>
                </div>
            </div>
        </div>
    </div>
            ';
        }
    }
}


if (isset($_POST['loadDataStudent'])) {
    $projectId = mysqli_real_escape_string($conn, $_POST['student_id']);
    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
    $sql = "SELECT * FROM message where msg_from ='$projectId' and msg_to='$userId' or msg_to='$projectId' and msg_from='$userId'  ORDER BY msg_date ASC;";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if (($resultChk)< 1) {
        echo '
        <span class="">
            <p class="h4 text-center" style="margin-top: 15%;">No Message Yet</p>
            <!-- <img src="https://media1.giphy.com/media/eonIj5bw871io/source.gif" class="img-fluid w-50" alt="No Message" srcset=""> -->
        </span>
        ';
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="incoming_msg">
            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                    alt="sunil"> 
                    </div>
                    '.$row['msg_from_name'].'
            <div class="received_msg">
                <div class="received_withd_msg">
                    <p>'.$row['msg'].'</p>
                    <span class="time_date"> 11:01 AM | Today</span>
                </div>
            </div>
        </div>
    </div>
            ';
        }
    }
}

// @POST Request for sending Message
if (isset($_POST['messageSendByCompany'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $projectId = mysqli_real_escape_string($conn, $_POST['student_id']);
    $userId = mysqli_real_escape_string($conn, $_POST['uid']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $sql = "INSERT INTO message (msg_to, msg_from, msg_from_name, msg, msg_date) VALUES ('$projectId', '$userId', '$user', '$message','$date');";
$res = mysqli_query($conn, $sql);
}

if (isset($_POST['messageSendByStudent'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $projectId = mysqli_real_escape_string($conn, $_POST['company_id']);
    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $sql = "INSERT INTO message (msg_to, msg_from, msg_from_name, msg, msg_date) VALUES ('$projectId', '$userId', '$user', '$message','$date');";
$res = mysqli_query($conn, $sql);
}
$uid = $_SESSION['id'];
if(isset($_POST['upload_profile'])){
    if (isset($_FILES["profile1"])) 
    {
        
        // Get Image Dimension
        $fileinfo = @getimagesize($_FILES["profile1"]["tmp_name"]);
        $width = $fileinfo[0];
        $height = $fileinfo[1];
        
        $allowed_image_extension = array(
            "PNG",
            "png",
            "jpg",
            "jpeg"
        );
        // Get image file extension
        $file_extension = pathinfo($_FILES["profile1"]["name"], PATHINFO_EXTENSION);
        
        // Validate file input to check if is not empty
        if (! in_array($file_extension, $allowed_image_extension)) {
            header("location:../../edit_profile_user.php?task=invalidfiletype");
        }    // Validate image file size
        else if (($_FILES["profile1"]["size"] > 2000000)) {
            header("location:../../edit_profile_user.php?task=greater");
        }  else {
            echo $_FILES["profile1"]["name"];
            $logo = $uid.$_FILES["profile1"]["name"];
            $target = "../../../uploads/profile/" .$logo;
            move_uploaded_file($_FILES["profile1"]["tmp_name"],$target);
            $logo = mysqli_real_escape_string($conn,$logo);
                $id = $_SESSION['id'];
                $sql = "UPDATE student_register SET `student_profile_photo` = '$logo' WHERE student_uid = '$id'";
                $res = mysqli_query($conn,$sql);
                if($res){
                header("location: ../../edit_profile_user.php?task=profilephotoupdated");
                }
            } 
        }
    }

if(isset($_POST['personal_info'])){
$id = $_SESSION['id'];
$student_email = $_SESSION['email'];
$first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
$course = mysqli_real_escape_string($conn,$_POST['course']);
$year = mysqli_real_escape_string($conn,$_POST['year']);
$student_id = mysqli_real_escape_string($conn,$_POST['student_id']);
$student_description = mysqli_real_escape_string($conn,$_POST['description']);
$gender = mysqli_real_escape_string($conn,$_POST['gender']);
$student_graduating_year = mysqli_real_escape_string($conn,strtoupper($_POST['student_graduating_year']));
$student_graduating_marks = mysqli_real_escape_string($conn,strtoupper($_POST['student_graduating_marks']));
$student_caste = mysqli_real_escape_string($conn,strtoupper($_POST['category']));
$student_10th_school = mysqli_real_escape_string($conn,$_POST['student_10th_school']);
$student_10th_marks = mysqli_real_escape_string($conn,$_POST['student_10th_marks']);
$student_10th_year = mysqli_real_escape_string($conn,$_POST['student_10th_year']);
$student_12th_school = mysqli_real_escape_string($conn,strtoupper($_POST['student_12th_school']));
$student_12th_marks = mysqli_real_escape_string($conn,strtoupper($_POST['student_12th_marks']));
$student_12th_year = mysqli_real_escape_string($conn,strtoupper($_POST['student_12th_year']));
$institute_name = mysqli_real_escape_string($conn,strtoupper($_POST['institute_name']));
$sql = "UPDATE `student_register` SET `student_first_name`='$first_name',`student_last_name`='$last_name',`student_contact`='$mobile',`student_course`='$course',`student_year`='$year',`student_description`='$student_description',student_graduating_year='$student_graduating_year',student_graduating_marks='$student_graduating_marks',student_caste='$student_caste',student_id='$student_id',student_10th_school = '$student_10th_school',student_10th_marks = '$student_10th_marks',student_10th_year = '$student_10th_year',student_12th_school = '$student_12th_school',student_12th_marks = '$student_12th_marks',student_12th_year = '$student_12th_year',student_gender = '$gender' WHERE student_uid = '$id'";
echo $sql;
$res = mysqli_query($conn,$sql);
if($res){
    $sql="UPDATE student_register SET status = 1 WHERE student_email = '$student_email'";
    $res = mysqli_query($conn,$sql);
    if($res){
    header('Location:../../edit_profile_user.php?task=updated');
    }
}
}
if(isset($_POST['add_institute']))
{
    $id = $_SESSION['id'];
    $institute_name = mysqli_real_escape_string($conn,strtoupper($_POST['institute_name']));
    $institute_phone = mysqli_real_escape_string($conn,strtoupper($_POST['institute_phone']));
    $institute_mobile = mysqli_real_escape_string($conn,strtoupper($_POST['institute_mobile']));
    $institute_email = mysqli_real_escape_string($conn,strtoupper($_POST['institute_email']));
    $institue_location = mysqli_real_escape_string($conn,strtoupper($_POST['institue_location']));
    $tpo_name = mysqli_real_escape_string($conn,$_POST['tpo_name']);
    $tpo_email = mysqli_real_escape_string($conn,$_POST['tpo_email']);
    $sql = "UPDATE `student_register` SET `institute_name`='$institute_name',`institute_phone`='$institute_phone',`institute_mobile`='$institute_mobile',`institute_email`='$institute_email' , `institute_location`='$institue_location',`tpo_name`='$tpo_name',`tpo_email`='$tpo_email'WHERE student_uid = '$id' ";
    $res = mysqli_query($conn,$sql);
    if($res){
        $sql="UPDATE student_register SET status = 2 WHERE student_email = '$student_email'";
        $res = mysqli_query($conn,$sql);
        if($res){
        header('Location:../../edit_profile_user.php?task=updated');
        }
    }
}

if(isset($_POST['add_skills']))
{
    $id = $_SESSION['id'];
    $student_languages = mysqli_real_escape_string($conn,$_POST['student_languages']);
    $student_carrer_intrest = mysqli_real_escape_string($conn,$_POST['student_carrer_intrest']);
    $student_skills = mysqli_real_escape_string($conn,$_POST['student_skills']);
    $student_certificate = mysqli_real_escape_string($conn,$_POST['student_certificate']);
    $student_activites = mysqli_real_escape_string($conn,$_POST['student_activites']);
    $internship_experience = mysqli_real_escape_string($conn,$_POST['internship_experience']);
    $student_work_and_volunteer = mysqli_real_escape_string($conn,$_POST['student_work_and_volunteer']);
    $publication_and_research = mysqli_real_escape_string($conn,$_POST['publication_and_research']);
    $student_events = mysqli_real_escape_string($conn,$_POST['student_events']);
    $student_tech_events = mysqli_real_escape_string($conn,$_POST['student_tech_events']);
    $student_sports = mysqli_real_escape_string($conn,$_POST['student_sports']);
    $sql = "UPDATE `student_register` SET `student_languages`='$student_languages',`student_carrer_intrest`='$student_carrer_intrest',`student_skills`='$student_skills',`student_certificate`='$student_certificate' , `student_activites`='$student_activites',`internship_experience`='$internship_experience', `student_work_and_volunteer`='$student_work_and_volunteer', `publication_and_research`='$publication_and_research',`student_events` = '$student_events',`student_tech_events`='$student_tech_events', 
    `student_sports` = '$student_sports' WHERE student_uid = '$id'";
    echo $sql;
    $res = mysqli_query($conn,$sql);
    if($res){
        $student_email = $_SESSION['email'];
        $sql="UPDATE student_register SET status = 3 WHERE student_email = '$student_email'";
        $res = mysqli_query($conn,$sql);
        if($res){
        header('Location:../../edit_profile_user.php?task=updated');
        }
    }
}
$refid = $_SESSION['id'];
if(isset($_POST['upload_reference'])){
    if(is_uploaded_file($_FILES['reference_letter']['tmp_name']))
{  
    $targetfolder = "../../../uploads/reference_letter/";
    $userfile_name = $_FILES['reference_letter']['name'];
    $ext = substr($userfile_name, strrpos($userfile_name, '.')+1);
    $uploadsize = 1000000;
    $size = $_FILES['reference_letter']['size'];
    if($size<$uploadsize)
    {
    if($ext=='pdf')
    {
        $file="reference_letter".$refid.".".$ext;
        $reference_letter= $file;
        $targetfolder = $targetfolder.$file;
        move_uploaded_file($_FILES['reference_letter']['tmp_name'], $targetfolder);
    }
    else
    {
        header('location:../../edit_profile_student.php?task=pdfnotUploaded');
    }
    }
    else{
        header('location:../../edit_profile_student.php?task=FileSizeExceeded');
    }
}
$id = $_SESSION['id'];
$reference_letter = mysqli_real_escape_string($conn,$reference_letter);
$reference_mobile = mysqli_real_escape_string($conn,$_POST['reference_mobile']);
$sql = "UPDATE student_register set student_refrence_letter = '$reference_letter',student_refrence_mobile = '$reference_mobile'where student_uid ='$id'";
$res = mysqli_query($conn,$sql);
if($res){
    $sql="UPDATE student_register SET status = 4 WHERE student_email = '$student_email'";
    $res = mysqli_query($conn,$sql);
    if($res){
    header('Location:../../edit_profile_user.php?task=updated');
    }
}
}
$resume = "";
if(isset($_POST['upload_document'])){
    if(is_uploaded_file($_FILES['resume']['tmp_name']))
    {  
        $targetfolder = "../../../uploads/resume/";
        $userfile_name = $_FILES['resume']['name'];
        $ext = substr($userfile_name, strrpos($userfile_name, '.')+1);
        $uploadsize = 1000000;
        $size = $_FILES['resume']['size'];
        if($size<$uploadsize)
        {
        if($ext=='pdf')
        {
            $file="resume".$refid.".".$ext;
            $resume= $file;
            $targetfolder = $targetfolder.$file;
            move_uploaded_file($_FILES['resume']['tmp_name'], $targetfolder);
        }
        else
        {
            header('location:../../edit_profile_student.php?task=pdfnotUploaded');
        }
        }
        else{
            header('location:../../edit_profile_student.php?task=FileSizeExceeded');
        }
    }

    $cover_letter = " ";
    if(is_uploaded_file($_FILES['cover_letter']['tmp_name']))
    {  
        $targetfolder = "../../../uploads/cover_letter/";
        $userfile_name = $_FILES['cover_letter']['name'];
        $ext = substr($userfile_name, strrpos($userfile_name, '.')+1);
        $uploadsize = 1000000;
        $size = $_FILES['cover_letter']['size'];
        if($size<$uploadsize)
        {
        if($ext=='pdf')
        {
            $file="cover_letter".$refid.".".$ext;
            $cover_letter= $file;
            $targetfolder = $targetfolder.$file;
            move_uploaded_file($_FILES['cover_letter']['tmp_name'], $targetfolder);
        }
        else
        {
            header('location:../../edit_profile_student.php?task=pdfnotUploaded');
        }
        }
        else{
            header('location:../../edit_profile_student.php?task=FileSizeExceeded');
        }
    }
    $transcripts = "";
    if(is_uploaded_file($_FILES['transcripts']['tmp_name']))
    {  
        $targetfolder = "../../../uploads/transcripts/";
        $userfile_name = $_FILES['transcripts']['name'];
        $ext = substr($userfile_name, strrpos($userfile_name, '.')+1);
        $uploadsize = 1000000;
        $size = $_FILES['transcripts']['size'];
        if($size<$uploadsize)
        {
        if($ext=='pdf')
        {
            $file="transcripts".$refid.".".$ext;
            $transcripts= $file;
            $targetfolder = $targetfolder.$file;
            move_uploaded_file($_FILES['transcripts']['tmp_name'], $targetfolder);
        }
        else
        {
            header('location:../../edit_profile_student.php?task=pdfnotUploaded');
        }
        }
        else{
            header('location:../../edit_profile_student.php?task=FileSizeExceeded');
        }
    }
    $other_documents = "";
    if(is_uploaded_file($_FILES['other_documents']['tmp_name']))
    {  
        $targetfolder = "../../../uploads/other_documents/";
        $userfile_name = $_FILES['other_documents']['name'];
        $ext = substr($userfile_name, strrpos($userfile_name, '.')+1);
        $uploadsize = 1000000;
        $size = $_FILES['other_documents']['size'];
        if($size<$uploadsize)
        {
        if($ext=='pdf')
        {
            $file="other_documents".$refid.".".$ext;
            $other_documents= $file;
            $targetfolder = $targetfolder.$file;
            move_uploaded_file($_FILES['other_documents']['tmp_name'], $targetfolder);
        }
        else
        {
            header('location:../../edit_profile_student.php?task=pdfnotUploaded');
        }
        }
        else{
            header('location:../../edit_profile_student.php?task=FileSizeExceeded');
        }
    }
    $id = $_SESSION['id'];
    $resume = mysqli_real_escape_string($conn,$resume);
    $transcripts = mysqli_real_escape_string($conn,$transcripts);
    $cover_letter = mysqli_real_escape_string($conn,$cover_letter);
    $other_documents = mysqli_real_escape_string($conn,$other_documents);
    $sql = "UPDATE student_register set student_resume = '$resume',student_cover_letter = '$cover_letter',student_transcript = '$transcripts' , student_other_documents='$other_documents' where student_uid ='$id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        $student_email = $_SESSION['email'];
        $sql="UPDATE student_register SET status = 5 WHERE student_email = '$student_email'";
        $res = mysqli_query($conn,$sql);
        if($res){
        header('Location:../../edit_profile_user.php?task=updated');
        }
    }
}

if(isset($_POST['add_location']))
{
    $id = $_SESSION['id'];
    $first_location = mysqli_real_escape_string($conn,strtoupper($_POST['first_location']));
    $second_location = mysqli_real_escape_string($conn,strtoupper($_POST['second_location']));
    $third_location = mysqli_real_escape_string($conn,strtoupper($_POST['third_location']));
    $fourth_location = mysqli_real_escape_string($conn,strtoupper($_POST['fourth_location']));
    $sql = "UPDATE `student_register` SET `student_first_location`='$first_location',`student_second_location`='$second_location',`student_third_location`='$third_location',`student_fourth_location`='$fourth_location' WHERE student_uid = '$id'";
    echo $sql;
    $res = mysqli_query($conn,$sql);
    if($res){
        $student_email = $_SESSION['email'];
        $sql="UPDATE student_register SET status = 6 WHERE student_email = '$student_email'";
        $res = mysqli_query($conn,$sql);
        if($res){
        header('Location:../../edit_profile_user.php?task=updated');
        }
}
}

if(isset($_POST['submit_link'])){
    $id = $_SESSION['id'];
    $link = mysqli_real_escape_string($conn,$_POST['links']);
    $sql = "UPDATE `student_register`SET `link`='$link' where student_uid ='$id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        $student_email = $_SESSION['email'];
        $sql="UPDATE student_register SET status = 7 WHERE student_email = '$student_email'";
        $res = mysqli_query($conn,$sql);
        if($res){
        header('Location:../../edit_profile_user.php?task=updated');
        }
    }
}
?>