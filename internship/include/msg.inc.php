
<?php
if (isset($_GET['task'])) {
    $task = $_GET['task'];
  
    if ($_GET['task'] == "successfull") {
 echo'       <script>
        swal({
            title: "Good job!",
            text: "You Have SuccessFully Logged In!",
            icon: "success",
            button: "OKAY",
          });
        </script>';
    }
    if ($_GET['task'] == "duplicatevalue") {
      echo'       <script>
             swal({
                 title: "OOPS!",
                 text: "You Have SuccessFully Logged In!",
                 icon: "warning",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "disabled") {
      echo'       <script>
             swal({
                 title: "Good job!",
                 text: "You Have SuccessFully Logged In!",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "deleted") {
      echo'       <script>
             swal({
                 title: "Good job!",
                 text: "You Have Deleted Successfully!",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "RegisteredSuccessfully") {
      echo'       <script>
             swal({
                 title: "Good job!",
                 text: "You Have Registered SuccessFully!",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
    }
    if ($_GET['task'] == "DuplicateValue") {
      echo'       <script>
             swal({
                 title: "OOPS!",
                 text: "There is Duplicate Value!",
                 icon: "warning",
                 button: "OKAY",
               });
             </script>';
    } 
    if ($_GET['task'] == "deletedinternship") {
      echo'       <script>
             swal({
                 title: "Good job!",
                 text: "You Have Deleted Internship!",
                 icon: "success",
                 button: "OKAY",
               });
             </script>';
         }
         if ($_GET['task'] == "called") {
          echo'       <script>
                 swal({
                     title: "Good job!",
                     text: "The Student Has Been Called For Interview!",
                     icon: "success",
                     button: "OKAY",
                   });
                 </script>';
             }
             if ($_GET['task'] == "invalidfiletype") {
              echo'       <script>
                     swal({
                         title: "OOPs!",
                         text: "The File Type Is Invalid(Only jpeg,jpg,png) Files  are allowed!",
                         icon: "warning",
                         button: "Okay",
                       });
                     </script>';
                 }
                 if ($_GET['task'] == "PlseEnterUsernameorPassword") {
                  echo'       <script>
                         swal({
                             title: "OOPs!",
                             text: "Please Enter The Username and Password!",
                             icon: "warning",
                             button: "Okay",
                           });
                         </script>';
                     }
                     if ($_GET['task'] == "UserNotExist") {
                      echo'       <script>
                             swal({
                                 title: "OOPs!",
                                 text: "The User Does Not Exist!",
                                 icon: "error",
                                 button: "Okay",
                               });
                             </script>';
                         }      
                         if ($_GET['task'] == "WrongPassword") {
                          echo'       <script>
                                 swal({
                                     title: "OOPs!",
                                     text: "Wrong Password!",
                                     icon: "warning",
                                     button: "Okay",
                                   });
                                 </script>';
                             }   
}