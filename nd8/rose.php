
<?php /*
if(isset($_GET['nesuprantu'])){
    _d($_GET['nesuprantu']);
} elseif(isset($_GET)){
    header('location:http://localhost/php_proj/getPost/nd8/pink.php');
}*/
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    header('Location:http://localhost/php_proj/getPost/nd8/pink.php');
    die;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw8</title>
</head>
<body style='background:#E8ADAA; text-align:center;'>
    <form action="" method="get">
    Name:<input type="text" name="name"> 
    <br>
    Email:<input type="email" name="email" id="">
    <br>
    <button type="submit" name="get">Lets go!</button>
    </form>
    <br>
</body>
</html>