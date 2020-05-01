<?php

// configuration
include './src/php/dbh.php';
$row = $_POST['row'];
$rowperpage = 3;
// selecting posts
$query = 'SELECT * FROM tbliinternshala limit '.$row.','.$rowperpage;

$result = mysqli_query($conn,$query);

$html = '';

while($row = mysqli_fetch_array($result)){
  $id = $row['id'];
  $title = $row['title'];
  $content = $row['description'];
  $shortcontent = substr($content, 0, 160)."...";
  $link = $row['link'];
  // Creating HTML structure
  $html .= '<div id="post_'.$id.'" class="col-md-12 ftco-animate" style="overlay:hidden">';
  $html .= '<div class="job-post-item rounded p-4 d-block d-lg-flex align-items-center">';
  $html .= '<span class="subadge">'.$row['internship_type'].'</span>';
  $html .= '<h2 class="mr-3 text-black"><a href="#">'.$row['title'].'</a></h2>';
  $html .= '</div>';
  $html .= '<div class="job-post-item-body d-block d-md-flex">';
  $html .= '<div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['ulb_organisaton'].'</a>';
  $html .= '</div>';
  $html .= '<div class="mr-3"><span class="icon-layers"></span> <a href="#">'.$row['stiphen'].'</a>';
  $html .= ' </div>';
  $html .= ' <div><span class="icon-my_location"></span> <span>'.$row['locations'].'</span></div>';
  $html .= ' </div>';
  $html .= ' <a href="./login_type.php" style="background-color: #24E0DD;" class="btn btn-primary          py-2">Apply Job</a>';
  $html .= ' <a style="margin-left:10px" href="Detail_profile.php?uid='.$row['uid'].'" class="btn btn-primary py-2">View Details</a>';
  $html .= '</div>';
  $html .= '  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">';
  $html .= ' <div>';
  $html .= ' <a href="#"
  class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
  <span class="icon-heart"></span>';
  $html .= '    </a>';
  $html .= ' </div>';
  $html .= ' </div>';
  $html .= ' </div>';
  $html .= ' </div>';
}

echo $html;