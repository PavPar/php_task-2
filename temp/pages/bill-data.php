<?php
error_reporting(0);
ini_set('display_errors', 0);
if ( ! session_id() ) {

    session_start();
    
    }
include("field-names.php");

function createRadioBtn($key,$val,$bool){
    echo '<label for="'.$key.'">'.$val;
    if($bool){
        echo '<input type= "radio" name="car_mark"." value="'.$key.'" id="'.$key.'" required checked>';
    }else{
        echo '<input type= "radio" name="car_mark"." value="'.$key.'" id="'.$key.'" required>';
    }
    echo '</label>';
}

function createFlag($key,$val){
    echo '<label for="'.$key.'">'.$val;
    echo '<input type= "checkbox" name="'.$key.'"value="'.$key.'" id="'.$key.'">';
    echo '</label>';
}

function createField($key,$val){
    echo '<label for="'.$key.'">'.$val;
    echo '<input min=1 type= "number" name="'.$key.'" value="'.$key.'" id="'.$key.'">';
    echo '</label>';
}

function createRadioMenu(){
    $order_fields = $_SESSION['order_fields'];
    global $car_marks;
    $cnt =0;
    if(array_key_exists('service_type',$_SESSION['order_fields'])){
        foreach($car_marks[$order_fields['service_type']] as $key => $val){
            if($cnt == 0){
                createRadioBtn($key,$val,true);
            }else{
                createRadioBtn($key,$val,false);
            }
            $cnt++;
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