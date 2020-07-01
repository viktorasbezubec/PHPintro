<?php
$servername = "app_mysql";
$dbusername = "root";
$dbpassword = "root";
$dbName = "login";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
