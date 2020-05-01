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
                    <h1>Role Management</h1>
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
                <form action="./src/php/main.php">
                <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input class="form-control border border-dark" type="text" id="departemnt" name="departemnt" placeholder="Role">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                               <button class="btn w-25 btn-primary">Add</button>
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
                      <th>Role Name</th>
                      <th>Actions</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            $id = $_SESSION['id'];
                            $sql="SELECT id,role_name FROM roles";
                            $res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($res))
					{
			echo '
                                <tr>
                                    <td>'.$row['id'].'</td>
                                    <td>'.$row['role_name'].'</td>
                                    <td>
                                        <button class="btn btn-sm btn-info id="delete" name="delete">
                                            Delete
                                        </button>

                                        <button class="btn btn-sm btn-info">
                                            Edit
                                        </button>
       
                                    </td>
                                </tr>';
                            }?>                  
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
<?php include './include/footer.inc.php' ?>