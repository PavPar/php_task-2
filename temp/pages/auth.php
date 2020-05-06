<?php
// error_reporting(0);
// ini_set('display_errors', 0);
session_start(); 
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $user__login  = $_POST['login'];
        $user__password = $_POST['password'];
        if($user__login == "admin" and $user__password == "123"){
            $_SESSION['auth__clear'] = true;
            exit(header("Location: ./order.php"));
        }else{
            $_SESSION['auth__clear'] = false;
            exit(header("Location: /index.php"));
        }    
    }else{
        $_SESSION['auth__clear'] = false;
        exit(header("Location: /index.php"));
    }
   
?>
<!DOCTYPE html>