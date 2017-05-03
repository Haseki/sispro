<?php

require '../DBAs/DBA_USER.php';
require '../DBAs/DBA_INFO.php';
require 'inputHandler.php';
require 'codeMaker.php';


$conInfo = new DBA_INFO();
$conUser = new DBA_USER();
$input = new inputHandler();
$cmaker = new codeMaker();
$email = $password = $username = "";

$email = $_POST['emailIN'];

$error = 0;

$email = $input->ready_input($email, "MAIL");

$error = $GLOBALS['error'];

if($error == 0){
    $infoID = $conInfo->findIDByMail($email);
    if($infoID){
    $userID = $conUser->getIDByInfoID($infoID);
    $code = $cmaker->cripto();
    $password = md5($code);
    $to = $email;
    
    $username = $conUser->getUsernameByID($userID);
    
    $subject = "Şifre Kurtarma Noreply";
    $txt = "Merhaba $username <br> Şifre kurtarma istediğinizi gördük. Yeni şifrenizle sisteme giriş yapabilirsiniz : <br>$code";
    $headers = "From: noreply.randevu@gmail.com"; 
    
    $conUser->recoverPassword($userID, $password);
    
    echo("EMail send to : $to <br>Subject : $subject <br> Text :<br> $txt <br> Header: $headers <br>");
    $mailResult = mail($to, $subject, $txt);
    if($mailResult == false){
        echo 'NOOOOOO! <br>';
    } else {
        echo "WHAAAAT? <br>";
    }

    } 
}



?>