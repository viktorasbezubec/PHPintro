<?php
$servername = "app_mysql";
$dbusername = "root";
$dbpassword = "root";
$dbName = "loging";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//$servername = "app_mysql";
//$dbusername = "root";
//$dbpassword = "root";
//$dbName = "login";
//
//$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbName);
//
//if(!$conn){
//    die();
//    }else {
//    echo "jega";
//}
//
