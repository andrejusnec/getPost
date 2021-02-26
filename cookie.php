<?php
_d(rawurlencode('sweet and sour'));
    $domenas = setcookie('My_first_cookie', 'sweet and sour');
    setcookie('Second_cookie', 'not so sweet', time() + 60); // istrinti cookie galima setinant laika i praeiti
    setcookie('Third_cookie', 'not so sweet', time() + 600, 'fgvxfvx');
    _d($_COOKIE);
    //session_start();  //startuojam sesija ir galim naudoti $_SESSION
    /*
    setcookie('Rez', '$count');
    if(isset($_COOKIE['Rez'])) {
    $rez = $_COOKIE['Rez'];
    setcookie('Rez', '', time()-555);


    $_SESSION['Rez'] = $count;
    if(isset($_SESSION['Rez'])) {
    $rez = $_SESSION['Rez'];
    unset($_SESSION['Rez']);
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>