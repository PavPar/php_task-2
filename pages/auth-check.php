<?php
session_start();
if(array_key_exists('auth__clear',$_SESSION)){
    if($_SESSION['auth__clear'] != true){
        header("Location:../index.php");
        die("Пожалуйста войдите в систему");
        exit();
    }
}else{
    echo "<a href=","../index.php",">На главную</a>","<br>";
    die("Возникла ошибка");
    header("Location:pages/index.php");
    exit();
}
?>
