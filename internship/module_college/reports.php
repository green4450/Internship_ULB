<?php
include './include/auth.php'; 
  include './include/header.inc.php';
 

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Reports</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <button class="btn btn-info float-right">
          Save as PDF
        </button>
        <button class="btn mr-2 btn-info float-right">
          Print
        </button>
    
        <select name="" id="" class="w-50 mb-2 form-control">
            <option value="">All Deparments</option>
            <option value="">BTECH</option>
            <option value="">BSC</option>
            <option value="">BBA</option>
            <option value="">BCOM</option>
        </select>
        
        
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>700</h3>

                <p>Total Internships</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>80</h3>

                <p>Total Companies Visited</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>200</h3>

                <p>Total Students placed</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>50 lacs</h3>

                <p>Highest Package</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-12">


          <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Course Wise Internships</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
              <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Course Name</th>
                      <th>Year</th>
                      <th>Students Applied</th>
                      <th>Students Selected</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Btech</td>
                      <th>1st</th>
                      <td>560</td>
                      <td>300</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>BBA</td>
                      <th>2nd</th>
                      <td>100</td>
                      <td>90</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>BSC</td>
                      <th>3rd</th>
                      <td>20</td>
                      <td>10</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>BCOM</td>
                      <th>4th</th>
                      <td>30</td>
                      <td>20</td>
                    </tr>
                    </tbody>
              </table>
              </div>
              </div>

          



            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Companies</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
              <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Company Name</th>
                      <th>Type</th>
                      <th>Students Applied</th>
                      <th>Students Selected</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Microsft</td>
                      <td>Software</td>
                      <td>100</td>
                      <td>90</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Samsung</td>
                      <td>Software</td>
                      <td>200</td>
                      <td>190</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>ZS</td>
                      <td>Pharmatical</td>
                      <td>120</td>
                      <td>90</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Indian Army</td>
                      <td>Defence</td>
                      <td>150</td>
                      <td>100</td>
                    </tr>
                    </tbody>
              </table>
              </div>
              </div>
            <!-- /.card -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include './include/footer.inc.php' ?>
