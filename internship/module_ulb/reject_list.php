<?php 
include './include/auth.php';
include './include/header.inc.php'; 
?>
<style>
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Interview Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index_dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Reports</li>
                    </ol>
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
                        <div class="card-header">
                            <h3 class="card-title">Internships</h3>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>Applicant Name</th>
                                        <th>Internship</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
$id=$_SESSION['id'];
 $sql = "SELECT 
 r.student_uid,
 student_first_name,
 title,
 m.uid
FROM
government_internship_apply s
INNER JOIN
 post_internship_government m ON s.internship_uid = m.uid
INNER JOIN
 student_register r ON r.student_uid = s.student_uid
 INNER JOIN
 ubl_register u ON u.ulb_company_id = m.company_id and 
 u.ulb_company_id = '$id' and s.status = 'rejected'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result))  
     { 
       ?><tr>
                                        <td><?php echo $row['student_first_name'] ?></td>
                                        <td><?php echo $row['title'] ?></td>
                                        <td>
                                        <form action="./src/php/main.php" method="post">
                                            <input type="hidden" name="id1" id="id1" value=<?php echo $_SESSION['id']?>>
                                            <input type="hidden" name="id2" id="id2"
                                                value=<?php echo $row['student_uid']?>>
                                            <input type="hidden" name="id3" id="id3" value=<?php echo $row['uid']?>>
                                            <a href="./user_profile_student.php?studentid=<?php echo $row['student_uid']?>" class="btn btn-sm btn-danger">
                                                See Profile
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-info" name="accept" id="accept">Accept</button>
                                                </form>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="width:auto">
                                <div class="modal-body">
                                    <img src="./certificate.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="width:auto">
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>Location</b></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="location"
                                                        name="location" placeholder="location">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Date</b></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="date" id="date" name="location"
                                                        placeholder="Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for=""><b>Documents Required</b></label>
                                                <div class="form-group">
                                                    <textarea class="form-control" type="text" id="location"
                                                        name="location" placeholder="Documents Required"></textarea>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for=""><b>Dos and Donts</b></label>
                                                <div class="form-group">
                                                    <textarea class="form-control" type="text" id="location"
                                                        name="location" placeholder="Dos and Donts"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <button type="submit" class="btn btn-primary">Sumbit</button>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
$(document).ready(function() {
    $("#btnShow").click(function() {
        var student_id = $("#id2").val();
        var company_id = $("#id1").val();
        var internship_id = $("#id3").val();
        console.log(student_id);
        console.log(company_id);
        console.log(internship_id);
        $.ajax({
            url: './src/php/main.php',
            method: 'POST',
            data: {
                student_id: student_id,
                company_id: company_id,
                internship_id: internship_id,
                offerrelease: true
            },
        }, location.reload());
    });

    $("#reject").click(function() {
        var student_id = $("#id2").val();
        var company_id = $("#id1").val();
        var internship_id = $("#id3").val();
        console.log(student_id);
        console.log(company_id);
        console.log(internship_id);
        $.ajax({
            url: './src/php/main.php',
            method: 'POST',
            data: {
                student_id: student_id,
                company_id: company_id,
                internship_id: internship_id,
                rejected: true
            },
        }, location.reload());
    });

    $("#hold").click(function() {
        var student_id = $("#id2").val();
        var company_id = $("#id1").val();
        var internship_id = $("#id3").val();
        console.log(student_id);
        console.log(company_id);
        console.log(internship_id);
        $.ajax({
            url: './src/php/main.php',
            method: 'POST',
            data: {
                student_id: student_id,
                company_id: company_id,
                internship_id: internship_id,
                hold: true
            },
        }, location.reload());
    });
});
</script>
<script>
$(".modalbttn").click(function() {
    $(".modalcontainer").fadeIn("slow");
    $(".modal").fadeIn("slow");
});

$(".close,.buttons").click(function() {
    $(".modalcontainer").fadeOut("slow");
    $(".modal").fadeOut("slow");
});
</script>
<script>
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
</script>
<?php include './include/footer.inc.php'; ?>