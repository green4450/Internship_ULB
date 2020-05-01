<?php 
include './include/auth.php';
include './include/header.inc.php';?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Campus Interview</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Company Requested</b></h3>
                        <div class="card-tools">
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="overflow: scroll;">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company Arrived</th>
                                <th>Date of Arrival</th>
                                <th>Status</th>
                                <th>Freshers Needed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ZS</td>
                                <td>15-7-2020</td>
                                <td>
                                    <button type="submit" id="submit" name="submit" class="btn btn-sm btn-info">
                                        Approve
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        Reject
                                    </button>
                                    <button class="btn btn-sm btn-success" id="myBtn2" name="myBtn2">
                                        Propose Different Date
                                    </button>
                                </td>
                                </td>
                                <td>190</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nasa</td>
                                <td>12-7-2020</td>
                                <td>
                                    <button type="submit" id="submit" name="submit" class="btn btn-sm btn-info">
                                        Approve
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        Reject
                                    </button>
                                    <button class="btn btn-sm btn-success" id="myBtn2" name="myBtn2">
                                        Propose Different Date
                                    </button>
                                </td>
                                <td>190</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Indian Army</td>
                                <td>14-7-2020</td>
                                <td>
                                    <button type="submit" id="submit" name="submit" class="btn btn-sm btn-info">
                                        Approve
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        Reject
                                    </button>
                                    <button class="btn btn-sm btn-success" id="myBtn2" name="myBtn2">
                                        Propose Different Date
                                    </button>
                                </td>
                                <td>190</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Indian Airforce</td>
                                <td>15-7-2020</td>
                                <td>
                                    <button type="submit" id="submit" name="submit" class="btn btn-sm btn-info">
                                        Approve
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        Reject
                                    </button>
                                    <button class="btn btn-sm btn-success" id="myBtn2" name="myBtn2">
                                        Propose Different Date
                                    </button>
                                </td>
                                <td>190</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>

    <section class="content">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <center>
                                <label for="">Student Search</label>
                            </center>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control w-10" name="course" id="course">
                                            <option value="BTECH">Plse Select the course</option>
                                            <?php
                                        $id = $_SESSION['id'];
                                            $sql="SELECT distinct course FROM college_students where college_id ='$id'";
                                            $res = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_assoc($res)){ 
                                                echo 
                                                '<option value='.$row['course'].'>'.$row['course'].'</option>';     
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control w-10" name="year" id="year">
                                            <option value="1">1st YEAR</option>
                                            <option value="2">2nd YEAR</option>
                                            <option value="3">3rd YEAR</option>
                                            <option value="4">4th YEAR</option>
                                            <option value="5">5th YEAR</option>
                                        </select>
                                    </div>
                                </div>
                                <center>
                                    <br>
                                    <button type="submit" class="btn btn-success" id="submit" name="submit">Go</button>
                                </center>
                            </form>
                            <div class="card-tools">
                            </div>
                        </div>
                    </div>
                    <?php
                if(isset($_POST['submit'])) {
                    $course = $_POST['course'];
                    $year = $_POST['year'];
                    $sql = "SELECT * FROM student_register where student_course ='$course' and student_year='$year'"; 
                    $res = mysqli_query($conn,$sql);
                    if($res){
                        while($row=mysqli_fetch_assoc($res)){
                            echo '
                              <div class="col-lg-3 col-sm-6">
                                  <div class="card hovercard">
                                      <div class="cardheader">
                                      <center>
                                          <h3> Student Profile <h3>
                                          </center>
                                      </div>
                                      <div class="avatar">
                                      <center>
                                          <img alt="" src="../assets/images1/Akash.jfif">
                                          </center>
                                      </div>
                                      <div class="info">
                                          <div class="title">
                                              <a target="_blank" href="https://scripteden.com/"></a>
                                          </div>
                                          <div class="desc"><b>Name :</b>'.$row['student_first_name'].'</div>
                                          <div class="desc"><b>Course :</b>'.$row['student_course'].'</div>
                                          <div class="desc"><b>Stream : </b>'.$row['student_stream'].'</div>
                                          <div class="desc"><b>Year :</b>'.$row['student_year'].'</div>
                                      </div>
                                      <br>
                                      <div class="bottom">
                                      <center>
                                      <a href="./user_profile_student.php"class="btn btn-success">View Profile </a>
                                       </center>  
                                      </div>
                                  </div>
                              </div>
                      ';
                        }
                    }
                
                
                }
                else
                {
                    $sql = "SELECT student_first_name,student_course,student_year,student_stream FROM student_register";
                    $res = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($res)){
                        echo '
                            <div class="col-lg-3 col-sm-6">
                                <div class="card hovercard">
                                    <div class="cardheader">
                                    <center>
                                        <h3> Student Profile <h3>
                                        </center>
                                    </div>
                                    <div class="avatar">
                                    <center>
                                    <img alt="" src="./images/Akash.jfif">
                                    </center>
                                    </div>
                                    <div class="info">
                                        <div class="title">
                                            <a target="_blank" href="https://scripteden.com/"></a>
                                        </div>
                                        <a>
                                        <div class="desc"><b>Name :</b>'.$row['student_first_name'].'</div>
                                        <div class="desc"><b>Course :</b>'.$row['student_course'].'</div>
                                        <div class="desc"><b>Stream : </b>'.$row['student_stream'].'</div>
                                        <div class="desc"><b>Year :</b>'.$row['student_year'].'</div>
                                    </div>
                                    <br>
                                    <div class="bottom">
                                    <center>
                                    <a href="./user_profile_student.php"class="btn btn-success">View Profile </a>
                                     </center>  
                                    </div>  
                                </div>
                                </div>
                    ';
                    } 
                }
                ?>

        </section>
        <div>