<?php

require '../DBAs/DBA_USER.php';
require '../DBAs/DBA_INFO.php';
require 'inputHandler.php';
require 'codeMaker.php';


$conInfo = new DBA_INFO();
$conUser = new DBA_USER();
$input = new inputHandler();
$cmaker = new codeMaker();
$username = $password = $password2 = $name = $surname = $email = $phone = "";



$username = $_POST['usernameIN'];
$password = $_POST['pass1IN'];
$password2 = $_POST['pass2IN'];
$name = $_POST['nameIN'];
$surname = $_POST['surnameIN'];
$email = $_POST['emailIN'];
$phone = $_POST['phoneIN'];
$error = 0;

$username = $input->ready_input($username, "TEXT");
$password = $input->ready_input($password, "TEXT");
$password2 = $input->ready_input($password2, "TEXT");
$name = $input->ready_input($name, "TEXT");
$surname = $input->ready_input($surname, "TEXT");
$email = $input->ready_input($email, "MAIL");
$phone = $input->ready_input($phone, "TEXT");

$error = $GLOBALS['error'];

if ($error == 0) {

    $id = $conUser->findID($username);
    if ($password != $password2) {
        echo"Şifreler Uyuşmuyor... \n";
        header("location:./registerForm.php?code=2");
    } else {
        if ($id != null) {
            echo "Kullancı Zaten Mevcut... \n";
            header("location:./registerForm.php?code=1");
        } else {
            $entryCode = $cmaker->cripto();
            $typeID = 0;
            $infoID = null;
            $isPasswordFresh = 0;
            $password = md5($password);
            $result = $conUser->add($username, $password, $entryCode, $typeID, $infoID, $isPasswordFresh);
            if ($result) {
                echo "Kullanıcı (USER) eklendi...\n";
                $id = $conUser->findID($username);
                $result2 = $conInfo->add($name, $surname, $email, $phone, "none");
                if ($result2) {
                    echo "Kullanıcı (INFO) eklendi...\n";
                    $infoID = $conInfo->findID($name, $surname);
                    $id = $conUser->findID($username);
                    $result3 = $conUser->connectUserToInfo($id, $infoID);
                    if ($result3) {
                        echo "Tüm işlemler Tamam... \n";
                        header("location:./registerInfo.php?code=1");
                    } else {
                        echo "USER - INFO bağlantısı yapılamadı. \n";
                        header("location:./registerInfo.php?code=2");
                    }
                } else {
                    echo "Kullanıcı (INFO) eklenemedi...\n";
                    $id = $conUser->findID($username);
                    $conUser->delete($id);
                    header("location:./registerInfo.php?code=3");
                }
            } else {
                echo "Kullancı (USER) eklenmedi...\n";
                header("location:./registerInfo.php?code=4");
            }
        }
    }
}

//if ($error == 0) {
//    
//    if($con ->checkRegistry($username , md5($password))){
//        
//    $type = $con ->getRegistryType($username);
//    $id = $con->getRegistryID($username);
//    date_default_timezone_set("Europe/Istanbul");
//    $code = date("y-m-d:H-i-s");
//    
//        session_start();
//        $_SESSION['username'] = $username;
//        $_SESSION['password'] = $password;
//        $_SESSION['code'] = $code;
//        $_SESSION['id'] = $id;
//        $con ->updateEntryCode($username, $code);
//    
//    if($type == "ADMIN" || $type == "MASTER"){
//        header("location:./MainPageAdmin.php");   
//    } else {
//        header("location:./MainPage.php");   
//    }
//    } else {
//        header("location:./index.php?error=3");   
//    }
//    
//} else {
////    echo'Tam olarak ' . $error . 'adet hata ile karşılaşıldı.<br>';
//    if(!$username){
//        header("location:./index.php?error=1");   
//    } elseif (!$password) {
//        header("location:./index.php?error=2");   
//    } else
//    header("location:./index.php?error=0");
//}