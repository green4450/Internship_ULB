<?php 
  include './include/auth.php';
  include './include/header.inc.php'; 
  $student_id = " ";
?>
<style>
@media screen and (min-width: 768px) {
    .modal-dialog {
        width: 700px;
        /* New width for default modal */
    }

    .modal-sm {
        width: 350px;
        /* New width for small modal */
    }
}

@media screen and (min-width: 992px) {
    .modal-lg {
        width: 950px;
        /* New width for large modal */
    }
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Certficate Issued</h1>
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
                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;"
                                onclick="window.print();">
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
                                        <th class="th-sm">Action
                                        </th>
                                </thead>
                                <tbody>
                        </div>
                        <!-- /.card-header -->

                        <?php 
                        $id = $_SESSION['id'];
                      $sql = "SELECT student_first_name,student_last_name,student_course,student_stream,a.student_uid,internship_uid,u.ulb_organisaton,l.id FROM student_register r Inner Join government_internship_apply a on a.student_uid = r.student_uid INNER JOIN letter_format l on l.internship_id = a.internship_uid inner join ubl_register u on u.ulb_company_id = a.company_id and a.company_id = '$id'and a.status = 'completed'  ";
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
                          <td> ';
                          $student_id = $student_id.$_SESSION['organisation'];
                          ?>
                        <button type="button" class="btn btn-sm btn-info" id="trigger<?php echo $row['student_uid'].$row['id'];?>">
                            View Certificate
                        </button>
                        <div id="dialog<?php echo $row['student_uid'].$row['id'];?>" style="display:none">
                            <div>
                                <iframe style="width:800px; height:500px;"
                                    src="../uploads/stu_certificate/<?php echo $row['student_uid'].$_SESSION['organisation']?>.pdf"></iframe>
                            </div>
                        </div>
                        <script language="javascript" type="text/javascript">
                        $(document).ready(function() {
                            $('#trigger<?php echo $row['student_uid'].$row['id'];?>').click(function() {
                                $("#dialog<?php echo $row['student_uid'].$row['id'];?>").dialog();
                            });
                        });
                        </script>
                        <?php '
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