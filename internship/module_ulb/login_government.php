<?php include './include/header_login.php';
    include './include/msg.inc.php';
?>
    <section class="mt-2">
    <?php
    if($_GET['id']==1)
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
                            <label class=" float-left" for="email">Email<b style="color:red;">*</b></label>
                            <input type="email" name="email" id="email" onchange="validateemail(this)"class="form-control mb-4" placeholder="E-mail">
                            <label class=" float-left" for="password">Password<b style="color:red;">*</b></label>
                            <input type="password" name="password" id="password" class="form-control mb-4"
                                placeholder="Password">
                            <!-- Send button -->
                            <center>
                                <input type="submit" name="login_government" id="login_government" value="login"
                                    class="btn btn-primary btn-block w-25" style="font-weight:bold">
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</center>
<?php 
}
if($_GET['id']==2){
?>
<center>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="student_form" class="w-50">
                        <form method="post" class="text-center border border-light p-5" action="./src/php/main.php">
                            <!-- Email -->
                            <label class=" float-left" for="email">Email<b style="color:red;">*</b></label>
                            <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail">
                            <label class=" float-left" for="password">Password<b style="color:red;">*</b></label>
                            <input type="password" name="password" id="password" class="form-control mb-4"
                                placeholder="Password">
                            <!-- Send button -->
                            <center>
                                <input type="submit" name="login_department" id="login_department" value="login" class="btn btn-info btn-block w-25" style="font-weight:bold" >
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</center>



<?php 
}
?>
    </section>
    <?php include './include/footer1.inc.php'?>
   