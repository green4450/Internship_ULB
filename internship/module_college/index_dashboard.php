<?php
include './include/auth.php';
include './include/header.inc.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>1000</h3>

                            <h3><b>Total Students</b></h3>
                            <h3>750</h3>
                            <p>Interns</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="./industry_problems.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>700</h3>

                            <h4><b>Total Btech Students</b></h4>
                            <h3>450</h3>

                            <h4><b>Total Internshihp</b></h4>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="./internships.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>254</h3>

                            <h4><b>Total BBA Students</b></h4>
                            <h3>50</h3>

                            <h4><b>Total BBA Interns</b></h4>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="./internships.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>344</h3>
                            <h4><b>Total BCA Students</b></h4>
                            <h3>100</h3>
                            <h4><b>Total Interns</b></h4>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="./internships.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Company Visited</b></h3>

                        <div class="card-tools">
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style=" overflow:scroll;">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company Arrived</th>
                                <th>Date of Arrival</th>
                                <th>Status</th>
                                <th>Total Interview</th>
                                <th>Freshers Hired</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Microsoft</td>
                                <td>09-9-2019</td>
                                <td><span class="tag tag-success">Arrived</span></td>
                                <td>90</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Amazon</td>
                                <td>11-9-2019</td>
                                <td><span class="tag tag-success">Arrived</span></td>
                                <td>90</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Microsoft</td>
                                <td>09-9-2019</td>
                                <td><span class="tag tag-success">Arrived</span></td>
                                <td>90</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Amazon</td>
                                <td>11-9-2019</td>
                                <td><span class="tag tag-success">Arrived</span></td>
                                <td>90</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Samsung</td>
                                <td>11-2-2020</td>
                                <td><span class="tag tag-success">Arrived</span></td>
                                <td>90</td>
                                <td>180</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>ZS</td>
                                <td>15-2-2020</td>
                                <td><span class="tag tag-success">Arrived</span></td>
                                <td>90</td>
                                <td>15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Company Requested</b></h3>

                        <div class="card-tools">
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style=" overflow:scroll;">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company Arrived</th>
                                <th>Date of Arrival</th>
                                <th>Status</th>
                                <th>Freshers Needed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ZS</td>
                                <td>15-7-2020</td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-info"
                                        id="myBtn" name="myBtn">
                                        Approve
                                    </button>
                                    <button class="btn btn-sm btn-danger" id="myBtn3" name="myBtn3">
                                        Reject
                                    </button>
                                    <button class="btn btn-sm btn-success" id="myBtn2" name="myBtn2">
                                        Propose Different Date
                                    </button>
                                </td>
                                </td>
                                <td>190</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nasa</td>
                                <td>12-7-2020</td>
                                <td>
                                    <button type="submit" id="submit" name="submit" class="btn btn-sm btn-info">
                                        Approve
                                    </button>
                                    <button class="btn btn-sm btn-danger" id="myBtn" name="myBtn">
                                        Reject
                                    </button>
                                    <button class="btn btn-sm btn-success" id="myBtn2" name="myBtn2">
                                        Propose Different Date
                                    </button>
                                </td>
                                <td>190</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Indian Army</td>
                                <td>14-7-2020</td>
                                <td>
                                    <button type="submit" id="submit" name="submit" class="btn btn-sm btn-info">
                                        Approve
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        Reject
                                    </button>
                                    <button class="btn btn-sm btn-success" id="myBtn2" name="myBtn2">
                                        Propose Different Date
                                    </button>
                                </td>
                                <td>190</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Indian Airforce</td>
                                <td>15-7-2020</td>
                                <td>
                                    <button type="submit" id="submit" name="submit" class="btn btn-sm btn-info">
                                        Approve
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        Reject
                                    </button>
                                    <button class="btn btn-sm btn-success" id="myBtn2" name="myBtn2">
                                        Propose Different Date
                                    </button>
                                </td>
                                <td>190</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>New Date Information</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <div class="row">
                                <div class="col">
                                    <label for=""> Date</label>
                                    <input class="form-control" type="date" id="date" name="date">
                                </div>
                                <div class="col">
                                    <label for="">Time</label>
                                    <input class="form-control" type="text" id="time" name="time">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="">Contact Person Full Name</label>
                                    <input class="form-control" type="text" id="fname" name="fname">
                                </div>
                                <div class="col">
                                    <label for="">Designation</label>
                                    <input class="form-control" type="text" id="lname" name="lname">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for=""> Email</label>
                                    <input class="form-control" type="email" id="email" name="email">
                                </div>
                                <div class="col">
                                    <label for="">Phone Number</label>
                                    <input class="form-control" type="text" id="phone" name="phone">
                                </div>
                            </div>
                            <br>
                            <label for=""> Reason</label>
                            <textarea class="form-control" name="reason" id="reason" cols="30" rows="4">
      </textarea>

                        </center>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Reject Reason</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <label for=""> Reason</label>
                            <textarea class="form-control" name="reason" id="reason" cols="30" rows="4">
      </textarea>
                            <div class="row">
                                <div class="col">
                                    <label for="">Contact Person Full Name</label>
                                    <input class="form-control" type="text" id="fname" name="fname">
                                </div>
                                <div class="col">
                                    <label for="">Designation</label>
                                    <input class="form-control" type="text" id="lname" name="lname">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for=""> Email</label>
                                    <input class="form-control" type="email" id="email" name="email">
                                </div>
                                <div class="col">
                                    <label for="">Phone Number</label>
                                    <input class="form-control" type="text" id="phone" name="phone">
                                </div>
                            </div>
                            <br>



                        </center>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Approval</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <label for="">Thank You Message</label>
                            <textarea class="form-control" name="reason" id="reason" cols="30" rows="4">
      </textarea>
                            <div class="row">
                                <div class="col">
                                    <label for="">Contact Person Full Name</label>
                                    <input class="form-control" type="text" id="fname" name="fname">
                                </div>
                                <div class="col">
                                    <label for="">Designation</label>
                                    <input class="form-control" type="text" id="lname" name="lname">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for=""> Email</label>
                                    <input class="form-control" type="email" id="email" name="email">
                                </div>
                                <div class="col">
                                    <label for="">Phone Number</label>
                                    <input class="form-control" type="text" id="phone" name="phone">
                                </div>
                            </div>
                            <br>



                        </center>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<script>
$("#myBtn2").click(function() {
    $("#myModal2").modal({
        backdrop: false
    });
});
$("#myBtn").click(function() {
    $("#myModal").modal({
        backdrop: false
    });
});
$("#myBtn3").click(function() {
    $("#myModal1").modal({
        backdrop: false
    });
});
</script>