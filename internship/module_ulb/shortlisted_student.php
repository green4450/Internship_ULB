<?php 
include './include/auth.php';
include './include/header.inc.php'; 
include './include/msg.inc.php';
$student_id =" ";
$company_id = " ";
$internship_uid = " ";
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
                        <div class="card-header">
                            <h3 class="card-title">
                                Internship
                            </h3>
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
                                    $id = $_SESSION['id'];
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
                                        government_internship_apply s
                                        INNER JOIN
                                        post_internship_government m ON s.internship_uid = m.uid
                                        INNER JOIN
                                        student_register r ON r.student_uid = s.student_uid
                                        INNER JOIN
                                        ubl_register u ON u.ulb_company_id = m.company_id and 
                                        u.ulb_company_id = '$id' and s.status = 1  where m.company_id='$id' order by posted_on";
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
                                                <a href="./user_profile_student.php?uid=<?php echo $row['student_uid'];?>" class="btn btn-sm btn-info" target="_blank" style="background-color:#">View Profile</a>
                                                <button style="background-color:#09e1f6" type="button"
                                                    class="btn btn-sm " data-toggle="modal"
                                                    data-target="#exampleModal2<?php echo $row['student_uid'] ?>">
                                                    Call For Interview
                                                </button>
                                                <button type="button" data-toggle="modal"
                                                    data-target="#exampleModal1<?php echo $row['student_uid']?>"
                                                    class="btn btn-sm btn-success">
                                                    Release Offer Letter
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    id="reject<?php echo $row['student_uid']?>"
                                                    name="reject<?php echo $row['student_uid']?>">
                                                    Reject the Applicant
                                                </button>
                                                <script>
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
                                                <button type="button" data-toggle="modal"
                                                    data-target="#exampleModal<?php echo $row['student_uid']?>"
                                                    class="btn btn-sm btn-info" id="hold" name="hold">
                                                    Waitlist Applicant
                                                </button>
                                                <div class="modal" id="exampleModal<?php echo $row['student_uid']?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="false">
                                                    <form action="./src/php/main.php" method="post">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        <b>Reason
                                                                            For Holding</b></h5>

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
                                                                                    <label for="date">Specify Below the
                                                                                        Reason For Waitlisting</label>
                                                                                    <textarea class="form-control"
                                                                                        name="reason" id="reason"
                                                                                        cols="50" rows="10"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer" id="exampleModalLabel">
                                                                    <button type="submit" id="hold_reason"
                                                                        name="hold_reason" class="btn btn-success">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal" id="exampleModal6<?php echo $row['student_uid']?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="false">
                                                    <form action="./src/php/main.php" method="post">

                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        <b> Calling For Interview</b>
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
                                                                    <div class="container" style="width: 450px;">
                                                                        <input type="hidden" name="company_id"
                                                                            id="company_id"
                                                                            value=<?php echo $_SESSION['id']?>>
                                                                        <input type="hidden" name="student_id"
                                                                            id="student_uid"
                                                                            value=<?php echo $row['student_uid']?>>
                                                                        <input type="hidden" name="internship_uid"
                                                                            id="internship_uid"
                                                                            value=<?php echo $row['uid']?>>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="date">Date Of
                                                                                    Interview</label>
                                                                                <input class="form-control" type="date"
                                                                                    name="date" id="date">
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="date">Time</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control"
                                                                                        type="text" name="time"
                                                                                        id="time">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="date">Interview
                                                                                    Place</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control"
                                                                                        type="text"
                                                                                        name="interview_place"
                                                                                        id="interview_place">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="date">Documents
                                                                                    Required</label>
                                                                                <input class="form-control" type="text"
                                                                                    name="needed" id="needed">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="note">Note (If Any)</label>
                                                                                <textarea class="form-control"
                                                                                    name="note" id="note" cols="50"
                                                                                    rows="10"></textarea>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="date">Dos ad Donts</label>
                                                                                <div class="form-group">
                                                                                    <textarea class="form-control"
                                                                                        type="text" name="info"
                                                                                        id="info" cols="50"
                                                                                        rows="10"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer"
                                                                            id="exampleModalLabel">
                                                                            <button type="submit"
                                                                                id="called_for_interview"
                                                                                name="called_for_interview"
                                                                                class="btn btn-success">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal" id="exampleModal2<?php echo $row['student_uid']?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="false">
                                                    <form action="./src/php/main.php" method="post">

                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        <b> Calling For Interview</b>
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
                                                                    <div class="container" style="width: 450px;">
                                                                        <input type="hidden" name="company_id"
                                                                            id="company_id"
                                                                            value=<?php echo $_SESSION['id']?>>
                                                                        <input type="hidden" name="student_id"
                                                                            id="student_uid"
                                                                            value=<?php echo $row['student_uid']?>>
                                                                        <input type="hidden" name="internship_uid"
                                                                            id="internship_uid"
                                                                            value=<?php echo $row['uid']?>>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="date">Date Of
                                                                                    Interview</label>
                                                                                <input class="form-control" type="date"
                                                                                    name="date" id="date">
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="date">Time</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control"
                                                                                        type="text" name="time"
                                                                                        id="time">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="date">Interview
                                                                                    Location</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control"
                                                                                        type="text"
                                                                                        name="interview_place"
                                                                                        id="interview_place">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="date">Documents
                                                                                    Required</label>
                                                                                <input class="form-control" type="text"
                                                                                    name="needed" id="needed">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="note">Note (If Any)</label>
                                                                                <textarea class="form-control"
                                                                                    name="note" id="note" cols="50"
                                                                                    rows="10"></textarea>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="date">Do's and
                                                                                    Dont's</label>
                                                                                <div class="form-group">
                                                                                    <textarea class="form-control"
                                                                                        type="text" name="info"
                                                                                        id="info" cols="50"
                                                                                        rows="10"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer"
                                                                            id="exampleModalLabel">
                                                                            <button type="submit"
                                                                                id="called_for_interview"
                                                                                name="called_for_interview"
                                                                                class="btn btn-success">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal" id="exampleModal1<?php echo $row['student_uid']?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="false">
                                                    <form action="./src/php/main.php" method="post">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        <b> Offer Letter Generation</b>
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
                                                                    <div class="container" style="width: 450px;">
                                                                        <input type="hidden" name="company_id"
                                                                            id="company_id"
                                                                            value=<?php echo $_SESSION['id']?>>
                                                                        <input type="hidden" name="student_id"
                                                                            id="student_uid"
                                                                            value=<?php echo $row['student_uid']?>>
                                                                        <input type="hidden" name="internship_uid"
                                                                            id="internship_uid"
                                                                            value=<?php echo $row['uid']?>>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="date">Starting Date
                                                                                    Of Internship</label>
                                                                                <input class="form-control" type="date"
                                                                                    name="start_date" id="start_date">
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="date">Ending Date Of
                                                                                    Internship</label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control"
                                                                                        type="date" name="end_date"
                                                                                        id="end_date">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="date">
                                                                                    Contact Info
                                                                                </label>
                                                                                <div class="form-group">
                                                                                    <input class="form-control"
                                                                                        name="contact_info"
                                                                                        id="contact_info" cols="50"
                                                                                        rows="10">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <label for="date">Address
                                                                                </label>
                                                                                <input class="form-control" type="text"
                                                                                    name="address2" id="address2">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="date">
                                                                                    Note(if Any)
                                                                                </label>
                                                                                <div class="form-group">
                                                                                    <textarea class="form-control"
                                                                                        name="note" id="note" cols="50"
                                                                                        rows="10"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="modal-footer" id="exampleModalLabel">
                                                                    <button type="submit" id="offer_letter"
                                                                        name="offer_letter" class="btn btn-success">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>


                                                <div class="modal" id="exampleModal3<?php echo $row['student_uid']?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="false">
                                                    <form action="./src/php/main.php" method="post"
                                                        style="padding-right: 50em;">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        <b></b>
                                                                    </h5>

                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" style="width:auto">
                                                                    <div class="container">
                                                                        <div class="form-group"
                                                                            id="rating-ability-wrapper">
                                                                            <input type="hidden" name="id1" id="id1"
                                                                                value=<?php echo $_SESSION['id']?>>
                                                                            <input type="hidden" name="id2" id="id2"
                                                                                value=<?php echo $row['student_uid']?>>
                                                                            <input type="hidden" name="id3" id="id3"
                                                                                value=<?php echo $row['uid']?>>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="date">Starting Date
                                                                                        Of
                                                                                        Internship</label>
                                                                                    <textarea name="reason" id="reason"
                                                                                        cols="50" rows="10"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer" id="exampleModalLabel">

                                                                    <button type="submit" id="submit" name="submit"
                                                                        class="btn btn-success">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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
                                                <div class="modal" id="exampleModal5<?php echo $row['student_uid']?>"
                                                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="false">
                                                    <form action="./src/php/main.php" method="post">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        <b> Certificate Information</b>
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
                                                                                    <label for="date">Starting Date Of
                                                                                        Internship</label>
                                                                                    <input class="form-control"
                                                                                        type="date" name="starting_date"
                                                                                        id="starting_date">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="date">Ending Date Of
                                                                                        Internship</label>
                                                                                    <div class="form-group">
                                                                                        <input class="form-control"
                                                                                            type="date"
                                                                                            name="ending_date"
                                                                                            id="ending_date">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="date">Working
                                                                                        Under</label>
                                                                                    <div class="form-group">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            name="working_under"
                                                                                            id="working_under">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="date">Working Areas
                                                                                    </label>
                                                                                    <input class="form-control"
                                                                                        type="text" name="working_area"
                                                                                        id="working_area">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="date">Internship
                                                                                        Performance</label>
                                                                                    <div class="form-group">
                                                                                        <input class="form-control"
                                                                                            type="text"
                                                                                            name="performance"
                                                                                            id="performance">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="date">Candidate Rating
                                                                                        (Out Of 10)</label>
                                                                                    <input class="form-control"
                                                                                        type="text" name="rate"
                                                                                        id="rate">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer" id="exampleModalLabel">

                                                                    <button type="submit" id="certificate"
                                                                        name="certificate" class="btn btn-success">Save
                                                                        changes</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </form>
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
<!-- /.content-wrapper -->
<?php include './include/footer.inc.php'; ?>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    $('#trigger').click(function() {
        $("#dialog").dialog();
    });
});
</script>
<div class="modal">

</div>