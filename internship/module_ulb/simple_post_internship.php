<?php 
include './include/auth.php';
include './include/header.inc.php';
include './include/msg.inc.php'
?>

<link rel="stylesheet" href="css/bootstrap-multiselect/bootstrap-multiselect.css" type="text/css">
<script src="./ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../assets/js/validate.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding:0px;">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-10">


                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="mt-2 mb-2">
        </div>
        <!-- Default box -->
        <div class="card-body" style="text-align: left;">
            <!-- /.card-header -->
            <!-- form start -->

            <form action="./src/php/main.php" method="POST" id="form">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <?php
                                $internshipId = "INTERNSHIPGOV_".time().uniqid();
                                ?>
                                <label for="exampleInputEmail1" style="float:left">Advertisement Id<b style="color:red">*</b> </label>
                                <input type="text" class="form-control border border-dark" onchange="validatestringsandnumber(this)" name="adid" id="adid" value="<?php echo $internshipId ?>"placeholder="Advertisement Id" readonly>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="float:left">Internship Type<b style="color:red">*</b></label>
                                <select class="form-control border border-dark" name="internship__type" id="internship__type">
                                    <option value="Part Time">Part Time</option>
                                    <option value="Full Time" selected>Full Time</option>
                                    <option value="Virtual Internship">Virtual</option>

                                </select>
                            </div>
                        </div>
                        <div class="col" id="">
                            <div class="form-group">
                            <label for="exampleInputPassword1" style="float:left">Internship Title<b style="color:red">*</b></label>
                                <?php include '../search_title.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputPassword1" style="float:left">Internship
                                    Description(80 to 200 words)<b style="color:red">*</b></label>
                                <textarea name="description" id="description" onchange="countWords(this.value);validatestrings(this)"maxlength = "400" minlength="100" cols="15" rows="2"
                                    class="form-control border border-dark" required></textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="float:left">No.of Interns Required<b style="color:red">*</b></label>
                                <input type="number" class="form-control border border-dark"onchange="validatenumber(this)" name="role" id="role"
                                    placeholder="Interns Required" min=0 required>
                            </div>
                        </div>
                        <div class="col" style="float:left">
                            <div class="form-group">
                                <label for="exampleInputPassword1" style="float:left">Amount of Stipend per month</label>
                                <input name="stiphen" id="desciption"onchange="validatenumber(this)" cols="15" rows="2" class="form-control border border-dark">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <label style="float:left">Department<b style="color:red">*</b></label>
                            <div class="form-group">
                                <select id="department" name="department[]" multiple class="form-controlborder border-dark"
                                    id="multi-select-demo" required>
                                    <?php
                                    $id = $_SESSION['id'];
                                    echo $id;
                                    $sql = "SELECT department_name FROM department WHERE added_by='$id'";
                                    $res = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_assoc($res)){
                                    echo'<option value='.$row['department_name'].'>'.$row['department_name'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <label for="qualification" style="float:left">Qualification<b style="color:red">*</b></label>
                            <div class="form-group">
                                <select id="qualification" name="qualification[]" multiple class="form-control border border-dark"
                                    data-placeholder="Select Qualification" required>
                                    <?php
                                    $id = $_SESSION['id'];
                                    $sql = "SELECT Distinct course_name FROM course where company_id = '$id ' ";
                                    $res = mysqli_query($conn,$sql);
                                    while($row = mysqli_fetch_assoc($res)){
                                    echo'<option value='.$row['course_name'].'>'.$row['course_name'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col" style="float:left">
                            <label style="float:left">Specialisation<b style="color:red">*</b></label>
                            <div class="form-group" style="float:left">
                                <select id="specialisation" name="specialisation[]" multiple class="form-control border border-dark"
                                    data-placeholder="Select a specialisation" required>
                                    <option value="NA">Not Available</option>
                                    <?php
                                   $id = $_SESSION['id'];
                                   $sql = "SELECT Distinct course_stream FROM course WHERE company_id ='$id' ";
                                   $res = mysqli_query($conn,$sql);
                                   while($row = mysqli_fetch_assoc($res)){
                                   echo'<option value='.$row['course_stream'].'>'.$row['course_stream'].'</option>';
                                   }
                                   ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="float:left">Duration<b style="color:red">*</b></label>
                                <input type="text" onchange="validatestringsandnumber(this)"class="form-control border border-dark" id="duration" name="duration"
                                    placeholder="Duration" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="float:left">Mobile Number<b style="color:red">*</b></label>
                                <input type="text"onchange="phonenumber(this)" class="form-control border border-dark" id="phone" name="phone" placeholder="Mobile Number" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label for="exampleInputEmail1" style="float:left">Std Code<b style="color:red">*</b></label>
                                <input type="text" class="form-control border border-dark w-55" id="std" name="std" placeholder="Std Code" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="float:left">Land Line Number<b style="color:red">*</b></label>
                                <input type="text" class="form-control border border-dark" id="land" name="land" placeholder="Phone No." required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="float:left">Email<b style="color:red">*</b></label>
                                <input type="email" class="form-control border border-dark" id="email" name="email"
                                    placeholder="Email@example.com" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col" style="float:left">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Perks<b style="color:red">*</b></label>
                                <textarea class="form-control border border-dark" name="eligibility" id="eligibility" cols="30" rows="3">1.	Open only to Indian students 
                                        2.	Not more than 14 months should have passed from the date of graduation to the date from which the internship is sought
                                        3.	The qualifications may be relaxed in special category cases with prior permission of Urban Local Body.

                                </textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Terms Of Engagement<b style="color:red">*</b></label>
                                <textarea class="form-control border border-dark" name="terms_of_enagement" id="terms_of_enagement"
                                    cols="30" rows="3">Terms of Engagement	The intern will be required to submit a digital undertaking specified under Annexure A to the Urban Local Body certifying his credentials, professional conduct and character before the commencement of the internship.
                                    The interns will be tasked with projects under the indicative Roles defined under Annexure B at the discretion of the Urban Local Body.
                                    The intern will be eligible for an internship certificate only upon completion of the internship period and internship projects, which may be relaxed as per the discretion of the Urban Local Body under special circumstances.
                                    The interns shall be required to maintain confidentiality of all the documents/reports or any information received by him/her during his/her internship period. The interns shall not reveal to any person or organisation any information relating to the Urban Local Body, its work and policies. The interns may also be required to sign a confidentiality agreement as per Annexure C prior to the commencement of the internship.
                                    Notice period of 4 weeks will have to be given prior to leaving the internship. 
                                    It is neither a job nor assurance for a job in the Urban Local Body.
                                            </textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label for="exampleInputEmail1" style="float:left">Last Date to Apply<b style="color:red">*</b></label>
                                <input type="date" class="form-control border border-dark w-55" id="last_date" name="last_date" placeholder="Last Date" required>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <center>
                            <!--  <button type="button" id="advance" name="advance" onclick="myFunction()"
                                class="btn btn-success">Advance</button> -->
                            <button type="submit" id="internship_post" name="internship_post"
                                class="btn btn-primary">Submit</button>
                            <button type="button" onclick="reset()" class="btn btn-primary">Reset</button>
                        </center>
                    </div>
            </form>
        </div>
</div>
</div>
<!-- /.card -->
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- script for selecting multiple checkboxes in dropdown -->
<script>
function myFunction() {
    var className = $("#new").attr("class");

    if (className == "row invisible") {
        $("#new").removeClass("row invisible").addClass("row");
        $("#advance").html('Basic');
    } else {
        $("#new").removeClass("row").addClass("row invisible");
        $("#advance").html('Advance');
    }

}

function reset() {
    document.getElementById("simpleform").reset();
}
</script>
<script>
$(document).ready(function() {
    $('#reserve').multiselect({
        nonSelectedText: 'Select Reservation',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '300px'
    });
});

$(document).ready(function() {
    $('#qualification').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '300px'
    });
});

$(document).ready(function() {
    $('#department').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '300px'
    });
});

