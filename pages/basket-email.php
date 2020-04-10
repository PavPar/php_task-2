<?php
session_start();

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

function send_mail($msg)
{
    return mail($_SESSION['order_fields']['user_email'], "Автосалон", $msg);
}

if(isset($_SESSION['order_fields']) && isset($_SESSION['bill_fields'])){
    $filename="order.txt";
    send_mail(file_get_contents($filename));
    exit(header("Location:../index.php"));
}
