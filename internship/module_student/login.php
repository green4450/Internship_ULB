<?php
include './include/header_login.php';
include './include/msg.inc.php';
if(isset($_GET['uid']))
{
?>
<center>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row"> 
            <div class="col">
                <div id="student_form" class="w-50">
                    <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                        <!-- Email -->
                        <label class="float-left" for="email" style="float:left">Email<b style="color:red;">*</b></label>
                            <input type="email" name="email" id="email" onchange="validateemail(this)" class="form-control mb-4" placeholder="E-mail">
                            <label class="float-left" for="password" style="float:left">Password<b style="color:red;">*</b></label>
                            <input type="password" name="password" id="password" class="form-control mb-4"
                                placeholder="Password">
                        <center>
                            <input type="hidden" name="internship_uid" id="internship_uid" value="<?php echo $_GET['uid']?>">
                            <input type="hidden" name="company_id" id="company_id" value="<?php echo $_GET['company_id']?>">
                            
                            <input type="submit" name="login" id="login" value="Login"
                                class="btn btn-primary btn-block w-25" style="font-weight:bold;">
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</center>
<?php } 
else 
{?>
<center>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row"> 
            <div class="col">
                <div id="student_form" class="w-50">
                    <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                        <!-- Email -->
                        <label class="float-left" for="email" style="float:left">Email<b style="color:red;">*</b></label>
                            <input type="email" name="email" id="email" onchange="validateemail(this)" class="form-control mb-4" placeholder="E-mail">
                            <label class="float-left" for="password" style="float:left">Password<b style="color:red;">*</b></label>
                            <input type="password" name="password" id="password" class="form-control mb-4"
                                placeholder="Password">
                        <center>
                            <input type="submit" name="login" id="login" value="Login"
                                class="btn btn-primary btn-block w-25" style="font-weight:bold;">
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</center>
<?php } ?>
<?php include './include/footer1.inc.php'?>