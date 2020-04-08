<?php 
session_start();

if(!isset($_SESSION['order_fields']) || !isset($_SESSION['bill_fields'])){
    die("Error");
}

$order_fields = $_SESSION['order_fields'];
$bill_fields = $_SESSION['bill_fields'];

?>