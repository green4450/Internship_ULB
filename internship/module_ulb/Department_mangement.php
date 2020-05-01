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
                    <h1>Department Management</h1>
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
                <form action="./src/php/main.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input class="form-control border border-dark" type="text" name="department" id="department"
                                    placeholder="Department Name"required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <button type="submit" class="btn w-25 btn-primary" name="add_department"
                                    id="add_department">Add</button>
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
                                    <th>Department Name</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $id = $_SESSION['id'];
                            $sql="SELECT * FROM department where added_by = '$id'";
                            $res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($res))
					{
			echo '
                                <tr>
                                    <td>'.$row['id'].'</td>
                                    <td>'.$row['department_name'].'</td>
                                    <td>
                                    <form action="./src/php/main.php" method="post">
                                      <input type="hidden" id="department_name" name="department_name" value="'.$row['department_name'].'">
                                      <input type="hidden" id="added_by" name="added_by" value="'.$row['added_by'].'">
                                        <button type="submit" class="btn btn-sm btn-info" id="delete" name="delete">
                                            Delete
                                        </button>
                                        </form>
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
<!-- <script>
$(document).ready(function() 
{
    
    $("#add_department").click(function() {
        var department = $("#department").val();
        $.ajax({
                    url:'./src/php/main.php',
                    method:'POST',
                    data:{
                        department:department,
                        add_department:true
                    },
                },location.reload());
            });


            $("#delete").click(function() {
        $.ajax({
                    url:'./src/php/main.php',
                    method:'POST',
                    data:{
                        department:department,
                        
                        add_department:true
                    },
                   success:function(data){
                       alert(data);
                   }
                });
            });    
        });
</script> -->
<?php 
include './include/footer.inc.php'; 
?>