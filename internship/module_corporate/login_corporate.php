<?php include './include/header_login.php';
include './include/msg.inc.php';?>
    <!-- END nav -->
    <center>
        <section class="mt-2">
            <section class="ftco-section bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div id="student_form" class="w-50">
                                <form method="post" class="text-center border border-light p-5"
                                    action="./src/php/main.php">
                                    <!-- Email -->
                                    <div class="row">

                                        <div class="col">
                                            <label class="float-left" for=""style ="float:left">Email <br></label><b style ="float:left;color:red">*</b>
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" onchange="validateemail(this)"class="form-control mb-4"
                                                    placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <label class="float-left" for=""style ="float:left">Password</label><b style ="float:left;color:red">*</b>
                                            <div class="form-group">
                                                <input type="password" name="password" id="password"
                                                    class="form-control mb-4" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Send button -->
                                    <center>
                                        <input type="submit" name="login_c" id="login_c" value="login"
                                            class="btn btn-primary btn-block w-25" style="font-weight:bold" type="button">
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </section>
    </center>

<?php include './include/footer1.inc.php'?>
   