<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw6</title>
</head>
<body
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "style='background-color:yellow';";
    }
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "style='background-color:green';";
    }
    ?>>
    <form action="" method="get">
    <button type="submit" name="get" style="text-align:center; width:100px; background:red">Go Green?</button>
    </form>
    <br><br>
    <form action="" method="post">
    <button type="submit" name="post" style="text-align:center; width:100px; background:red">Go Yellow?</button>
    </form>
</body>
</html>