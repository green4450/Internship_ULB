<?php
  include './include/auth.php';
  include './include/header.inc.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Students</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="add_courses.php">Add courses</a></li>
                        <li class="breadcrumb-item active"><a href="add_college_role.php">Role Management</a></li>
                        <li class="breadcrumb-item active"><a href="add_role.php">Add Role</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <center>
                <!-- /.card-body -->
                <form action="./src/php/main.php" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="id" name="id" value=<?php echo $_SESSION['id'];?>>
                            <b>Courses</b>
                            <div class="form-group">
                                <select class="form-control" name="course" id="course">
                                    <option value="BTECH">BTECH</option>
                                    <option value="BSC">BSC</option>
                                    <option value="BCOM">BCOM</option>
                                    <option value="BBA">BBA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <b>Stream</b>
                            <div class="form-group">
                                <select class="form-control" name="stream" id="stream">
                                    <option value="CSE">Computer Science Engineering</option>
                                    <option value="ME">Mechanical Engineering</option>
                                    <option value="EE">Electrical Engineering </option>
                                    <option value="AE">Aeronautical Engineering </option>
                                    <option value="CE">chemical Engineering </option>
                                </select>
                            </div>
                        </div>


                        <div class="col">
                            <b> Number Of Students</b>
                            <div class="form-group">
                                <input class="form-control" type="number" name="students" id="students">
                            </div>
                        </div>

                        <div class="col">
                            <b> Years of Student</b>
                            <div class="form-group">
                                <select class="form-control" name="year" id="year">
                                    <option value="Ist YEAR">1st YEAR</option>
                                    <option value="IInd YEAR">2nd YEAR</option>
                                    <option value="IIIrd YEAR">3rd YEAR</option>
                                    <option value="IVth YEAR">4th YEAR</option>
                                    <option value="VTH YEAR">5th YEAR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit" id="add_students" name="add_students">Add
                        Studets</button>
                </form>
                
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Course Name</th>
                                    <th>Total Students</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    $id = $_SESSION['id'];
                    $sql="SELECT * FROM college_students WHERE college_id= '$id' ";
                    $res = mysqli_query($conn,$sql);
                    $i=1;
                    while($row = mysqli_fetch_assoc($res))
                    { 
                    echo'
                    <tr>
                    <th>'.$i.'</th>
                      <th>'.$row['course'].'</th>
                      <th>'.$row['students'].'</th>
                      <th>'.$row['year'].'</th>
                    </tr>';
                    $i++;
                    }
                    
                    ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
        </div>
        </center>
        <!-- /.card -->

        <!-- /.card -->
        <!-- /.col -->
        <!-- /.row -->
        <!-- /.row -->
        <!-- /.row -->
</div><!-- /.container-fluid -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>New Date Information</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <div class="row">
                                <div class="col">
                                    <label for="">Full Name</label>
                                    <input class="form-control" type="text" id="fname" name="fname">
                                </div>
                                <div class="col">
                                    <label for="">Student Unique Id(Enrollment Number)</label>
                                    <input class="form-control" type="text" id="lname" name="lname">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for=""> Email Id</label>
                                    <input class="form-control" type="email" id="email" name="email">
                                </div>
                                <div class="col">
                                    <label for="">Phone Number</label>
                                    <input class="form-control" type="text" id="phone" name="phone">
                                </div>
                            </div>
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send Invite Link</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include './include/footer.inc.php' ?>
<script>
$("#myBtn").click(function() {
    $("#myModal").modal({
        backdrop: false
    });
});
</script>