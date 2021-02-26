<?php
if(isset($_POST['post'])) {header('location:http://localhost/php_proj/getPost/nd67/green2.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw7</title>
</head>
<body
    <?php
    if(isset($_GET['get'])) {
        echo "style='background-color:green';";
    }
    ?>>
    <form action="" method="get">
    <button type="submit" name="get">Green</button>
    </form>
    <br><br>
    <form action="" method="post">
    <button type="submit" name="post">Yellow</button>
    </form>
</body>
</html>