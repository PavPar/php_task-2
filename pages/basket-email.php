<?php
include("auth-check.php");
session_start();

error_reporting(0);

function send_mail($msg)
{
    return mail($_SESSION['order_fields']['user_email'], "Автосалон", $msg);
}

if(isset($_SESSION['order_fields']) && isset($_SESSION['bill_fields'])){
    $filename="order.txt";
    $type = send_mail(file_get_contents($filename));
    if($type){
        echo '<div style="margin-top:50vh; margin-left:45vw">';
        echo "Сообщение отправлено успешно !<br><br>";
        echo '<a style="text-align:center; margin-left:10%" href="../index.php",">На главную</a><br>';
        echo "</div>";
        unset($_SESSION['order_fields']);
        unset($_SESSION['bill_fields']);
    }else{
        echo '<div style="margin-top:50vh; margin-left:45vw">';
        echo "Произошла ошибка при отправке email :( <br><br>";
        echo '<a style="text-align:center; margin-left:10%" href="../index.php",">На главную</a><br>';
        echo "</div>";
    }
}else{
    exit(header("Location:../index.php"));
}
