<?php
if(isset($_POST['signup-submit'])){
    require '../includes/db.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($username)|| empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: ../templates/signup.php?error=emptyfields&uid=".$username. "&mail=".$email);
        exit();

    }
}