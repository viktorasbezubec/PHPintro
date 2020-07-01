<?php
//    require 'validate.php';
//
//    $error = array();
//    $username = validate($_POST['uid']);
//    if (!empty($username)) {
//        $error[] = "Neivestas vartotojo vardas";
//    }
//    $email = validatemail($_POST['mail']);
//    if (!empty($email)) {
//        $error[] = "Neivestas emailas";
//    }
//
//    if(empty($error)){
//        echo 'validate';
//    }else {
//        echo 'not validate';
//    }


    require 'db.php';

if(isset($_POST['signup-submit'])) {

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
echo "gg";
    try {
        $SQLInsert = "INSERT INTO users (username, email, password) VALUES (:username,:email,:password)";
        $stmt = $conn->prepare($SQLInsert);
        $stmt->execute(array(':username' => $username, ':email' => $email, ':password' => $hashedPwd));
        if($stmt->rowCount() == 1){
            header('location: index.php');
        }
    }
    catch (PDOException $e){
        echo "error: " . $e->getMessage();
    }
}

//    if(empty($username)|| empty($email) || empty($password) || empty($passwordRepeat)){
//        header("Location: index.php?error=emptyfields&uid=".$username. "&mail=".$email);
//        exit();
//    }
//    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
//        header("Location: index.php?error=invalidmailuid");
//        exit();
//    }
//    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//        header("Location: index.php?error=invalidmail&uid=".$username);
//        exit();
//    }
//    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
//        header("Location: index.php?error=invaliduid&mail=".$email);
//        exit();
//    }
//    else if ($password !== $passwordRepeat){
//        header("Location: index.php?error=passwordcheck&uid=".$username. "&mail=".$email);
//        exit();
//    }
//    else {
//        $sql = "SELECT uidUsers FROM users WHERE uidUsers= ";
//        $stmt = mysqli_stmt_init($conn);
//        if (!mysqli_stmt_prepare($stmt, $sql)){
//            header("Location: index.php?error=sqlerror");
//            exit();
//        }
//        else {
//            mysqli_stmt_bind_param($stmt, "s", $username);
//            mysqli_stmt_execute($stmt);
//            mysqli_stmt_store_result($stmt);
//            $resultCheck = mysqli_stmt_num_rows($stmt);
//            if($resultCheck > 0){
//                header("Location: index.php?error=usertaken&mail=".$email);
//                exit();
//            }
//            else{
//                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?,?,?)";
//                $stmt = mysqli_stmt_init($conn);
//                if (!mysqli_stmt_prepare($stmt, $sql)){
//                    header("Location: index.php?error=sqlerror");
//                    exit();
//                }
//                else{
//                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
//                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
//                    mysqli_stmt_execute($stmt);
//                    mysqli_stmt_store_result($stmt);
//                }
//
//            }
//        }
//    }
//    mysqli_stmt_close($stmt);
//    mysqli_close($conn);
//}
//else {
//    header("Location: index.php");
//    exit();
//}