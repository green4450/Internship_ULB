<?php include './include/header_login.php';
    include './include/msg.inc.php';
?>
    
    <section class="ftco-section bg-light">
        <div style="margin-left: 10%;" class="container">
            <div id="coporate_form" class="">

                <form method="post" class="text-center border border-light p-5" action="./src/php/main.php"
                    id="form_corporate">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="meetingPlace">Type of Employer: </label>
                                <select class="form-control" id="type">
                                    <option value="Corporate" selected>Corporate</option>
                                    <option value="District Megistrate">District Megistrate</option>
                                    <option value="NASCOM">NASCOM</option>
                                    <option value="AGGREGATOR">AGGREGATOR</option>
                                    <option value="SECTOR SKILL COUNCIL">SECTOR SKILL COUNCIL</option>
                                    <option value="ASSOCHAM">ASSOCHAM</option>
                                    <option value="PUBLIC SECTOR UNIT">PUBLIC SECTOR UNIT</option>
                                    <option value="GOVERNMENT DEPARTMENT">GOVERNMENT DEPARTMENT</option>
                                    <option value="NON GOVERNMENTAL ORGANISATION">NON GOVERNMENTAL ORGANISATION</option>
                                    <option value="CII">CII</option>
                                    <option value="FICCI">FICCI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="organization">Organization <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="organization" id="organization" onchange="validatestrings(this)"class="form-control"
                                    placeholder="Organisation" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="fname">First Name <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="fname" id="fname"onchange="validatestrings(this)" class="form-control mb-4"
                                    placeholder="First Name"required>
                            </div>
                        </div>
                        <div class="col">
                        <label for="lname">Last Name <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="lname" id="lname"onchange="validatestrings(this)" class="form-control mb-4"
                                    placeholder="Last Name"required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="email">Email <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="email" name="email" id="email"onchange="validateemail(this)" class="form-control mb-4"
                                    placeholder="E-mail"required>
                            </div>
                        </div>
                        <div class="col">
                        <label for="email">Password <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control mb-4"
                                    placeholder="Password"required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <label for="email">Company Unique <b style="color:red">*</b> </label>
                            <div class="form-group"required>
                                <select name="corporatelist" id="corporatelist"
                                    class="browser-default custom-select mb-4">
                                    <option value="" selected>Select</option>
                                    <option value="TIN" selected>TIN</option>
                                    <option value="GST">GST</option>
                                    <option value="ROC">ROC</option>
                                    <option value="CIN">CIN</option>
                                    <option value="Association Registration">Association Registration</option>

                                </select>
                            </div>
                        </div>
                        <div class="col">
                        <label for="email">Id Number <b style="color:red">*</b> </label>
                            <div class="form-group">
                                <input type="text" name="idnum" id="idnum" class="form-control mb-4"
                                    placeholder="ID Number"required>
                            </div>
                        </div>
                    </div>
                    <label for="email">Contact Number <b style="color:red">*</b> </label>
                    <input type="number" name="contactnum" id="contactnum"onchange="phonenumber(this)" class="form-control mb-4"
                        placeholder="Contact Number"required>

                    <!-- Send button -->
                    <center>
                    <button name="corporate-register" id="corporate-register" class="btn btn-primary btn-block w-25"
                        type="submit">Register</button>
</center>
                </form>


                <form method="post" class="text-center border border-light p-5" action="./src/php/main.php" id="dm"
                    style="display:none">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="meetingPlace">Type of Employer: </label>
                                <select class="form-control" id="type">
                                    <option value="Corporate" selected>Corporate</option>
                                    <option value="District Megistrate">District Megistrate</option>
                                    <option value="NASCOM">NASCOM</option>
                                    <option value="AGGREGATOR">AGGREGATOR</option>
                                    <option value="SECTOR SKILL COUNCIL">SECTOR SKILL COUNCIL</option>
                                    <option value="ASSOCHAM">ASSOCHAM</option>
                                    <option value="PUBLIC SECTOR UNIT">PUBLIC SECTOR UNIT</option>
                                    <option value="GOVERNMENT DEPARTMENT">GOVERNMENT DEPARTMENT</option>
                                    <option value="NON GOVERNMENTAL ORGANISATION">NON GOVERNMENTAL ORGANISATION</option>
                                    <option value="CII">CII</option>
                                    <option value="FICCI">FICCI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="fname" id="fname"onchange="validatestrings(this)" class="form-control mb-4"
                                    placeholder="First Name"required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="lname" id="lname"onchange="validatestrings(this)" class="form-control mb-4"
                                    placeholder="Last Name"required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="email" name="email" id="email"onchange="validateemail(this)" class="form-control mb-4"
                                    placeholder="E-mail"required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control mb-4"
                                    placeholder="Password"required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="state" id="state"onchange="validatestrings(this)" class="form-control mb-4"
                                    placeholder="State"required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" name="district" id="district"onchange="validatestrings(this)" class="form-control mb-4"
                                    placeholder="District"required>
                            </div>
                        </div>
                    </div>
                    <!-- Name -->
                    <input type="number" name="contactnum" id="contactnum"onchange="phonenumber(this)" class="form-control mb-4"
                        placeholder="Contact Number"required>

                    <button name="dm-register" id="dm-register" class="btn btn-info btn-block" type="Submit">
                        Register <i class="ml-2 fas fa-sign-out-alt"></i></button>
                </form>
            </div>
        </div>
    </section>
    <?php include './include/footer1.inc.php'?>