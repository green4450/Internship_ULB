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
                    <h1>Add Qualification</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Department_mangement.php">Department Management</a></li>
                        <li class="breadcrumb-item active"><a href="role_management.php">Role Management</a></li>
                        <li class="breadcrumb-item active"><a href="add_admin.php">Add Admin</a></li>
                        <li class="breadcrumb-item active"><a href="add_courses.php">Add Qualification</a></li>
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
                            <label for="department">Courses</label>
                            <div class="form-group">
                                <input class="form-control border border-dark" type="text" id="courses" name="courses" placeholder="Courses" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="department">Streams</label>
                            <div class="form-group">
                                <input class="form-control border border-dark" type="text" id="streams" name="streams" placeholder="Streams" required>
                            </div>
                        </div>
                        <div class="col">
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn w-25 btn-primary" id="add_course" name="add_course">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Course Name</th>
                                    <th>Stream Name</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                            $id=$_SESSION['id'];
                            $sql = "SELECT course_name,course_stream from course where company_id = '$id'";
                            $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res))
                            {
                                echo
                                '<tr>
                                <form action="./src/php/main.php" method="post">
                                <input type="hidden" id="courses" name="courses" value="'.$row['course_name'].'">
                                <input type="hidden" id="streams" name="streams" value="'.$row['course_stream'].'">
                                    <th>'.$row['course_name'].'</th>
                                    <th>'.$row['course_stream'].'</th>
                                    <th><button type="submit" class="btn btn-danger" id="delete_course" name="delete_course">Delete</button>
                                    <th>
                                    </form>
                                </tr>';
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
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 



?>

<?php include './include/footer.inc.php' ?>