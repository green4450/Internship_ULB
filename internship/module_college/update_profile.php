<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<?php 
include './include/auth.php';
include './include/header.inc.php';
?>
<div class="content-wrapper">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-2 ">
                <div class="list-group ">
                    <a href="#" class="list-group-item list-group-item-action">General Info</a>



                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                                <center>
                                    <h4>Institute Profile</h4>
                                </center>
                                <hr>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group row">
                                        <label for="username" class="col-4 col-form-label">About</label>
                                        <div class="col-8">
                                            <textarea id="username" name="username" placeholder="Description"
                                                class="form-control here" required="required" type="text"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Address1</label>
                                        <div class="col-8">
                                            <input id="address1" name="address1" placeholder="First Name"
                                                class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Address2</label>
                                        <div class="col-8">
                                            <input id="address2" name="address2" placeholder="First Name"
                                                class="form-control here" type="text">
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label">Website</label>
                                        <div class="col-8">
                                            <input id="lastname" name="lastname" placeholder="Last Name"
                                                class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-4 col-form-label">Total Teachers</label>
                                        <div class="col-8">
                                            <input id="teachers" name="teachers" placeholder="Nick Name"
                                                class="form-control here" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="select" class="col-4 col-form-label">Type of College</label>
                                        <div class="col-8">
                                            <select id="select" name="select" class="custom-select">
                                                <option value="Deemed">Deemed</option>
                                                <option value="State">State</option>
                                                <option value="Central">Central</option>
                                                <option value="Private">Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="students" class="col-4 col-form-label">Total Students</label>
                                        <div class="col-8">
                                            <input id="students" name="students" placeholder="Email" class="form-control here"
                                                required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="founded" class="col-4 col-form-label">Founded In</label>
                                        <div class="col-8">
                                            <input id="founded" name="founded" placeholder="Founded In"
                                                class="form-control here" type="text">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label for="naac" class="col-4 col-form-label">NAAC Grading</label>
                                        <div class="col-8">
                                            <input id="naac" name="newpass" placeholder="Naac Grade"
                                                class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nba" class="col-4 col-form-label">NBA Grading</label>
                                        <div class="col-8">
                                            <input id="nba" name="nba" placeholder="Naac Grade"
                                                class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="naac" class="col-4 col-form-label">Affiliated To</label>
                                        <div class="col-8">
                                            <input id="naac" name="newpass" placeholder="Naac Grade"
                                                class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="naac" class="col-4 col-form-label">Type of College Under Your University</label>
                                        <div class="col-8">
                                            <input id="naac" name="newpass" placeholder="Naac Grade"
                                                class="form-control here" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Update My
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>