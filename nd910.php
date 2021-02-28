<?php
/*
if (isset($_COOKIE['Rez'])) {
    $rez = $_COOKIE['Rez'];
    setcookie('Rez', '', time() - 555);
}*/
_d($_POST);
session_start();
if(isset($_SESSION['Rez'])) {
    $rez = $_SESSION['Rez'];
    unset($_SESSION['Rez']);
}
$color = 'black';
if (isset($_POST['btn'])) {
    _d($_POST['letter']);
    if (empty($_POST['letter'])) {
        echo 'You didn\'t pick a one! Get over yourself and make a choice!';
        $color = 'white';
        die;
    } else {
        $choosenLetters = $_POST['letter'];
        $summ = 0;
        foreach ($choosenLetters as $letter) {
            $summ++;
        }
        $color = 'white';
        echo "You have chose $summ answers from $rez";
        die;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style='background:<?php echo $color ?>; color:white'>
<p>Make your choice mortal</p>
<form action="" method="post">
<?php
$rand = rand(3, 10);
$letters = 'ABCDEFGHIJ';
$count = 0;
echo '<p style="color:white">';
for ($i = 0; $i < $rand; $i++) {
    echo $letters[$i] . '<input type="checkbox" name="letter[]" value="1">';
    $count++;
}
echo '</p>';
//setcookie('Rez', $count);
$_SESSION['Rez'] = $count;

?>
<br>
<input type="hidden" name="count" value = $count>
<input type="submit" name="btn" value="Im feeling lucky!">
</form>

</body>
</html>