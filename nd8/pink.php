<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('http://localhost/php_proj/getPost/nd8/rose.php');
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw8</title>
</head>
<body style='background:#FF1493;'>
    <form action="http://localhost/php_proj/getPost/nd8/rose.php" method="post">
    <button type="submit" name="post">Go To Rose</button>
    </form>
</body>
</html>