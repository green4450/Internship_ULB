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
                            <div class="form-group">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Full Name"required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input class="form-control" type="text" id="employ_id" name="employ_id"
                                    placeholder="Employ ID" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col">
                        <b>Authority</b>
                            <div class="form-group">
                                <select class="form-control" name="authority" id="authority" required>
                                <option value="Select" select disabled>Please Select Authority</option>
                                <option value="NODAL OFFICER">NODAL OFFICER</option>
                                <option value="TPO">TPO</option>
                                <option value="TEACHER">TEACHER</option>
                                </select>
                            </div>
                        </div>
                    
                   
                        <div class="col">
                        <b> Role</b>
                            <div class="form-group">
                            <select class="form-control" name="role" id="role" required>
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
                            <div class="form-group">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email"required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input class="form-control" type="password" id="password" name="password"
                                    placeholder="Enter Password"required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit" id="add_login" name="add_login">Add Login</button>
                </form>

                <br />
                <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>id</th>
                      <th>Authority Name</th>
                      <th>Person Name</th>
                      <th>Role</th>
                      <th>Actions</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                            $id = $_SESSION['id'];
                            $sql="SELECT * FROM `college_logins` where college_id ='$id'";
                            $res=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($res))
					{
			echo '
                                <tr>
                                    <td>'.$row['college_id'].'</td>
                                    <td>'.$row['college_person_name'].'</td>
                                    <td>'.$row['college_authority'].'</td>
                                    <td> '.$row['college_role'].'</td>
                                    <td>
                                        <button class="btn btn-sm btn-info id="delete" name="delete">
                                            Disable
                                        </button>
       
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
<!-- <script>
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
                    url:'./src/php/main.php',
                    method:'POST',
                    data:{
                        name:name,
                        employ_id:employ_id,
                        department:department,
                        role:role,
                        email:email,
                        password:password,
                        add_admin:true
                    },
                    
                },location.reload());
                
                console.log("Inserted Successfully")
            });
        });
</script> -->
<?php include './include/footer.inc.php' ?>