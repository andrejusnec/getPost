<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw5</title>
</head>
<?php
if(isset($_GET['nuoroda'])) {
    header('location:http://localhost/php_proj/getPost/nd5/red.php');
    die;
}
?>
<body style='background:blue;text-align:center;'>
    <!-- <a href="red.php" style='color:red; text-decoration:none;'>Red</a> -->
    <a href="?nuoroda=1" style='color:red; text-decoration:none;font-size:50px'>Up for some RED action?</a> 
</body>
</html>