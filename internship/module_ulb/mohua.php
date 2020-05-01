<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINISTRY</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body  {

  background-image:url("./mohua_dashboard/images/banner.jpg");
  background-size: 1410px;
}
</style>

<body>
        <div class="container" style="margin-left:30px; margin-top:360px">
            <div class="row">
                <div class="col">
                    <div id="student_form" class="w-50">
                        <form method="post" class="text-center p-5" action="./src/php/main.php">
                            <!-- Email -->
                            <input type="hidden" name="mohua" id="mohua" value="mahua" class="form-control mb-4" placeholder="E-mail">
                            <input type="email" name="email" id="email" class="form-control mb-4" placeholder="E-mail">
                            <input type="password" name="password" id="password" class="form-control mb-4"
                                placeholder="Password">
                            <!-- Send button -->
                            <center>
                                <input type="submit" name="login_mohua" id="login_mohua" value="login"
                                    class="btn btn-info btn-block w-25" style="font-weight:bold" type="button">
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>