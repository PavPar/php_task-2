<?php
session_start();
if(isset($_SESSION['order_fields']) && isset($_SESSION['bill_fields'])){
    $filename="order.txt";
    header("Content-disposition: attachment;filename=$filename");
    readfile($filename);
    // header("Location:basket.php");
}