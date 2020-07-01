<?php
$servername = "app_mysql";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "login";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$conn){
    die('Failed' .mysqli_connect_error());
}