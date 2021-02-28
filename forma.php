<?php
    if(isset($_POST['button'])) {
        $rez = $_POST['ats'];
        if(empty($_POST['ats'])) {
            header ('Location: http://localhost/php_proj/getPost/forma.php');
            die;
        }else if(count($_POST['ats']) > 1) {
            echo '<p style="color:red">Atsakymas gali buti tik vienas</p>';
            echo '<a href="http://localhost/php_proj/getPost/forma.php">Bandyk dar karta</a>';
            die;
        } else if(in_array('Yes', $_POST['ats'])) {
            echo '<p style="color:lime">Jūsų atsakymas yra teisingas</p>';
            die;
        } else {
            echo '<p style="color:red">Jūsų atsakymas neteisingas - <a href="http://localhost/php_proj/getPost/forma.php">Bandyk dar karta</a></p>';
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
    <title>Forma</title>
    <link rel="stylesheet" href="main.css">
</head>
<body class='bg'>
    <h1>Apklausa</h1>
    <div class="pic">
    <img src="Java_logo.png" alt="logo">
 </div>
 <div class="forma">
    <h3>Kada atsirado JAVA?</h3>
<form action="" method="post">
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats[]">
  <span class="checkmark"></span>
  1952 metais
</label> <br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats[]" value="Yes">
  <span class="checkmark"></span>
  Kas ta JAVA?
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats[]">
  <span class="checkmark"></span>
  1970 metais
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats[]">
  <span class="checkmark"></span>
  Kai puodukas tavo sikpuodziu
</label><br>
</form>
</div>
    <div class="pic2">
    <img src="prog3.jpg" alt="logo">
 </div>
 <div class="forma2">
    <h3>Kas tai per veikejas?</h3>
<form action="" method="post">
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats2[]">
  <span class="checkmark"></span>
  As po 10 metu
</label> <br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats2[]" value="Yes">
  <span class="checkmark"></span>
  As po kursu pabaigos
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats2[]">
  <span class="checkmark"></span>
  Nesamone kazkokia
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats2[]">
  <span class="checkmark"></span>
  Moksliukas
</label>
</form>
</div>
<div class="pic3">
    <img src="puodelis.jpg" alt="logo">
 </div>
 <div class="forma3">
    <h3>Is kur kilo sitas puodelis?</h3>
<form action="" method="post">
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats3[]">
  <span class="checkmark"></span>
  Is fabriko
</label> <br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats3[]">
  <span class="checkmark"></span>
  Termoso palikuonis
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats3[]">
  <span class="checkmark"></span>
  Is sikpuodzio
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats3[]" value="Yes">
  <span class="checkmark"></span>
  Is objekto
</label><br>
<button class="btn" type="submit" name="button">Taigis</button>
</form>
</div>
</body>
</html>
