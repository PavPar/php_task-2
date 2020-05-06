<?php
 if ( ! session_id() ) {

    session_start();
    
    }
error_reporting(0);
ini_set('display_errors', 0);

if(array_key_exists('auth__clear',$_SESSION)){
    if($_SESSION['auth__clear'] != true){
        exit(header("Location:../index.php"));
        die("Пожалуйста войдите в систему");
    }
}else{
    // echo "<a href=","../index.php",">На главную</a>","<br>";
    exit(header("Location:../index.php"));
    die("Возникла ошибка");
}
?>
