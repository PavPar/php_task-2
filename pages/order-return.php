<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();


function setFieldValue($key){
    if(isset($_SESSION['order_fields'])){
        $order_fields = $_SESSION['order_fields'];
        if(array_key_exists($key,$order_fields)){
           echo  $order_fields[$key];
        }
    }
}

function setSetviceType($key){
    if(isset($_SESSION['order_fields'])){
        $order_fields = $_SESSION['order_fields'];
        if(array_key_exists('service_type',$order_fields)){
            if($order_fields['service_type'] == $key){
                echo 'selected';
            }
        }
        
    }
}

function setFlags($key){
    if(isset($_SESSION['order_fields'])){
        $order_fields = $_SESSION['order_fields'];
        if(array_key_exists($key,$order_fields)){
            if($order_fields[$key] == true){
                echo 'checked';
            }else{
                echo '';
            }
        }
        
    }
}

?>