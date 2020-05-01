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
                    <h1>Add Course</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="add_courses.php">Courses And Stream Management</a></li>
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
                        <label for="department">Courses</label>
                            <div class="form-group">
                                <input class="form-control" type="text" id="courses" name="courses" placeholder="Role">
                            </div>
                        </div>
                        <div class="col">
                        <label for="department">Streams</label>
                            <div class="form-group">
                                <input class="form-control" type="text" id="streams" name="streams" placeholder="Role">
                            </div>
                        </div>
                        <div class="col">
                        <br>
                            <div class="form-group">
                               <button class="btn w-25 btn-primary" id="add_course" name="add_course">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Course Name</th>
                      <th>Stream Name</th>
                      <th>Actions</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>1</th>
                        <th>BTECH</th>
                        <th>Computer Sceince</th>
                        <th><button class="btn btn-danger">Delete</button><th>
                        </tr>
                        <th>2</th>
                        <th>BSC</th>
                        <th>BSC Mathematics</th>
                        <th><button class="btn btn-danger">Delete</button><th>
                        </tr>
                        <th>3</th>
                        <th>BCOM</th>
                        <th>BCOM Economics</th>
                        <th><button class="btn btn-danger">Delete</button><th>
                        </tr>
                        <th>4</th>
                        <th>BBA</th>
                        <th></th>
                        <th><button class="btn btn-danger">Delete</button><th>
                        </tr>
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