<?php 
include './include/auth.php';
include './include/header.inc.php';
?>
</head>
<div class="content-wrapper">
<body>
<section class="container">
    <form class="text-center p-5" action="#!">

        <p class="h4 mb-4">Search</p>

        <!-- Email -->
        <input type="text" id="defaultLoginFormEmail" class="form-control mb-2" placeholder="Search Institutes">

        <!-- Sign in button -->
        <center>
        <button class="btn btn-primary"  type="submit">Search</button>
        </center>
    </form>
</section>


<section class="container mt-2">

<div class="row">
  <div class="col-sm-6">
    
  <div class="card">
    <img src="https://getmyuni.azureedge.net/college-images-test/graphic-era-university-geu-dehradun/7a286dc7af684bd9b2274f11fa50378b.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="font-size:19px">Graphic Era University</h5>
      <p class="card-text">
      <div >

      <!--Title-->
      <h4 class="card-title"></h4>
      <!--Text-->
      <p class="card-text">
      Email: example@example.com
      <br>
      Phone: +91 8374 738 837
      <br>
      Courses Offered: B-tech, B-Com, Bsc
      <br>
      
      Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary">Request for Campus Interview</button>

    </div>
      </p>
    </div>
  </div>
  
  </div>
  <div class="col-sm-6">
  <div class="card">
    <img src="https://akm-img-a-in.tosshub.com/sites/btmt/images/stories/iit_delhi_660x450_093019120755.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="font-size:19px">IIIT</h5>
      <p class="card-text">
      <div >

      <!--Title-->
      <h4 class="card-title"></h4>
      <!--Text-->
      <p class="card-text">
      Email: example@example.com
      <br>
      Phone: +91 8374 738 837
      <br>
      Courses Offered: B-tech, B-Com, Bsc
      <br>
      
      Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary">Request for Campus Interview</button>

    </div>
      </p>
    </div>
  </div>
  </div>

  <div class="col-sm-6">
  <div class="card">
    <img src="https://educrib.sirv.com/uploads/p198a4vtvmkbeov7icrgvnlgt4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="font-size:19px">DIT</h5>
      <p class="card-text">
      <div >

      <!--Title-->
      <h4 class="card-title"></h4>
      <!--Text-->
      <p class="card-text">
      Email: example@example.com
      <br>
      Phone: +91 8374 738 837
      <br>
      Courses Offered: B-tech, B-Com, Bsc
      <br>
      
      Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary" >Request for Campus Interview</button>

    </div>
      </p>
    </div>
  </div>
  </div>
</div>
</section>


<!-- Modal -->
<div class="modal fade" id="elegantModalForm" data-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Request for Campus Interview</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-5">
          <input type="text" id="Form-email1" class="form-control validate" value="Microsoft">
          <label data-error="wrong" data-success="right" for="Form-email1">Company Name</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="Form-email1" class="form-control validate" value="www.microsoft.com">
          <label data-error="wrong" data-success="right" for="Form-email1">Webiste URL</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Designation</label>
        </div>
        

        <div class="md-form mb-5">
          <input type="text" id="Form-email1" class="form-control validate"value=<?php echo $_SESSION['user']?>>
          <label data-error="wrong" data-success="right" for="Form-email1">Full Name</label>
        </div>

        

        <div class="md-form mb-5">
          <input type="text" id="Form-email1" class="form-control validate"value=<?php echo $_SESSION['email']?>>
          <label data-error="wrong" data-success="right" for="Form-email1" >Email</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Phone Number</label>
        </div>


            <select class="form-control mt-2">
                <option value="" disabled>For Branch</option>
                <option value="1" selected>Btech</option>
                <option value="2">Bcom</option>
                <option value="3">Mba</option>
                <option value="4">Bsc</option>
            </select>
            <label data-error="wrong" data-success="right" for="Form-email1">Course</label>
            <br>
            <div class="md-form mb-5">
          <input type="text" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Year</label>
        </div>
        <div class="md-form mb-5">
          <input type="text" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Number of Intern Requiried</label>
        </div>

        <div class="form-group mt-4">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Description"></textarea>
        </div>

        <div class="md-form mb-5">
          <input type="date" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Date of Visit</label>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Submit</button>
        </div>
      </div>
     
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->




<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>
</body>
</div>
</html>