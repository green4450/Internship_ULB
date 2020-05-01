<?php 
include './include/auth.php';
include './include/header_students.php'; 
$id =" ";
?>
<link href="css/smoothness/jquery-ui-1.9.0.custom.css" rel="stylesheet">
<script language="javascript" type="text/javascript" src="jquery-1.8.2.js"></script>
<script src="js/jquery-ui-1.9.0.custom.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Offer Management</h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <!--     <section class="content">
        <select name="id" id="id" class="w-50 mb-2 form-control">
            <option value="">All Internships</option>
            <option value="">Internships 1</option>
            <option value="">Internships 2</option>
            <option value="">Internships 3</option>
            <option value="">Internships 4</option>
        </select> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Government Internships</h3>


                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Internship Name</th>
                                    <th>Applied On</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    $id = $_SESSION['id'];
                    $sql = "SELECT title,posted_on,r.student_uid,ulb_organisaton,a.company_id,a.status,a.internship_uid FROM student_register r INNER JOIN government_internship_apply a on a.student_uid = r.student_uid and r.student_uid = '$id' and a.status = 'completed' inner join ubl_register u on a.company_id = u.ulb_company_id inner join post_internship_government g on a.internship_uid = g.uid ";
                    $res = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($res)){ 
                        $id =$row['company_id'];
                        if($row['status']=='completed'){
                            echo '<tr>
                            <td>'.$row['title'].'</td>
                            <td>'.$row['posted_on'].'</td>
                            <td>
                            <button type="button" class="btn btn-sm btn-info"
                            id="trigger'.$row['student_uid'].'">
                            View Offer Letter
                        </button>
                        <div id="dialog'.$row['student_uid'].'" style="display:none">
                            <div>
                                <iframe style="width:800px; height:500px;"
                                    src="../uploads/offer/'.$row['student_uid'].$row['ulb_organisaton'].'.pdf"></iframe>
                            </div>
                        </div>
                        <script language="javascript" type="text/javascript">
                        $(document).ready(function() {
                            $("#trigger'.$row['student_uid'].'").click(
                                function() {
                                    $("#dialog'.$row['student_uid'].'")
                                        .dialog();
                                });
                        });
                        </script>
                                <button class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal1'.$row['student_uid'].'">
                                    Rate the Organisation
                                </button>
                                <button class="btn btn-sm btn-danger"data-toggle="modal" data-target="#exampleModal2'.$row['student_uid'].'">
                                    Exit Interview
                                </button>
                                <button data-toggle="modal" data-target="#exampleModal'.$row['student_uid'].'" class="btn btn-sm btn-info">
                                    Fetch Certificate
                                </button>
                            </td>
                          </tr>';
                        }
                        else{
                            echo '<tr>
                            <td>'.$row['title'].'</td>
                            <td>'.$row['posted_on'].'</td>
                            <td>
                            <button type="button" class="btn btn-sm btn-info"
                            id="trigger'.$row['student_uid'].'">
                            View Offer Letter
                        </button>
                        <div id="dialog'.$row['student_uid'].'" style="display:none">
                            <div>
                                <iframe style="width:800px; height:500px;"
                                    src="../module_ulb/src/php/offer/'.$row['student_uid'].$row['ulb_organisaton'].'.pdf"></iframe>
                            </div>
                        </div>
                        <script language="javascript" type="text/javascript">
                        $(document).ready(function() {
                            $("#trigger'.$row['student_uid'].'").click(
                                function() {
                                    $("#dialog'.$row['student_uid'].'")
                                        .dialog();
                                });
                        });
                        </script>
                                <button class="btn btn-sm btn-danger"data-toggle="modal" data-target="#exampleModal2'.$row['student_uid'].'">
                                    Exit Interview
                                </button>
                            </td>
                          </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->

            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!--  Modal Start -->
    <div class="modal" id="exampleModal'.$row['student_uid'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Certificate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-content" style="width:auto">
                <div class="modal-body">
                    <img src="./certificate.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1'.$row['student_uid'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="form-group" id="rating-ability-wrapper">
                            <label class="control-label" for="rating">
                                <span class="field-label-header">How would you rate your internship
                                    Experience?*</span><br>
                                <span class="field-label-info"></span>
                                <input type="hidden" id="selected_rating" name="selected_rating" value=""
                                    required="required">
                            </label>
                            <h2 class="bold rating-header" style="">
                                <span class="selected-rating">0</span><small> / 5</small>
                            </h2>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1"
                                id="rating-star-1">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2"
                                id="rating-star-2">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3"
                                id="rating-star-3">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4"
                                id="rating-star-4">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5"
                                id="rating-star-5">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2'.$row['student_uid'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reason For Exiting the Interview</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container" style="width:450px">
                        <div class="form-group" id="rating-ability-wrapper">
                            <form action="./src/php/main.php" method="post">
                                <label class="control-label" for="rating">
                                    <span class="field-label-header">Reason For the Exit Of Interview</span><br>
                                    <span class="field-label-info"></span>
                                    <input type="hidden" id="selected_rating" name="selected_rating" value=""
                                        required="required">
                                </label>
                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" name="new" id="new" cols="50"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>';
                    }
}
?>
    <?php 
    $student_id = $_SESSION['id'];
    $sql = "SELECT ulb_organisaton from ubl_register where ulb_company_id='$id'";
    $res= mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
        $id = $student_id.$row['ulb_organisaton'];
    }
    ?>
   
    <!--  Modal End -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Private Internships</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Internship Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    $id = $_SESSION['id'];
                    $sql = "SELECT 
                    g.title,a.status
                FROM
                    internhips g
                INNER JOIN
                internhip_apply a ON a.internship_uid = g.uid
                INNER JOIN
                    student_register r ON a.student_uid = r.student_uid
                    and r.student_id = '$id' and a.status = 3
                    ";
                    $res = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($res)){
                        if($row['status'] == 'completed'){ 
                    echo '<tr>
                      <td>1</td>
                      <td>'.$row['title'].'</td>
                      <td>Big Data Analysis</td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              View Offer Letter
                          </button>
                          <button class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                              Rate the Work
                          </button>
                          <button class="btn btn-sm btn-danger">
                              Exit Interview
                          </button>
                          <button data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info">
                              Generate Experience Letter/ Certificate
                          </button>
                      </td>

                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Interview</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="textarea">Other Interview</label>
                                    <select name="" id="" class="w-50 mb-2 form-control">
                                        <option value="">All Internships</option>
                                        <option value="">Internships 1</option>
                                        <option value="">Internships 2</option>
                                        <option value="">Internships 3</option>
                                        <option value="">Internships 4</option>
                                    </select>
                                </div>
                                <div class="modal-body">
                                    <label for="textarea">Description</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </tr>';
                }else{
                    echo '<tr>
                    <td>1</td>
                    <td>'.$row['title'].'</td>
                    <td>Big Data Analysis</td>
                    <td>
                        <button class="btn btn-sm btn-info">
                            View Offer Letter
                        </button>
                        <button class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                            Rate the Work
                        </button>
                        <button class="btn btn-sm btn-danger">
                            Exit Interview
                        </button>
                    </td>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Interview</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <label for="textarea">Other Interview</label>
                                  <select name="" id="" class="w-50 mb-2 form-control">
                                      <option value="">All Internships</option>
                                      <option value="">Internships 1</option>
                                      <option value="">Internships 2</option>
                                      <option value="">Internships 3</option>
                                      <option value="">Internships 4</option>
                                  </select>
                              </div>
                              <div class="modal-body">
                                  <label for="textarea">Description</label>
                                  <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Submit</button>
                              </div>
                              </div>
                          </div>
                      </div>
                  </tr>';


                }
            }
                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->

            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->
<?php include './include/footer.inc.php' ?>
<script src="js/addons/rating.js"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    $('#trigger').click(function() {
        $("#dialog").dialog();
    });
});
</script>
<script>
$(document).ready(function() {

    $(".btnrating").on('click', (function(e) {

        var previous_value = $("#selected_rating").val();

        var selected_value = $(this).attr("data-attr");
        $("#selected_rating").val(selected_value);

        $(".selected-rating").empty();
        $(".selected-rating").html(selected_value);

        for (i = 1; i <= selected_value; ++i) {
            $("#rating-star-" + i).toggleClass('btn-warning');
            $("#rating-star-" + i).toggleClass('btn-default');
        }

        for (ix = 1; ix <= previous_value; ++ix) {
            $("#rating-star-" + ix).toggleClass('btn-warning');
            $("#rating-star-" + ix).toggleClass('btn-default');
        }

    }));


});
</script>