<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
if(array_key_exists('auth__clear',$_SESSION)){
    if($_SESSION['auth__clear'] != true){
        header("Location:../index.php");
        die("Пожалуйста войдите в систему");
        exit();
    }
}else{
    echo "<a href=","../index.php",">На главную</a>","<br>";
   
    header("Location:../index.php");
    die("Возникла ошибка");
    exit();
}
?>
