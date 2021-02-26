
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw2</title>
</head>
<body
<?php
if(isset($_GET['color'])) {
    echo "style='background:#".$_GET['color'].";'";
}
?>>
<form action="" method="get">
    <input type="text" name='color'>
    <button type="submit">Enter</button>
    </form>
    <a href="?color=000000" style='color:red;'>Home</a>
    <a href="?color=434343" style='color:blue;'>Home2</a>
</body>
</html>