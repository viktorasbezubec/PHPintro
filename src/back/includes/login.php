<?php
require 'session.php';
require 'db.php';
require 'signuplogic.php';
if(isset($_POST['submit-btn'])) {



    $username = $_POST['uid'];
    $password = $_POST['pwd'];

    try{
        $SQLQuery = "SELECT * FROM users WHERE username = :username";
        $stmt = $conn->prepare($SQLQuery);
        $stmt->execute(array(':username'=>$username));

        while ($row = $stmt ->fetch()){
            $id = $row['id'];
            $hashedPwd = $row['password'];
            $username = $row['username'];

        }
    }
    catch (PDOException $e){
        echo "error: " . $e->getMessage();
    }

}
