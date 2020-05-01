<?php 
  include './include/auth.php';
  include './include/header.inc.php'; 

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php 
    
    $id = $_SESSION['id'];
    $uid=$_GET['uid'];
    $sql = "SELECT * FROM `post_internship_government` WHERE uid ='$uid'";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
    ?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $row['title'];?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $row['title'] ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i>Department Name: <?php echo $row['department']?>
                    <small class="float-right">Published On:<?php echo $row['posted_on']?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <b>Internship ID: </b><?php echo $row['uid']?>
                  <br>
                  <b>Internship Title: </b> <?php echo $row['title']?>
                  <br>
                  <b>Duration: </b><?php echo $row['duration']?>
                  <br>
                  <b>Internship Description:</b> <?php echo $row['description']?>
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <!-- /.col -->
              </div>
              <br>
              <?php }?>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Interns Name</th>
                      <th>Internship Name</th>
                      <th>Reply</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php 
                    
                      $id = $_SESSION['id'];
                      $uid=$_GET['uid'];
                      $sql = "SELECT student_first_name,title from student_register r INNER JOIN government_internship_apply g on r.student_uid = g.student_uid and g.status = 3 INNER JOIN post_internship_government a ON a.uid = g.internship_uid and g.internship_uid = '$uid' and g.company_id = '$id' ";
                      $result = mysqli_query($conn,$sql);
                      $result1 = mysqli_num_rows($result);
                      if($result1<1){
                        echo "No Students Have Been Selected Yet";
                      }
                      while($row=mysqli_fetch_assoc($result))
                      {
    ?>
                    
                      <td>1</td>
                      <td><?php echo $row['student_first_name']?></td>
                      <td><?php echo $row['title']?></td>
                      <td>
                          <button class="btn btn-sm btn-info">
                              Allocate a Work
                          </button>
                      </td>
                    </tr>
                   
                    </tbody>
                      <?php }?>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <!-- /.col -->
               <!--  <div class="col-6">
                  <p class="lead">Deadline 31/03/2020</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Total Interns on Project:</th>
                        <td>240</td>
                      </tr>
                      <tr>
                        <th>Module Complete</th>
                        <td>45</td>
                      </tr>
                      <tr>
                        <th>Days Spend</th>
                        <td>10 Days Ago</td>
                      </tr>
                      <tr>
                        <th>Budjet</th>
                        <td>Rs. 23,400</td>
                      </tr>
                    </table>
                  </div>
                </div> -->
                <!-- /.col -->
              </div>
              <!-- /.row -->


               <section>
                  <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Data Collection
                            </button>
                        </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="row">
                            <div class="col">

                            <div class="card">
                                <div class="card-header text-danger">
                                    Backlog
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>

                            </div>

                            

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-success">
                                    In Progress
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>
                            
                            <div class="col">
                            <div class="card">
                                <div class="card-header text-info">
                                    Review
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-warning">
                                    Complete
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Data Preprocessing
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="row">
                            <div class="col">

                            <div class="card">
                                <div class="card-header text-danger">
                                    Backlog
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>

                            </div>

                            

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-success">
                                    In Progress
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>
                            
                            <div class="col">
                            <div class="card">
                                <div class="card-header text-info">
                                    Review
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-warning">
                                    Complete
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Model Building
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="row">
                            <div class="col">

                            <div class="card">
                                <div class="card-header text-danger">
                                    Backlog
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>

                            </div>

                            

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-success">
                                    In Progress
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>
                            
                            <div class="col">
                            <div class="card">
                                <div class="card-header text-info">
                                    Review
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            <div class="col">
                            <div class="card">
                                <div class="card-header text-warning">
                                    Complete
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Data</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Comment</a>
                                </div>
                            </div>
                            </div>

                            
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
              </section>
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;" onclick="window.print();">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include './include/footer.inc.php' ?>