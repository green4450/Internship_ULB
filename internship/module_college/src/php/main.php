<?php

include '../../../src/php/dbh.php';
session_start();
/* Login Code For Student */
if(isset($_POST['login_c']))
{
$username = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$apply_id=mysqli_real_escape_string($conn,$_POST['apply_id']);
$company_id=mysqli_real_escape_string($conn,$_POST['company_id']);
$internship_id=mysqli_real_escape_string($conn,$_POST['internship_id']);
$dbusername = " ";
$dbpassword = " ";
$user=" ";
$id=" ";
$salt = " ";
$password=md5($password);

if ($username && $password) {
    $query   = ("SELECT * FROM college_register WHERE collegetpo_email='$username'");
    $result  = mysqli_query($conn, $query);
    $numrows = mysqli_num_rows($result);
    if ($numrows>0) {
        while ($row = mysqli_fetch_assoc($result)) 
   {
            $dbusername = $row['collegetpo_email'];
            $dbpassword = $row['collegetpo_password'];
            $id=$row['uid'];
            $user=$row['collegetpo_firstname'];
            $salt = $row['salt'];
        }
        if($username ==$dbusername && $dbpassword == sha1($password.$salt)) 
        {
            $_SESSION['email'] = $username;
            $_SESSION['login_level']=1;
            $_SESSION['id']=$id;
            $_SESSION['user']=$user;
            $_SESSION['loggedIn']=1;
            if($apply_id==1)
            header("location: ../../apply.php?uid=$internship_id&company_id=$company_id");
            else
            header("location: ../../index_dashboard.php");
             //another file to send request to the next page if values are correct.
        } 
        else{
             header("location: ../../login_corporate.php?task=WrongPassword");
            }
        }
        else {
            header("location: ../../login_corporate.php?task=UserNotExist");
            }
}
else{
    header("location: ../../login_corporate.php?task=PlseEnterUsernameorPassword");
    }
} 

//corporate register
if (isset($_POST['college-register'])) {
    $collegeid=mysqli_real_escape_string($conn,$_POST['unique']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contactnum = mysqli_real_escape_string($conn, $_POST['contactnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $idnumber = mysqli_real_escape_string($conn, $_POST['idnum']);
    $organization = mysqli_real_escape_string($conn, $_POST['organization']);
    $uid = "COLLEGE".uniqid().time();
    // Hashning the password
    $hash_pwd = md5($password);
    $salt = sha1(uniqid());
    $hash_pwd=sha1($hash_pwd.$salt);   
    $sql = "INSERT INTO `college_register`(`college_uid`, `college_name`, `college_id`, `collegetpo_firstname`,`collegetpo_lastname`,`collegetpo_email`, `collegetpo_password`, `salt`, `collegetpo_number`, `collegetpo_idnumber`) VALUES('$uid','$organization','$collegeid', '$fname', '$lname', '$email','$hash_pwd','$salt','$contactnum','$idnumber') ";
    $res=mysqli_query($conn,$sql);
    echo $res;
    if($res)
    {
        header("location:../../login_corporate.php?task=RegisteredSuccessfully");
    }
}

if(isset($_POST['add_students'])){
    $college_id = mysqli_real_escape_string($conn,$_POST['id']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);
    $stream = mysqli_real_escape_string($conn,$_POST['stream']);
    $students = mysqli_real_escape_string($conn,$_POST['students']);
    $year = mysqli_real_escape_string($conn,$_POST['year']);
    $sql="INSERT INTO `college_students`(`college_id`, `course`, `stream`, `students`, `year`) VALUES('$college_id','$course','$stream','$students','$year')";  
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:../../student_mangement.php?task=AddedSuccessfully");
    }   
}
if(isset($_POST['add_login  '])){
    $college_id = $_SESSION['id'];
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $employ_id = mysqli_real_escape_string($conn,$_POST['employ_id']);
    $authority = mysqli_real_escape_string($conn,$_POST['authority']);
    $role = mysqli_real_escape_string($conn,$_POST['role']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $password = md5($password);
    $salt = sha1(uniqid());
    $password = sha1($password,$salt);
    $sql="INSERT INTO `college_logins`(`college_id`, `college_person_name`, `college_person_id`, `college_authority`, `college_role`, `college_personemail`, `college_personpassword`,`salt`) VALUES ('$college_id','$name','$employ_id','$authority','$role','$email','$password','$salt')";  
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:../../add_college_role.php?task=AddedSuccessfully");
    }   
}
if(isset($_POST['add_course'])){

}


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
?>