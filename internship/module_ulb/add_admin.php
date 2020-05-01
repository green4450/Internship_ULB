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
                    <h1>Add Admin</h1>
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
                        <label for="">Full Name</label>
                            <div class="form-group">
                                <input class="form-control border border-dark" type="text" id="name" name="name" placeholder="Full Name"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                        <label for="">Employee Id</label>
                            <div class="form-group">
                                <input class="form-control border border-dark" type="text" id="employ_id" name="employ_id"
                                    placeholder="Employee ID" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <b> Department</b>
                            <div class="form-group">
                                <select class="form-control border border-dark" name="department" id="department" required>
                                    <option value="Select" disabled>Please Select Department</option>
                                    <?php
                                $id = $_SESSION['id'];
                                echo $id;
                                $sql="SELECT department_name FROM department WHERE added_by='$id' ";
                                $res= mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($res)){
                                echo '<option value="'.$row['department_name'].'">'.$row['department_name'].'</option>';
                                }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="col">
                            <b> Role</b>
                            <div class="form-group">
                                <select class="form-control border border-dark" name="role" id="role" required>
                                    <?php
                                $id = $_SESSION['id'];
                                echo $id;
                                $sql="SELECT role_code,role_name FROM roles ";
                                $res= mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($res)){
                                echo '<option value="'.$row['role_code'].'">'.$row['role_name'].'</option>';
                                }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="">Email</label>
                            <div class="form-group">
                                <input class="form-control border border-dark" type="email" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label for="">Password</label>
                                <input class="form-control border border-dark" type="password" id="password" name="password"
                                    placeholder="Enter Password" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit" id="add_admin" name="add_admin">Add Login</button>
                </form>

                <br />
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Department Name</th>
                                    <th>Authorised Admin Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $id = $_SESSION['id'];
                            $sql="SELECT * FROM department_login where given_by = '$id'";
                            $res=mysqli_query($conn,$sql);
                            $i = 1;
					while($row=mysqli_fetch_assoc($res))
					{
			            echo '
                                <tr>
                                    <td>'.$i++.'</td>
                                    <td>'.$row['department'].'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>
                                    <form action="./src/php/main.php" method="post">            
                                    <input type="hidden" id="uid" name="uid" value='.$row['given_to'].'>
                                    <input type="hidden" id="department" name="department" value='.$row['department'].'>
                                        <button type="submit" class="btn btn-sm btn-info" id="disable" name="disable">
                                            Disable
                                         </button>
                                         <button type="submit" class="btn btn-sm btn-danger" id="delete_admin" name="delete_admin">
                                         Delete
                                      </button>
                                         </form>
                                    </td>
                                </tr>';
                        }?>

                                <tr>
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
<script>
$(document).ready(function() {
    console.log("ready")
    $("#add_login").click(function() {
        console.log("Ready to Insert")
        var name = $("#name").val();
        var employ_id = $("#employ_id").val();
        var department = $("#ulb").val();
        var role = $("#role").val();
        var email = $("#email").val();
        var password = $("#password").val();
        $.ajax({
            url: './src/php/main.php',
            method: 'POST',
            data: {
                name: name,
                employ_id: employ_id,
                department: department,
                role: role,
                email: email,
                password: password,
                status: status,
                add_admin: true
            },

        }, location.reload());

        console.log("Inserted Successfully")
    });
    $("#disable").click(function() {
        console.log("Ready to Insert")
        var email = $("#email").val();
        $.ajax({
            url: './src/php/main.php',
            method: 'POST',
            data: {
                email:email,
                status:true
            },

        }, location.reload());

        console.log("Inserted Successfully")
    });
});
</script>
<?php include './include/footer.inc.php' ?>