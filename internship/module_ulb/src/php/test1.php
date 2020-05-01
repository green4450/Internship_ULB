<?php
include '../../../src/php/dbh.php';
session_start();
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