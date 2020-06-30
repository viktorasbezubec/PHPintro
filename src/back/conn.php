<?php
$servername = "app_mysql";
$username = "root";
$password = "root";
$dbname = "Loginsys";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die('Failed' .mysqli_connect_error());
}