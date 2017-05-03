<?php 

$code = "0";
$errorPhase = $errorType = "";
if(!empty($_GET['code'])){
$code = $_GET['code'];
}

if($code == 1){
    $errorPhase = "Kullanıcı başarılı bir şekilde oluşturuldu";
    $errorType = "alert-success";
}else if ($code == 2) {
    $errorPhase = "USER - INFO bağlantı hatası";
    $errorType = "alert-warning";
} else if ($code == 3) {
    $errorPhase = "INFO eklenemedi";
    $errorType = "alert-warning";
} else if ($code == 4) {
    $errorPhase = "USER eklenemedi";
    $errorType = "alert-warning";
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
        <h2 class="text-center">Randevu Takip Sistemi (v 0.1)</h2><br>
        <h3>Kontrol Sayfası</h3>
        <div class="alert <?php echo $errorType; ?>" role="alert"><?php echo $errorPhase;?></div>
        <a class="btn btn-lg btn-success col-md-2" href="index.php">Giriş</a>
        <a class="btn btn-lg btn-warning col-md-2 col-md-offset-8" href="registerForm.php">Geri</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

