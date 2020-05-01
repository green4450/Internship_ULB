<!DOCTYPE html>
<html lang="en">
<script
			  src="https://code.jquery.com/jquery-3.5.0.js"
			  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
			  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../assets/js/validate.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./src/php/test1.php"method="POST" enctype="multipart/form-data">
        <input type="text" name="certificate1"  onchange="validateemail(this.value)" id="certificate1">
        <input type="text" name="certificate2" id="certificate2">
        <input type="submit" name ="submit1" id="submit1" disabled>
    </form>
</body>
</html>