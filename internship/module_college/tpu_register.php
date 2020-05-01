<?php include './include/header_login.php';
    include './include/msg.inc.php';
?>

    <section style="margin-left:8%" class="mt-4">
    <div class="container mt-4">
            <div id="coporate_form">
                <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                    <!-- Name -->
                    <div class="row">
                        <div class="col">
                            <label for=""style="float:left">College Name<b style="color:red">*</b></label>
                            <input type="text" name="organization" id="organization"onchange="validatestrings(this)" class="form-control mb-4" placeholder="University Name" required>
                        </div>

                        <div class="col">
                            <label for=""style="float:left">College Unique Number<b style="color:red">*</b></label>
                            <input type="text" name="unique" id="unique"onchange="validatestringsandnumbers(this)" class="form-control mb-4"
                                placeholder="University Unique Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for=""style="float:left">College LOGO<b style="color:red">*</b></label>
                            <input type="file" name="organization" id="organization" class="form-control mb-4" placeholder="University Name" required>
                        </div>

                        <div class="col">
                            <label for=""style ="float:left">College Website<b style="color:red">*</b></label>
                            <input type="text" name="unique" id="unique" class="form-control mb-4"
                                placeholder="University Unique Number" onchange="validatestrings(this)"required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <label for=""style ="float:left">TPO First Name<b style="color:red">*</b></label>
                            <input type="text" name="fname" id="fname" pattern="[A-Za-z]+" class="form-control mb-4"
                                placeholder="TPO First Name"onchange="validatestrings(this)" required>
                        </div>
                        <div class="col">
                        <label for=""style ="float:left">TPO Last Name<b style="color:red">*</b></label>
                            <input type="text" name="lname" id="lname" pattern="[A-Za-z]+"class="form-control mb-4" placeholder="TPO Last Name"onchange="validatestrings(this)" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <label for=""style ="float:left">TPO Email<b style="color:red">*</b></label>
                            <input type="email" name="email" id="email" class="form-control mb-4"
                                placeholder="E-mail(TPO)"onchange="validatestrings(this)" required>
                        </div>
                        <div class="col">
                        <label for=""style ="float:left">TPO Password<b style="color:red">*</b></label>
                            <input type="password" name="password" id="password" class="form-control mb-4"
                                placeholder="Password(TPO)" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <label for=""style ="float:left">TPO Contact Number<b style="color:red">*</b></label>
                            <input type="number" name="contactnum" id="contactnum" pattern="^\d{10}$" class="form-control mb-4"onchange="phonenumber(this)" placeholder="Contact Number(TPO)" required>
                        </div>
                        <div class="col">
                        <label for=""style ="float:left">TPO ID Number<b style="color:red">*</b></label>
                            <input type="text" name="idnum" id="idnum" class="form-control mb-4"
                                placeholder="ID Number(TPO)" required>
                        </div>
                    </div>
                    <!-- Send button -->
                    <center>
                        <button name="college-register" id="college-register" class="btn btn-info btn-block w-25"
                            style="font-weight:bold; font-family: Verdana" type="submit">Register</button>
                    </center>
                </form>

            </div>

        </div>
    </section>
   <?php include './include/footer1.inc.php'?> 
   

   