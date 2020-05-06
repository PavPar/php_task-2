<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
if(array_key_exists('auth__clear',$_SESSION)){
    if($_SESSION['auth__clear'] == true){
        header("Location:pages/order.php");
        exit();
    }
}
