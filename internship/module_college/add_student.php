<?php
include './include/auth.php'; 
include './include/header.inc.php'?>

<div class="content-wrapper">
<section class="content">
        <div class="container-fluid">
            <center>
                <!-- /.card-body -->
                <form action="" method="post">
                    <div class="row">
                        <div class="col">
                            <input type="hidden" id="id" name="id" value=<?php echo $_SESSION['id'];?>>
                            <b>Courses</b>
                            <div class="form-group">
                                <select class="form-control" name="course" id="course">
                                    <option value="BTECH">BTECH</option>
                                    <option value="BSC">BSC</option>
                                    <option value="BCOM">BCOM</option>
                                    <option value="BBA">BBA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <b>Stream</b>
                            <div class="form-group">
                                <select class="form-control" name="stream" id="stream">
                                    <option value="CSE">Computer Science Engineering</option>
                                    <option value="ME">Mechanical Engineering</option>
                                    <option value="EE">Electrical Engineering </option>
                                    <option value="AE">Aeronautical Engineering </option>
                                    <option value="CE">chemical Engineering </option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <b> Years of Student</b>
                            <div class="form-group">
                                <select class="form-control" name="year" id="year">
                                    <option value="Ist YEAR">1st YEAR</option>
                                    <option value="IInd YEAR">2nd YEAR</option>
                                    <option value="IIIrd YEAR">3rd YEAR</option>
                                    <option value="IVth YEAR">4th YEAR</option>
                                    <option value="VTH YEAR">5th YEAR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col">
                            <b>Name</b>
                            <div class="form-group">
                               <input class="form-control" type="text" id="new" name="new">
                            </div>
                        </div>
                        <div class="col">
                            
                            <b>Email</b>
                            <div class="form-group">
                            <input class="form-control"  type="email" id="email" name="email"?>
                            </div>
                        </div>
                        
                        <div class="col">
                            <b>Phone Number</b>
                            <div class="form-group">
                               <input class="form-control"  type="text" id="phone" name="phone">
                            </div>
                        </div>
                    </div>
                        <button class="btn btn-primary" id="myBtn" name="myBtn">Add Students</button>
                </form>
                
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Course Name</th>
                                    <th>Stream</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <th>1</th>
                                    <th>BTECH</th>
                                    <th>CSE</th>
                                    <th>1st Year</th>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>BBA</th>
                                    <th>Business</th>
                                    <th>1st Year</th>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <th>BSC</th>
                                    <th>Agriculture</th>
                                    <th>2nd Year</th>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <th>BTECH</th>
                                    <th>EE</th>
                                    <th>3rd Year</th>
                                </tr>
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