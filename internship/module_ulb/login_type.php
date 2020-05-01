<?php include './include/header_login.php';

/* $flag=$_GET['flag'];
if($flag ==1){
    $error_msg = "<div class='login-modal'>Username or password is incorrect</div>";
    $script = "<script> $(document).ready(function(){ $('#exampleModal2').modal('show'); }); </script>";
}
else if($flag ==2){
    $error_msg = "<div class='login-modal'>Username or password is incorrect</div>";
    $script = "<script> $(document).ready(function(){ $('#exampleModal2').modal('show'); }); </script>";
}
else if($flag ==3){
    $error_msg = "<div class='login-modal'>Username or password is incorrect</div>";
    $script = "<script> $(document).ready(function(){ $('#exampleModal2').modal('show'); }); </script>";
}
 */
?>
<section class="ftco-section bg-light mt-4">
    <div class="wrapper-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <div class="border border-primary">
                            <div class="text bg-white p-4">
                                <div class="h1 text-primary">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3 class="heading">Urban Local Bodies/Smart Cities</h3>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="./login_government.php?id=1"
                                            class="btn btn-primary">Login</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <div class="border border-primary">
                            <div class="text bg-white p-4">
                                <div class="h1 text-primary">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3 class="heading">Urban Local Body Department</h3>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><button style="background-color:#09e1f6" type="button"
                                            class="btn btn-primary " data-toggle="modal" data-target="#exampleModal2">
                                            login
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="false">
    <?php if(isset($error_msg)){ echo $error_msg; } ?>
    <form action="./src/php/main.php" method="post">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <b>Login For ULB</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="width:auto">
                    <div class="container" style="width: 450px;">
                        <div class="row">
                            <div class="col">
                                <label for="date">Email</label>
                                <input class="form-control" type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="date">Password</label>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" id="password">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer" id="exampleModalLabel">
                        <button type="submit" id="login_government" name="login_government"
                            class="btn btn-success">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php if(isset($script)){ echo $script;} ?>
</div>
</section>
<?php include './include/footer1.inc.php'?>