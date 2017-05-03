<?php

class DBA_INFO {

    private $servername;
    private $username;
    private $password;
    private $database;

    function __construct() {
        $this->servername = "localhost";
        $this->username = "Haseki";
        $this->password = "puceg93";
        $this->database = "sispro";
    }

    function databaseCon() {
        $servername = $this->servername;
        $username = $this->username;
        $password = $this->password;
        $database = $this->database;
// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            return false;
        } else {
            $conn->query("SET NAMES utf8");
            $conn->query("SET CHARACTER SET utf8");
            $conn->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
            return $conn;
        }
    }
   
    function add($name, $surname, $email, $tel, $title) {
        
        
        $conn = $this->databaseCon();
        
        if($name == null || $surname == null || $email == null) {
            return false;
        } 
        if($tel == null) {
            $tel = "none";
        }
        
        if($title == null) {
            $title = "none";
        }
        
        $sql = "INSERT INTO info"
                . "(name, surname, email, tel, title)" .
                " VALUES ('$name','$surname','$email', '$tel' , '$title');";

        echo$sql."<br>";
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            return true;
        } else {
            mysqli_close($conn);
            return false;
        }
    }
    
    function findID ($name , $surname) {
        $conn = $this->databaseCon();

        $sql = "SELECT id FROM info WHERE"
                . " name = '$name' AND surname = '$surname' ";

        if ($result = mysqli_query($conn, $sql)) {

            if (mysqli_num_rows($result) == 0) {
                return false;
            }
            $result = mysqli_fetch_array($result);
            $id = $result['id'];
            mysqli_close($conn);
            return $id;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
    }
    
    function findIDByMail ($email) {
        $conn = $this->databaseCon();

        $sql = "SELECT id FROM info WHERE"
                . " email = '$email'";

        if ($result = mysqli_query($conn, $sql)) {

            if (mysqli_num_rows($result) == 0) {
                return false;
            }
            $result = mysqli_fetch_array($result);
            $id = $result['id'];
            mysqli_close($conn);
            return $id;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
    }

}
