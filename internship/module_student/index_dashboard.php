<?php
include './include/auth.php';
include './include/header_students.php';
$id = $_SESSION['id'];
?>

<!-- Content Wrapper. Contains page content -->
<!-- /.row -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
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
                    <div class="small-box bg-info">
                        <div class="inner">
                        <?php
                        $sql = "SELECT count(*) as total FROM government_internship_apply WHERE student_uid = '$id'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)){ 
                            echo '<h3>'.$row['total'].'</h3>';
                        }
                        ?>
                            <h4><b>Internships Applied</b></h4>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="./internships.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                        <?php
                        $sql = "SELECT count(*) as total FROM government_internship_apply WHERE student_uid = '$id' and status = 3";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)){ 
                            echo '<h3>'.$row['total'].'</h3>';
                        }
                        ?>

                        <h4><b>Interview Calls</b></h4>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="./internships.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <?php
                        $sql = "SELECT count(*) as total FROM government_internship_apply WHERE student_uid = '$id' and status = 'rejected' or status = 'holded'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)){ 
                            echo '<h3>'.$row['total'].'</h3>';
                        }
                        ?>
                        <h4><b>Waitlisted/Rejected</b></h4>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="./internships.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
               
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>0</h3>

                            <h4><b>New Messages</b></h4>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="./industry_problems.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>0</h3>

                        <h4><b>Internship Problems</b></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="./industry_problems.php" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <!-- Main row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Government Internship</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Internship Name</th>
                                <th>Date Of Application</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $id = $_SESSION['id'];
                                    $sql = "SELECT title,posted_on,status,description FROM government_internship_apply s INNER JOIN post_internship_government m on m.uid = s.internship_uid and s.student_uid = '$id'";
                                    $res = mysqli_query($conn,$sql); 
                                    while($row = mysqli_fetch_assoc($res)){
                                    echo '<tr>
                                        <td>'.$row['title'].'</td>
                                        <td>'.$row['posted_on'].'</td>
                                        <td>'.$row['description'].'
                                        </td>
                                    </tr>';
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Private Internships</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="overflow:scroll">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Internship Name</th>
                                <th>Status</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    $id = $_SESSION['id'];
                                    $sql = "SELECT title,status,description FROM internhip_apply s INNER JOIN internhips m on m.uid = s.internship_uid and s.student_uid = '$id'";
                                    $res = mysqli_query($conn,$sql); 
                                    while($row = mysqli_fetch_assoc($res)){
                                    echo '<tr>
                                        <td>'.$row['title'].'</td>
                                        <td><span class="tag tag-success">'.$row['status'].'</span></td>
                                        <td>'.$row['description'].'
                                        </td>
                                    </tr>';
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
</div>
<div class="row">
    <!-- Left col -->
    <section class="col connectedSortable">
        <!-- TO DO List -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    To Do List
                </h3>

                <div class="card-tools">
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card-header -->

            <!-- /.card-body -->
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
<?php include './include/footer.inc.php' ?>