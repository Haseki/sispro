<?php

require '../DBAs/DBA_USER.php';
require '../DBAs/DBA_INFO.php';
require 'inputHandler.php';
require 'codeMaker.php';


$conInfo = new DBA_INFO();
$conUser = new DBA_USER();
$input = new inputHandler();
$cmaker = new codeMaker();
$username = $password = "";



$username = $_POST['usernameIN'];
$password = $_POST['passwordIN'];
$error = 0;

$username = $input->ready_input($username, "TEXT");
$password = $input->ready_input($password, "TEXT");

$error = $GLOBALS['error'];

if ($error == 0) {
    $password = md5($password);
    $result = $conUser->checkEntry($username, $password);
    if ($result) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        //Kullanıcının Yetki Matrisini Databseden alacağız.
        header("location:../UserScreens/mainMenu.php");
    } else {
        header("location:./index.php?code=1");
    }
}
