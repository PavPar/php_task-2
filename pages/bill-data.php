<?php
// error_reporting(0);
// ini_set('display_errors', 0);
session_start();
include("field-names.php");

function createRadioBtn($key,$val){
    echo '<label for="'.$key.'">'.$val;
    echo '<input type= "radio" name="car_mark"." value="'.$key.'" id="'.$key.'" required>';
    echo '</label>';
}

function createFlag($key,$val){
    echo '<label for="'.$key.'">'.$val;
    echo '<input type= "checkbox" name="'.$key.'"value="'.$key.'" id="'.$key.'">';
    echo '</label>';
}

function createField($key,$val){
    echo '<label for="'.$key.'">'.$val;
    echo '<input type= "number" name="car_time"." value="'.$key.'" id="'.$key.'">';
    echo '</label>';
}

function createRadioMenu(){
    $order_fields = $_SESSION['order_fields'];
    global $car_marks;
    if(array_key_exists('service_type',$_SESSION['order_fields'])){
        foreach($car_marks[$order_fields['service_type']] as $key => $val){
            createRadioBtn($key,$val);
        }
    }
}

function createFlagMenu(){
    $order_fields = $_SESSION['order_fields'];
    global $car_extra;
    if(array_key_exists('service_type',$_SESSION['order_fields'])){
        foreach($car_extra[$order_fields['service_type']] as $key => $val){
            createFlag($key,$val);
        }
    }
}

function CreateTimeMenu(){
    $order_fields = $_SESSION['order_fields'];
    if(array_key_exists('service_type',$_SESSION['order_fields'])){
        if($order_fields['service_type'] == "service_type-sale" ){
            createField("car_time-hold","Кол-во дней на аренду");
        }else{
            createFlag("car_time-paper","Ускоренное оформление");
        }
    }
}
?>