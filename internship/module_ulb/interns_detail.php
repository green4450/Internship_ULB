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
                    <h1>Interns Applied</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Internships</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <!--  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" onclick = "window.pdf();">
                                <i class="fas fa-download"></i> Generate PDF
                            </button>
                            <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">First Name
                                        </th>
                                        <th class="th-sm">Last Name
                                        </th>
                                        <th class="th-sm">Course
                                        </th>
                                        <th class="th-sm">Stream
                                        </th>
                                        <th class="th-sm">Application Date
                                        </th>
                                </thead>
                                <tbody>
                                    <?php 
              $id=$_GET['uid'];
              $sql = "SELECT title from post_internship_government where uid = '$id'";
              $res = mysqli_query($conn,$sql);
              while($row = mysqli_fetch_assoc($res)){
                  echo
                '<h2 class="card-title"><b>'.$row['title'].'</b></h2>';
              }
                ?>
                        </div>
                        <!-- /.card-header -->

                        <?php 
                      $id=$_GET['uid'];
                      $sql = "SELECT student_first_name,student_last_name,student_course,student_stream FROM student_register r INNER JOIN government_internship_apply a on a.student_uid = r.student_uid and a.internship_uid = '$id'";
                      $result = mysqli_query($conn, $sql);
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <tr>
                          <td>
                          '.$row['student_first_name'].'
                          </td>
                          <td>
                          '.$row['student_last_name'].'
                          </td>
                          <td>
                          '.$row['student_course'].'
                          </td>
                          <td>
                          '.$row['student_stream'].'
                          </td>
                        </tr>';
                      }
                       
                    ?>
                        <tfoot>
                            <tr>
                                <th>Name
                                </th>
                                <th>Position
                                </th>
                                <th>Course
                                </th>
                                <th>Stream
                                </th>
                            </tr>
                        </tfoot>
                        </table>
                    </div>
                    <!--card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include './include/footer.inc.php' ?>