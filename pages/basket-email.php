<?php
session_start();

function SendMail($msg){
    global $order;
    mail($order['user_email'],"Ваш заказ на сайте",$msg,"From: Pavel <3");
}

if(isset($_SESSION['order_fields']) && isset($_SESSION['bill_fields'])){
    $filename="order.txt";
    SendMail(readfile($filename));
    // header("Location:basket.php");
}