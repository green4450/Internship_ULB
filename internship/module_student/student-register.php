<?php include './include/header_login.php';
    include './include/msg.inc.php';
?>
<section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="student_form">
                        <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                            <!-- Name -->
                            <div class="row">
                                <div class="col">
                                    <label for="fname" style="float:left"><b>First Name</b> <b style="color:red">*</b></label>
                                    <input type="text" name="fname" id="fname" onchange="validatestrings(this)" class="form-control mb-4"
                                        placeholder="First Name" required>
                                </div>
                                <div class="col">
                                    <label for="lname" style="float:left"><b>Last Name</b><b style="color:red">*</b></label>
                                    <input type="text" name="lname" onchange="validatestrings(this)"id="lname" class="form-control mb-4"
                                        placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="fname" style="float:left"><b>State</b> <b style="color:red">*</b></label>
                                    <input type="text" name="state" id="state"onchange="validatestrings(this)" class="form-control mb-4"
                                        placeholder="State" required>
                                </div>
                                <div class="col">
                                    <label for="lname" style="float:left"><b>City</b><b style="color:red">*</b></label>
                                    <input type="text" name="city"onchange="validatestrings(this)" id="city" class="form-control mb-4"
                                        placeholder="City" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="contactnum" style="float:left"><b>Contact Number</b><b
                                            style="color:red">*</b></label>
                                    <input type="text" name="contactnum" id="contactnum"onchange="phonenumber(this)" class="form-control mb-4"
                                        placeholder="Contact Number" required>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email" style="float:left"><b>Email</b><b style="color:red">*</b></label>
                                        <input type="email" name="email" id="email"onchange="validateemail(this)" class="form-control mb-4"
                                            placeholder="E-mail" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <label for="" style="float:left"><b>Password</b><b style="color:red">*</b></label>
                            <input type="password" name="password" id="password" class="form-control mb-4"
                                placeholder="Password">
                            <center>
                                <button name="student-register" id="student-register"
                                    class="btn btn-primary btn-block w-25" type="submit">
                                    Register <i class="ml-2 fas fa-sign-out-alt"></i></button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<?php include './include/footer1.inc.php'?>