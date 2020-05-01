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
                            <b>Company</b>
                            <div class="form-group">
                                <select class="form-control" name="course" id="course">
                                    <option value="Microsoft">Microsoft</option>
                                    <option value="IBM">IBM</option>
                                    <option value="ZS">ZS</option>
                                    <option value="Samsung">Samsung</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <b>Students</b>
                            <div class="form-group">
                                <select class="form-control" name="stream" id="stream">
                                    <option value="Akash">Akash</option>
                                    <option value="Shivanshu">Shivanshu</option>
                                    <option value="Rajat">Rajat </option>
                                    <option value="Anant">Anant</option>
                                    <option value="Ankush">Ankush</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <b> Date</b>
                            <div class="form-group">
                                <input class="form-control" type="date" id="date" name="date">
                            </div>
                        </div>
                    </div>
                   
                     <button class="btn btn-primary" id="myBtn" name="myBtn">Add Placed Student</button>
                </form>
                
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Company</th>
                                    <th>Student</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <th>1</th>
                                    <th>Microsft</th>
                                    <th>
                                    Name : Akash 
                                    <br>
                                    Adm No : 1710234556
                                    <br>
                                    Grad Year: 3rd
                                    <br>
                                    Course : BTECH
                                    <br>
                                    stream : CSE

                                    </th>
                                    <th>02/02/2020</th>
                                </tr>
                                <tr>
                            <th>2</th>
                                    <th>Samsung</th>
                                    <th>Name : Shivanshu
                                    <br>
                                    Adm No : 1710ne4003
                                    <br>
                                    Grad Year: 3rd
                                    <br>
                                    Course : BTECH
                                    <br>
                                    stream : CSE 
                                    </th>
                                    <th>10/12/2019</th>
                                </tr>
                                <tr>
                            <th>3</th>
                            <th>ZS</th>
                                    <th>Name : Rajat
                                        <br>            
                                    Adm No : 1910234567
                                    <br>
                                    Grad Year: 3rd
                                    <br>
                                    Course : BTECH
                                    <br>
                                    stream : CSE</th>
                                    
                                    <th>19/10/2019</th>
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