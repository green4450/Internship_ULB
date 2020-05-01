<?php 
include './include/auth.php';
include './include/header.inc.php'; 
include './include/msg.inc.php';
$student_id =" ";
$company_id = " ";
$internship_uid = " ";
$id = $_SESSION['id'];
?>
<style>
.modal-backdrop {
    display: none;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Applicant Management</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





    <!-- Main content -->
    <section class="content">
        <div class="float-right mb-2">
            <a href="interview_management.php" class="btn btn-primary">
                Pending Applicantions
            </a>
            <a href="shortlisted_student.php" class="btn btn-primary">
                Shortlisted Applicants
            </a>
            <a href="called_for_interview.php" class="btn btn-primary">
                Called For Interivew
            </a>
            <a href="selected_students.php" class="btn btn-primary">
                Selected Applicants
            </a>
            <a href="reject_list.php" class="btn btn-primary">
                Rejected Applicants
            </a>
            <a href="hold_list.php" class="btn btn-primary">
                Waitlisted Applicants
            </a>
        </div>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <th>Intern's Name</th>
                                        <th>Internship Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            $sql = "SELECT 
                                            r.student_uid,
                                            student_first_name,
                                            student_last_name,
                                            title,
                                            m.uid,
                                            m.posted_on,
                                            m.locations,
                                            m.department
                                            FROM
                                            internship_apply s
                                            INNER JOIN
                                            post_internship_government m ON s.internship_uid = m.uid
                                            INNER JOIN
                                            student_register r ON r.student_uid = s.student_uid
                                            INNER JOIN
                                            ubl_register u ON u.ulb_company_id = m.company_id and 
                                            u.ulb_company_id = '$id' and s.status = '0'  order by posted_on";

                                     $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result))  
                                            { 
         
                                        ?><tr>
                                        <td><?php echo $row['student_first_name'].' '.$row['student_last_name']  ?></td>
                                        <td><?php echo $row['title'] ?></td>
                                        <td>
                                            <form action="./src/php/main.php" method="post">
                                                <input type="hidden" name="id1" id="id1"
                                                    value=<?php echo $_SESSION['id']?>>
                                                <input type="hidden" name="id2" id="id2"
                                                    value=<?php echo $row['student_uid']?>>
                                                <input type="hidden" name="id3" id="id3" value=<?php echo $row['uid']?>>
                                                <a href="./user_profile_student.php?uid=<?php echo $row['student_uid'];?>"
                                                    class="btn btn-sm btn-info" target="_blank"
                                                    style="background-colorr:#b4c13e">View Profile</a>
                                                <button style="background-color:#09e1f6" type="submit"
                                                    class="btn btn-sm " id="shortlist" name="shortlist">
                                                    Shortlist Student
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    id="reject<?php echo $row['student_uid']?>"
                                                    name="reject<?php echo $row['student_uid']?>">
                                                    Reject the Applicant
                                                </button>

                                                <script>
                                                // data-toggle="modal"
                                                //     data-target="#exampleModal4"

                                                $("#reject<?php echo $row['student_uid']?>").click(function() {
                                                    swal({
                                                            title: "Are you sure?",
                                                            text: "You Want To Reject The Candidate!",
                                                            icon: "warning",
                                                            buttons: true,
                                                            dangerMode: true,
                                                        })
                                                        .then((willDelete) => {
                                                            if (willDelete) {
                                                                $("#exampleModal4<?php echo $row['student_uid']?>")
                                                                    .modal("show");
                                                            }
                                                        });
                                                });
                                                </script>
                                                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                                                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl" role="document">
                                                        <div class="modal-content">
                                                            ...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal" id="exampleModal4<?php echo $row['student_uid']?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="false">
                                                    <form action="./src/php/main.php" method="post">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        <b> Reason For Rejection</b>
                                                                        <b>For <?php echo $row['title']?>
                                                                        </b></br>
                                                                        <b>Student Name
                                                                            :<?php echo $row['student_first_name'].' '.$row['student_last_name']?>
                                                                        </b>
                                                                        <br>
                                                                        <b>Location
                                                                            : <?php echo $row['locations']?></b><br>
                                                                        <b><?php echo $_SESSION['organisation']?>
                                                                        </b></h5>

                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" style="width:auto">
                                                                    <div class="container" style="width:450px">
                                                                        <div class="form-group"
                                                                            id="rating-ability-wrapper">
                                                                            <input type="hidden" name="company_id"
                                                                                id="company_id"
                                                                                value=<?php echo $_SESSION['id']?>>
                                                                            <input type="hidden" name="student_id"
                                                                                id="student_id"
                                                                                value=<?php echo $row['student_uid']?>>
                                                                            <input type="hidden" name="internship_id"
                                                                                id="internship_id"
                                                                                value=<?php echo $row['uid']?>>

                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="date">Reason For
                                                                                        Rejection</label>
                                                                                    <textarea class="form-control"
                                                                                        name="reason" id="reason"
                                                                                        cols="50" rows="10"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer" id="exampleModalLabel">

                                                                    <button type="submit" id="reject_reason"
                                                                        name="reject_reason"
                                                                        class="btn btn-success">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dialog" style="display:none">
                <div>
                    <iframe style="width:800px; height:500px;" src="../module_ulb/joboffer.pdf"></iframe>
                </div>
            </div>
        </div>
</div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php include './include/footer.inc.php'; ?>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    $('#trigger').click(function() {
        $("#dialog").dialog();
    });
});
</script>