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
    //header('location:http://localhost/php_proj/getPost/nd5/blue.php');
    //die;
}
if(isset($_GET['test']) && $_GET['test'] == 20) {
    echo 'BINGO';
}
$bro = 1001;
?>
<body style='background:red; text-align:center;'>
<!-- <a href="red.php" style='color:red; text-decoration:none;'>Blue</a> -->
<a href="?nuoroda=1" style='color:blue; text-decoration:none; font-size:50px'>I'm blue, Da ba dee da ba di</a> 

<!--
    <form action="" method="get">
<button type="submit" name='test' value='20'>TEST</button> GERAS VARIANTAS
</form>
-->
</body>
</html>