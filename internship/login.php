<?php include './include/header_new.inc.php'?>
<div class="hero-wrap img" style="background-image: url(./assets/images3/bg_1.jpg); height:200px">
    <!--  <div class="overlay"></div> -->
    <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-10 d-flex align-items-center ftco-animate">
                <div class="text text-center pt-5 mt-md-5 _newTpDiv">
                    <div class="ftco-counter ftco-no-pt ftco-no-pb">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <center>
        <section class="ftco-section bg-light" style="margin-top:70px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="student_form" class="w-50">
                            <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                                <!-- Email -->
                                <label class="text-light" for="email" style="float:left">Email<b
                                        style="color:red;">*</b></label>
                                <input type="email" name="email" id="email" class="form-control mb-4"
                                    placeholder="E-mail">
                                <label class="text-light" for="password" style="float:left">Password<b
                                        style="color:red;">*</b></label>
                                <input type="password" name="password" id="password" class="form-control mb-4"
                                    placeholder="Password">
                                <center>
                                    <input type="submit" name="login" id="login" value="Login"
                                        class="btn btn-info btn-block w-25" style="font-weight:bold;">
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </center>

<?php include './include/footer1.inc.php'?>