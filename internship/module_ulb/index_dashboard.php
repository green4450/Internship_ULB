<?php
include './include/auth.php';
include './include/header.inc.php';
include './include/msg.inc.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <center>
                    <b style="font-size:20px">Internships</b>
                    </center>
                    <div class="small-box bg-info">
                        <div class="inner">
                        <?php
                                        $id = $_SESSION['id'];
                                        $sql = "SELECT count(*) as total from post_internship_government where company_id='$id'";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                            
                                        echo '<h5><b>Posted</b></h5>
                                        <h3> '.$row['total'].' </h3>
                                        ';
                                        }
                                        $id = $_SESSION['id'];
                                        $sql = "SELECT count(*) as total from government_internship_apply where status = 4 and company_id = '$id'";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        
                                        echo '<h5><b> Ongoing</b></h5>
                                        <h3> '.$row['total'].' </h3>';
                                        }
                                        $id = $_SESSION['id'];
                                        $sql = "SELECT count(*) as total from government_internship_apply where status = 'completed' and company_id = '$id'";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        
                                        echo ' <h5><b>Completed</b></h5>
                                        <h3> '.$row['total'].' </h3>
                                        ';}
                                         
                            ?>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <center>
                    <b style="font-size:20px">Gender</b>
                    </center>
                    <div class="small-box bg-danger">
                        <div class="inner">
                        <?php 
                        $id = $_SESSION['id'];
                        $sql ="SELECT count(case when student_gender='Male' then 1 end) as male_cnt, count(case when student_gender='Female' then 1 end) as female_cnt from student_register r inner join government_internship_apply a on a.student_uid = r.student_uid and a.company_id = '$id'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)){
                        echo
                            '<h5><b>Male</b></h5>
                            <h3>'.$row['male_cnt'].'</h3>
                            <h5><b>Female</b></h5>
                            <h3>'.$row['female_cnt'].'</h3>
                            ';
                        }
                            ?>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
               
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <center>
                    <b style="font-size:20px">Department</b>
                    </center>
                    <div class="small-box bg-success">
                        <div class="inner">
                        <?php
                                        $id = $_SESSION['id'];
                                        $sql = "SELECT  department,count(*) as total from post_internship_government where company_id='$id' Group By department limit 3";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        echo '<h5><b>'.$row['department'].'</b></h5>
                                        <h3> '.$row['total'].' </h3>
                                        ';
                                        }
                            ?>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <center>
                    <b style="font-size:20px">Applicants</b>
                    </center>
                    <div class="small-box bg-success">
                        <div class="inner">
                        <?php
                                        $id = $_SESSION['id'];
                                        $sql = "SELECT count(*) as total FROM government_internship_apply  WHERE company_id = '$id' ";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        echo '<h5><b>Total<b></h5>
                                        <h3> '.$row['total'].' </h3>
                                        ';
                                        }
                                        $sql = "SELECT count(*) as selected from government_internship_apply where company_id= '$id' and status = 3";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        
                                        echo '<h5><b>Selected<b></h5>
                                        <h3> '.$row['selected'].' </h3>
                                        ';
                                        }
                                        $id = $_SESSION['id'];
                                        $sql = "SELECT count(*) as waitlisted from government_internship_apply a where company_id='$id' and a.status = 'holded'";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        
                                        echo '<h5><b>Waitlisted</b></h5>
                                        <h3> '.$row['waitlisted'].' </h3>
                                        ';
                                        }
                                        $id = $_SESSION['id'];
                                        $sql = "SELECT count(*) as rejected from government_internship_apply a where company_id='$id' and a.status = 'rejected'";
                                        $res = mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                        echo '<h5><b>Rejected</b></h5>
                                        <h3> '.$row['rejected'].'</h3>
                                        ';
                                        }
                            ?>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- ./col -->
        </div>
        <!-- Main row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Current Internships</h3>

                        <div class="card-tools">
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Internship Title</th>
                                <th>Date Of Publication</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $id = $_SESSION['id'];
                                    $sql = "SELECT 
                                    s.uid,
                                    s.title,
                                    s.posted_on,
                                    s.internship_status,
                                    s.description
                                FROM
                                post_internship_government s
                                WHERE s.company_id = '$id'";
                                    $res = mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($res)){
                                     echo' <tr>
                                            <td>'.$row['uid'].'</td>
                                            <td>'.$row['title'].'</td>
                                            <td>'.$row['posted_on'].'</td>
                                            <td><span class="tag tag-success">'.$row['internship_status'].'</span></td>
                                        </tr>';
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
</div>
<!-- /.card -->
</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include './include/footer.inc.php';?>

