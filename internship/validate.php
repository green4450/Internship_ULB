<!-- <?php /* include './src/php/dbh.php' */?>
<form action="" method="post">
  <input type="number" id="new" name="new">
  <textarea type="text" id="new1" name="new1"></textarea>
  <input type="submit" id="submit" name="submit">
  </form>
</body>
</html> -->



<?php
/* Function to validate names or strings */
/* $name = mysqli_real_escape_string($conn,$_POST['new']);
$name1 = mysqli_real_escape_string($conn,$_POST['new1']);
echo validateonlynumber($name);
echo validatestringsandnumber($name1); */

function validatestringsandnumber($data) {
  if (!preg_match("/^[a-zA-Z0-9, ]*$/",$data)) {
    $nameErr = "InvalidInput";
    return $nameErr;
  }
  else{ 
  return $data;
  }
  }

  function validateonlynumber($data) {
    if (!preg_match("/^[0-9]*$/",$data)) {
      $nameErr = "InvalidInput";
      return $nameErr;
    }
    else{ 
    return $data;
    }
    }


function validatestrings($data) {
if (!preg_match("/^[a-zA-Z ]*$/",$data)) {
  $nameErr = "InvalidInput";
  return $nameErr;
}
else{ 
return $data;
}
}

function validateemail($data) { 
  if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $data)){ 
  $nameErr = "erroremail";  
  return $data;
    }
    else{
      return $data;
    }
}


function validateurl($data){
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "InvalidURL";
  return $websiteErr;
}
else{
    return $data;
}
    }

   
  function validatephone($data){
        if(!preg_match('/^[6-9]{1}[0-9]{9}+$/', $data)) {
        $phoneerror = "InvalidNumber";
        return $phoneerror;
        }
        else{
        return $data;
            }
  }

?>