<?php
session_start();
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $user__login  = $_POST['login'];
        $user__password = $_POST['password'];
        if($user__login == "admin" and $user__password == "123"){
            $_SESSION['auth__clear'] = true;
            header("Location:order.php");
            exit();
        }else{
            $_SESSION['auth__clear'] = false;
        }
        
    }else{
        $_SESSION['auth__clear'] = false;
    }
    header("Location: /index.php");
    exit();
    
?>
