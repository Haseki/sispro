<?php

class DBA_USER{

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
   
    function add($username, $password, $entryCode, $typeID, $infoID, $isPasswordFresh) {
        
        
        $conn = $this->databaseCon();
        
        if($username == null || $password == null) {
            return false;
        }
        
        if($typeID == null) {
            $typeID = 0;
        }
        
        if ($infoID == null) {
            $infoID = 0;
        }
        
        if ($entryCode == null) {
            $entryCode = 0;
        }
        
        if ($isPasswordFresh == null){
            $isPasswordFresh = 0;
        }
        
        
        $sql = "INSERT INTO user"
                . "(username, password, entryCode, typeID, infoID, isPasswordFresh)" .
                " VALUES ('$username','$password','$entryCode', $typeID , $infoID , $isPasswordFresh);";
        echo $sql."<br>";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            return true;
        } else {
            mysqli_close($conn);
            return false;
        }
    }
    
    function findID ($username) {
        $conn = $this->databaseCon();

        $sql = "SELECT id FROM user WHERE"
                . " username = '$username'";

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
    
    function getIDByInfoID ($infoID) {
        $conn = $this->databaseCon();

        $sql = "SELECT id FROM user WHERE"
                . " infoID = $infoID";

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
    
    function connectUserToInfo ($id,$infoID){
        $conn = $this->databaseCon();
        
        
        $sql = "UPDATE user SET "
                . "infoID = $infoID WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
            
    }
    function recoverPassword ($id,$password){
        $conn = $this->databaseCon();
        
        
        $sql = "UPDATE user SET "
                . "password = '$password', isPasswordFresh = 1 WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
            
    }
    
    
    function checkEntry ($username , $password) {
        $conn = $this->databaseCon();

        $sql = "SELECT id FROM user WHERE"
                . " username = '$username' AND password = '$password'";

        if ($result = mysqli_query($conn, $sql)) {

            if (mysqli_num_rows($result) == 0) {
                return false;
            }
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
    }
    
    function getColumnByID ($id , $column) {
        $conn = $this->databaseCon();

        $sql = "SELECT '$column' FROM user WHERE"
                . " id = $id";

        if ($result = mysqli_query($conn, $sql)) {

            if (mysqli_num_rows($result) == 0) {
                return false;
            }
            $value = $result["$column"];
            mysqli_close($conn);
            return $value;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
    }
    
    function getUsernameByID ($id) {
        $conn = $this->databaseCon();

        $sql = "SELECT username FROM user WHERE"
                . " id = $id";

        if ($result = mysqli_query($conn, $sql)) {

            if (mysqli_num_rows($result) == 0) {
                return false;
            }
            $result = mysqli_fetch_array($result);
            $value = $result[0];
            mysqli_close($conn);
            return $value;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
    }
    
    function deleteUP ($username , $password) {
        $conn = $this->databaseCon();

        $sql = "DELETE FROM user WHERE"
                . " username = '$username' AND password = '$password'";

        if ($result = mysqli_query($conn, $sql)) {

            if (mysqli_num_rows($result) == 0) {
                return false;
            }
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
    }
    
    function delete ($id) {
        $conn = $this->databaseCon();

        $sql = "DELETE FROM user WHERE"
                . " id = $id";

        if ($result = mysqli_query($conn, $sql)) {

            if (mysqli_num_rows($result) == 0) {
                return false;
            }
            mysqli_close($conn);
            return true;
        } else {
            echo 'Data NOT checked Successfully<br>';
            mysqli_close($conn);
            return false;
        }
    }

}
