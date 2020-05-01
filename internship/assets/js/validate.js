function phonenumber(inputtxt)
{
  if(inputtxt.value!=null){
  var phoneno = /^\d{10}$/;
  if(!inputtxt.value.match(phoneno))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Phone Number Not valid!",
      icon: "warning",
      button: "OKAY",
    });
  }
  else{
    $(':input[type="submit"]').prop('disabled',false);
  }
}
else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
}
}
function validatestrings(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[a-zA-Z ]*$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Only Alpahabets Are Allowed!",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
  }
  else{
    $(':input[type="submit"]').prop('disabled',false);
  }
}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
}
}
function validatenumber(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[0-9]*$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Only Numbers Are Allowed!",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
  }
  else{
    $(':input[type="submit"]').prop('disabled',false);
  }
}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}

function validatestringsandnumber(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[a-zA-Z0-9 ]*$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Only Alpahabets And Numbers Are Allowed!",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
  }
  else{
    $(':input[type="submit"]').prop('disabled',false);
  }
}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}
function validatespecialstrings(inputtxt)
{
  if(inputtxt.value!=null){
  var character = /^[a-zA-Z0-9,. ]*$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Only Alpahabets And Numbers Are Allowed!",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
  }
  else{
    $(':input[type="submit"]').prop('disabled',false);
  }
}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}
function validateemail(inputtxt)
{
  if(inputtxt.value!= null){
  var character = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  if(!inputtxt.value.match(character))
  {
    $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Not a Valid Email!",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
  }
  else{
    $(':input[type="submit"]').prop('disabled',false);
  }
}else
{
  $(':input[type="submit"]').prop('disabled', true);
    swal({
      title: "OOPS!",
      text: "Please Enter the value",
      icon: "warning",
      button: "OKAY",
    });
    inputtxt.focus();
}
}
function validatespecialemail(email) { 
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if(re.test(email)){
      //Email valid. Procees to test if it's from the right domain (Second argument is to check that the string ENDS with this domain, and that it doesn't just contain it)
      if(email.indexOf("@nic.com", email.length - "@nic.com".length) !== -1)
          //VALID
          {
            $(':input[type="submit"]').prop('disabled', true);
              swal({
                title: "OOPS!",
                text: "Valid Email",
                icon: "warning",
                button: "OKAY",
              });
              inputtxt.focus();
          }
      }
  }