$(document).ready(function() {
    $('#specialisation').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '300px'
    });
});
</script>
<script>
$("#title").change(function() {
    if ($(this).val() == "other") {
        $('#otherFieldGroupDiv').show();
    } else
        $('#otherFieldGroupDiv').hide();
});
$("#seeAnotherFieldGroup").trigger("change");
</script>
<script>
$(document).ready(function() {
$('#form').change(function() {
    var adid = $('#adid').value;
    var description = $('#description').value;
    var role = $('#role').value;
    var lastdate = $('#lastdate').value;
    var terms_of_enagement = $('#terms_of_enagement').value;
    var eligibility = $('#eligibility').value;
    var email = $('#email').value;
    var adid = $('#adid').value;
    var adid = $('#adid').value;

}); 
});
</script>
<!-- <script>
function WordCount(str) {
  var totalSoFar = 0;
  for (var i = 0; i < WordCount.length; i++)
    if (str(i) == " ") { // if a space is found in str
      totalSoFar = +1; // add 1 to total so far
  }
  alert("Hi")
  totalsoFar += 1;
  if(totalSoFar < 80)
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
                             title: "Oops!",
                             text: "Please Write 80 Words !",
                             icon: "warning",
                             button: "Okay",
                    });

  }
  if(totalSoFar >200)
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
                             title: "Oops!",
                             text: "Exceeded Word Limit",
                             icon: "warning",
                             button: "Okay",
                    });

  }
}
</script> -->
<script>
   function countWords(str) {
   str = str.replace(/(^\s*)|(\s*$)/gi,"");
   str = str.replace(/[ ]{2,}/gi," ");
   str = str.replace(/\n /,"\n");
   total =  str.split(' ').length;
   if(total<80){
    $(this).prop('invalid', true);
   }
   }
</script>
<script>
$(function () {
   $('#last_date').datetimepicker({
      minDate : moment()
   });
});
</script>