<?php
include '../../../src/php/dbh.php';
echo "SS";
$reference_letter ="";
if(isset($_POST['upload_reference'])){   
    $targetfolder = "../../../uploads/reference_letter/";
    $userfile_name = $_FILES['reference_letter1']['name'];
    $ext = substr($userfile_name, strrpos($userfile_name, '.')+1);
    $uploadsize = 1000000;
    $size = filesize($_FILES['reference_letter1']['name']);
    echo $size;
    if($size<$uploadsize)
    {
    if($ext=='pdf')
    {
        $file="reference_letter".$refid.".".$ext;
        $reference_letter= $file;
        $targetfolder = $targetfolder.$file;
        move_uploaded_file($_FILES['reference_letter1']['tmp_name'], $targetfolder);
    }
    else
    {
        /* header('location:../../edit_profile_student.php?task=pdfnotUploaded'); */
    }
}
$reference_letter = mysqli_real_escape_string($conn,$reference_letter);
$reference_mobile = mysqli_real_escape_string($conn,$_POST['reference_mobile']);
}