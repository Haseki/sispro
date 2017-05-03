<?php 

$code = "0";
$errorPhase = "";
if(!empty($_GET['code'])){
$code = $_GET['code'];
}

if($code == 1){
    $errorPhase = "Kullanıcı adı zaten mevcut";
}else if ($code == 2) {
    $errorPhase = "Şifreler Uyumsuz";
}




?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">


    <title>Randevu Takip Sistemi</title>
</head>
<body>

<div class="row">
    <div class="jumbotron col-md-8 col-md-offset-2">
        <h2 class="text-center">Randevu Takip Sistemi (v 0.1)</h2>
        <form class="form-signin col-md-8 col-md-offset-2" action="registerLogic.php" method="POST">
            
            
            <!-- Kullancı Ana Bilgiler -->
            <h3 class="form-signin-heading">Kullanıcı Profil Bilgileri</h3>
            <label for="usernameIN" class="sr-only">Kullancı Adı</label>
            <input type="input" id="usernameIN" name="usernameIN" class="form-control" placeholder="Kullanıcı Adı" required="" autofocus=""><br>
            <label for="pass1IN" class="sr-only">Parola</label>
            <input type="password" id="pass1IN" name = "pass1IN" class="form-control" placeholder="Parola" required=""><br>
            <label for="pass2IN" class="sr-only">Parola Tekrar</label>
            <input type="password" id="pass2IN" name = "pass2IN" class="form-control" placeholder="Parola Tekrar" required=""><br>
     
            <!-- Kullancı Ana Bilgiler -->
            <h3 class="form-signin-heading">Kullanıcı İletişim Bilgileri</h3>
            <label for="nameIN" class="sr-only">Ad</label>
            <input type="input" id="nameIN" name = "nameIN" class="form-control" placeholder="Ad" required="" autofocus=""><br>
            <label for="surnameIN" class="sr-only">Soyad</label>
            <input type="input" id="surnameIN" name = "surnameIN" class="form-control" placeholder="Soyad" required="" autofocus=""><br>
            <label for="emailIN" class="sr-only">E-Posta</label>
            <input type="email" id="emailIN" name = "emailIN" class="form-control" placeholder="E-Posta" required="" autofocus=""><br>
            <label for="phoneIN" class="sr-only">Telefon</label>
            <input type="tel" id="phoneIN"  name = "phoneIN" class="form-control" placeholder="Telefon" required="" autofocus=""><br>
            <!-- Butonlar -->
            <a class="btn btn-lg btn-success col-md-2" href="index.php">Giriş</a>
            <a class="btn btn-lg btn-danger  col-md-4 col-md-offset-1" href="savePassportForm.php">Parolamı Unuttum</a>
            <button class="btn btn-lg btn-primary  col-md-2 col-md-offset-3" type="submit">Kaydol</button><br>
            
            <label class="label-warning"><?php echo $errorPhase;?></label>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

