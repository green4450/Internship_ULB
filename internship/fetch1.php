<?php
include './src/php/dbh.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query ="SELECT * FROM tblipinternshala 
 WHERE city REGEXP '".$search."' 
 OR country REGEXP '".$search."' 
 OR category REGEXP '".$search."' 
 OR experience REGEXP '".$search."' 
 OR duration REGEXP '".$search."' 
 OR requirements REGEXP '".$search."' 
 OR salary REGEXP '".$search."' 
 OR title REGEXP '".$search."' 
 ";
}
else
{
 $query = "SELECT * FROM tblipinternshala ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
while( $row = mysqli_fetch_assoc($result) ) {
   /*  echo'
    <div class="col-md-12 ftco-animate">
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
    </div>'; */
}
}
else
{
  $query = "SELECT * FROM tblipinternshala;";
  $result2 = mysqli_query($conn, $query);
  while( $row = mysqli_fetch_assoc($result2) ) {

  echo '<div class="col-md-12 ftco-animate">
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
/*  $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query ="SELECT * FROM tblipinternshala3 
 WHERE city REGEXP '".$search."' 
 OR country REGEXP '".$search."' 
 OR category REGEXP '".$search."' 
 OR experience REGEXP '".$search."' 
 OR duration REGEXP '".$search."' 
 OR requirements REGEXP '".$search."' 
 OR salary REGEXP '".$search."'
 OR title REGEXP '".$search."'  
 "; 
$query2 = "SELECT * FROM internhips,ubl_register ORDER BY id";
$result2 = mysqli_query($conn, $query2);
while( $row = mysqli_fetch_assoc($result2)) 
{
    echo'<div class="col-md-12 ftco-animate" style="overlay:hidden">
    <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
        <div class="one-third mb-4 mb-md-0">
            <div class="job-post-item-header align-items-center">
                <span class="subadge">'.$row['type'].'</span>
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
}*/
?>