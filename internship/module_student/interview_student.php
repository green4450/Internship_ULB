<?php 
include './include/auth.php';
include './include/header_students.php'; 
$student_first_location = " ";
$student_second_location = " ";
$student_third_location = " "; 
$student_fourth_location = " ";
$date1 = "";
$flag = 0 ;
$flag1 = 0;
$flag2= 0;
function dateDiffInDays($date1, $date2)  
{ 
    // Calulating the difference in timestamps 
    $diff = strtotime($date2) - strtotime($date1); 
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds 
    return abs(round($diff / 86400)); 
}
?>

<?php 
$id = $_SESSION['id'];
$sql = "SELECT student_first_location,student_second_location,student_third_location,student_fourth_location,student_graduating_year,student_course FROM student_register WHERE student_uid = '$id'";
$res= mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){
  $student_first_location = $row['student_first_location'];
  $student_second_location = $row['student_second_location'];
  $student_third_location = $row['student_third_location'];
  $student_fourth_location = $row['student_fourth_location'];
  $date2 = $row['student_graduating_year'];
  $stream = $row['student_course'];
}
?>

<section>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Available Internships</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="interview_student.php">Home</a></li>
              <li class="breadcrumb-item active">All Interviews</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Interviews</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <?php    

            $level= $_GET['level'];
            $location = $_SESSION['location'];
            if($level == 1)
            {
            $sql = "SELECT * FROM internhips where locations like '%$student_first_location%' or locations like '%$student_second_location%' or locations like '%$student_third_location%' or locations like '%$student_fourth_location%'";
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
                        <div class="card-body mt-2">
                            <div class="card">
                            <div class="card-body">
                                <span class="float-right">
                                    <p>
                                        <a target="_blank" href="https://www.google.com/maps/@28.535427,77.155449,16z" class="btn ml-2 btn-sm btn-outline-success">
                                            Google Maps
                                        </a>
                                    </p>
                
                                </span>
                                <h1 class="card-title">Company Name: '.$row['company'].'</h1>
                                <br />
                                <h3 class="card-title">Title: '.$row['title'].'</h3>
                                <br>
                                <h5 class="mt-2">
                                <span class="badge badge-info">
                                '.$row['keywords'].'
                                </span>
                                </h5>
                                <h6 class="mt-2">Domain: '.$row['domain'].'</h6>
                                <h6 class="mt-2 font-weight-bold text-success">Stipend: Rs. '.$row['stipend'].'</h6>
                                <h6 class="mt-2">Working Hours: '.$row['hours'].'</h6>

                                <h6 class="mt-2">Starting From: '.$row['start'].'</h6>
                                <h6 class="mt-2">End At: ' .$row['end'].'</h6>
                                <h6 class="mt-2">Email: ' .$row['email'].'</h6>
                                <h6 class="mt-2">Address: Microsoft Corporation One Microsoft Way Redmond, WA 98052-6399 USA</h6>
                                <h6 class="mt-2">Phone No: '.$row['phone'].'</h6>
                                <br/> 
                                <h6 class="mt-2">Skill Set: '.$row['attributes'].'</h6>
                
                
                                <p class="card-text mt-2">
                                    '.$row['description'].'
                                </p>
                                <a href="./apply.php?uid='.$row['uid'].'&company_id='.$row['company_id'].'&level=1&date='.$date2.'" class="btn btn-primary">Apply</a>
                                <a href="./interview_student.php?uid='.$row['uid'].'&level=1" class="btn btn-danger">Reject</a>
                            </div>
                            </div>
                        </div>
                        
                        ';
                }
            }
          }else if($level == 2)
          {
            $location = $_SESSION['location'];
            $sql = "SELECT title,stiphen,email,phone,locations,description,company_id,uid,posted_on,qualification FROM post_internship_government where locations LIKE '%$student_first_location%' or locations LIKE '%$student_second_location%' or locations LIKE '%$student_third_location%'or locations LIKE '%$student_fourth_location%'";
            $result = mysqli_query($conn, $sql);
            $resultChk1 = mysqli_num_rows($result);
            if ($resultChk1 > 0) {
              $sql = "SELECT title,stiphen,email,phone,locations,description,company_id,uid,posted_on,qualification FROM post_internship_government where qualification LIKE '%$stream%'";
              $result = mysqli_query($conn, $sql);
              $resultChk = mysqli_num_rows($result);
              $resultChk2 = mysqli_num_rows($result);
              if($resultChk > 0){
              while ($row = mysqli_fetch_assoc($result)) {
                $date1 = $row['posted_on'];
                $check = dateDiffInDays($date1, $date2);
                if($check < 540){
                echo '
                    <div class="card-body mt-2">
                        <div class="card">
                        <div class="card-body">
                            <span class="float-right">
                                <p>
                                    <a target="_blank" href="https://www.google.com/maps/@28.535427,77.155449,16z" class="btn ml-2 btn-sm btn-outline-success">
                                        Google Maps
                                    </a>
                                </p>
            
                            </span>
                            <br />
                            <h3 class="card-title">Title: '.$row['title'].'</h3>
                            <br>
                            <h6 class="mt-2 font-weight-bold text-success">Stipend: Rs. '.$row['stiphen'].'</h6>
                            <h6 class="mt-2">Email: ' .$row['email'].'</h6>
                            <h6 class="mt-2">Phone No: '.$row['phone'].'</h6>
                            <h6 class="mt-2">locations: '.$row['locations'].'</h6>
                            <br/>               
                            <p class="card-text mt-2">
                                '.$row['description'].'
                            </p>
                            <a href="./apply.php?uid='.$row['uid'].'&company_id='.$row['company_id'].'&level=2" class="btn btn-success">Apply</a>
                            <a href="./details_internship.php?uid='.$row['uid'].'&level=2" class="btn btn-primary">View Detail</a>
                        </div>
                        </div>
                    </div>
                    
                    ';
            }else{
              $flag =1;
            }
          }
        }else{
          $flag1 = 1;
        }
      }else{
        $flag2 = 1;
      }
          if($flag1 == 1){
            echo '<div class="alert alert-danger" role="alert">
            Your Qualification Does Not Match With Any Internship in This Section!
          </div>';
          }
         if($flag == 1){
            echo '<div class="alert alert-danger" role="alert">
            Your are not eligible because your graduation date has exceeded 18 months!
          </div>
          ';
          }
          if($flag2 == 1){
            echo '<div class="alert alert-danger" role="alert">
            Your Prefered Location Does Not match With The Available List Of Internship Location!
          </div>
          ';

          }
} 
                

        
        ?>

        


      </div>
      <!-- /.card -->
      <center>
          <a href = "./interview_student.php?level=1&id"class="btn btn-primary" type="submit"> Other Non Matched Internships</a>
          </center>
    </section>
    <!-- /.content -->
  </div>
</section>
<script>


</script>


<?php include './include/footer.inc.php' ?>