<?php include './include/header_login.php';
include './include/msg.inc.php';
?>
    <!-- END nav -->
    <style>
    input:invalid {
    border-color: red;
}
input,
input:valid {
    border-color: #ccc;
}
    </style>
    <section class="mt-2">

    <section class="ftco-section bg-light">
        <div class="container">
            <div id="coporate_form">
                <form name="myForm" id="myForm" method="post" class="text-center border border-light" action="./src/php/main.php" enctype="multipart/form-data" >
                    <!-- Name -->
                    <div class="row">
                        <div class="col">
                        <label for="authority"style="float:left">Type Of Body <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <select name="authority" id="authority" class="form-control" required>
                                    <option value="Urban Body">Urban Body</option>
                                    <option value="Local Body">Smart Cities</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                        <label for="organization"style="float:left">Organization <b style="color:red">  * </b> </label>
                            <div class="form-group">
                                <input type="text" name="organization" id="organization" onchange="validatestrings(this)"class="form-control"
                                    placeholder="Organisation" pattern="[a-zA-Z ]*$" title="Only Alphabets are Allowed" required>
                            </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col">
                        <label for="fname"style="float:left">First Name(Department Official) <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="fname" id="fname" class="form-control"
                                    placeholder="First Name"onchange="validatestrings(this)"pattern="[A-Z a-z]*$"  title="Only Alphabets are Allowed"required>
                            </div>
                        </div>
                        <div class="col">
                        <label for="lname"style="float:left">Last Name(Department Official)<b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="lname" onchange="validatestrings(this)" pattern="[A-Za-z]*$" id="lname" class="form-control" placeholder="Last Name"  title="Only Alphabets are Allowed"required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <label for="email"style="float:left">Email <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Only Urban Body Official Email Id"onchange="validatespecialemail(this.value)"  title="Only Alphabets are Allowed" required>
                            </div>
                        </div>
                        <div class="col">
                        <label for="email"style="float:left">Password <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password" pattern="(?=(.*[0-9]))(?=.*[\!@#$%^&*()\\[\]{}\-_+=~`|:;'<>,./?])(?=.*[a-z])(?=(.*[A-Z]))(?=(.*)).{8,}"  title="Only Alphabets are Allowed" required>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="row">
                        <div class="col">
                        <label for="email" style="float:left">Contact Number<b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="contactnum" id="contactnum" class="form-control mb-4"
                                    placeholder="Contact Number"onchange="phonenumber(this)"pattern="[6-9]{1}[0-9]{9}"  title="Mobile Number" required>

                            </div>
                        </div>

                        <div class="col">
                        <label for="email" style="float:left">GST Number <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="GST Number" id="GST Number" class="form-control mb-4"
                                    placeholder="GST Number"  title="18AABCT3518Q1ZV"required>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="state" style="float:left">State<b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="state" id="state"onchange="validatestrings(this)" class="form-control mb-4"
                                    placeholder="State" required>

                            </div>
                        </div>

                        <div class="col">
                        <label for="city" style="float:left">City<b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="city" id="city" class="form-control mb-4"
                                    placeholder="City"required>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="email" style="float:left">Your appointment Certificate(only PDF) <b style="color:red">*</b> </label>       <b></b>
                            <div class="form-group">
                                <input type="file" name="certificate" id="certificate" class="form-control mb-4"
                                accept="application/pdf" placeholder="Certificate">
                            </div>
                        </div>
                        <div class="col">
                        <label for="email" style="float:left">Upload Your Logo(JPEG,JPG,PNG and size< 3MB)<b style="color:red">*</b> </label>       <b></b>
                            <div class="form-group">
                                <input type="file" name="loggoo" id="logo_new" class="form-control mb-4"
                             placeholder="Certificate">
                            </div>
                        </div>
                    </div>


                    <!-- Send button -->
                    <center>
                        <button name="ubl_register" id="ubl_register" class="btn btn-primary btn-block w-25"
                            style="font-weight:bold; font-family: Verdana" type="submit">Register</button>
                    </center>
                </form>

            </div>

        </div>
    </section>
   
    </section>

    <?php include './include/footer1.inc.php'?>
<script>

    
</script>