<?php
$hide = 'none';
$text = 'bb';
$bandom = 'none';
    if(isset($_POST['button'])) {
        $rez = $_POST['ats'] ?? 0;
        $rez2 = $_POST['ats2'] ?? 0;
        $rez3 = $_POST['ats3'] ?? 0;
        $count = 0;
        if(empty($_POST['ats']) || empty($_POST['ats2']) || empty($_POST['ats3'])) {
            $hide = 'inline-block';
            $text = '<p class="test" style="color:red">Ooops. Kažkur pamiršote pažymėti savo atsakymą!</p>';
            header("refresh:7;url=http://localhost/php_proj/getPost/forma.php");
        }else if(count($_POST['ats']) > 1 || count($rez2) > 1 || count($rez3)> 1) {
            $text = '<p class="test" style="color:red;">Kiekvienas klausymas gali turėti tik po viena atsakymą!</p>';
            $hide = 'inline-block';
            header("refresh:7;url=http://localhost/php_proj/getPost/forma.php");
        } else {
        if(in_array('Yes', $_POST['ats']) && count($rez) == 1) {
            ++$count;
            $text2 = '<p style="color:lime">Jūsų atsakymas yra teisingas</p>';
            $hide2 = 'inline-block';
        }  else {
            $text2 = '<p style="color:red">Jūsų atsakymas neteisingas</p>';
            $hide2 = 'inline-block';
        }
        if(in_array('Yes', $_POST['ats2']) && count($rez2) == 1) {
            ++$count;
            $text3 = '<p style="color:lime">Jūsų atsakymas yra teisingas</p>';
            $hide3 = 'inline-block';
        }else {
            $text3 = '<p style="color:red">Jūsų atsakymas neteisingas</p>';
            $hide3 = 'inline-block';
        }
        if(in_array('Yes', $_POST['ats3']) && count($rez3) == 1) {
            ++$count;
            $text4 = '<p style="color:lime">Jūsų atsakymas yra teisingas</p>';
            $hide4 = 'inline-block';
        }else {
            $text4 = '<p style="color:red">Jūsų atsakymas neteisingas</p>';
            $hide4 = 'inline-block';
        }
        $proc = $count * 33.3;
        if($count == 3) {
            $proc = 100;
        }
        $bandom = 'inline-block';
        $hide = 'inline-block';
        //$text = 'Jus atsakete i '.$count.' klausymus teisingai ir surinkote '.(float)$proc.'%';
        $text = 'Jūs atsakėte teisingai į '.$count.' klausima(-us) iš 3 ir surinkote '.(float)$proc.'%';
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body class='bg'>
    <h1>Apklausa</h1>
    <h3 class="answer" style="display:<?php echo $hide.'">'.$text?><br><a href="http://localhost/php_proj/getPost/forma.php"
     style="display:<?=$bandom?>">Bandom dar?</a></h3>
    
 <div class="forma">
<form action="" method="post"> 
 <div class="pic">
    <img src="Java_logo.png" alt="logo">
 </div>
    <h3>Kada atsirado JAVA?</h3>
    <span style="color:lime; display:<?php echo $hide2.'">'.$text2?></span><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats[]">
  1952 metais
</label> <br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats[]" value="Yes">
  Kas ta JAVA?
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats[]">
  1970 metais
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats[]">
  Kai puodukas tapo sikpuodziu
</label>
<br><br>
    <div class="pic2">
    <img src="prog3.jpg" alt="logo">
 </div>
    <h3>Kas tai per veikejas?</h3>
    <span style="color:lime; display:<?php echo $hide3.'">'.$text3?></span><br>
<form action="" method="post">
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats2[]">
  As po 10 metu
</label> <br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats2[]" value="Yes">
  As po kursu pabaigos
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats2[]">
  Nesamone kazkokia
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats2[]">
  Moksliukas
</label><br><br>
<div class="pic3">
    <img src="puodelis.jpg" alt="logo">
 </div>
    <h3>Is kur kilo sitas puodelis?</h3>
    <span style="color:lime; display:<?php echo $hide4.'">'.$text4?></span><br>
<form action="" method="post">
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats3[]">
  Is fabriko
</label> <br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats3[]">
  Termoso palikuonis
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats3[]">
  Is sikpuodzio
</label><br>
<label class="container">
  <input class="checkbox-round" type="checkbox" name="ats3[]" value="Yes">
  Is objekto
</label><br>
<button class="btn-grad" type="submit" name="button">Taigis</button>
</form>
</div>
</body>
</html>
