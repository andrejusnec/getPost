<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hw1</title>
</head>
<body 
<?php
if(isset($_GET['color']) && $_GET['color'] == 1) {
    echo "style='background:red';";
} else {
    echo "style='background: black';";
}
?>>
<a href="?">Black</a>
<a href="?color=1">Red</a>
</body>
</html>