<?php

$order_fields = array(
    'service_type',
    'service__extra-leather',
    'service__extra-heater',
    'service__extra-luke',
    'user_name',
    'user_email',
    'user_phone'
);
   
$bill_fields = array(
    "car_mark",
    "car_extra-benzin",
    "car_extra-tires",
    "car_extra-jojo",
    "car_extra-saloon",
    "car_extra-benzin",
    "car_extra-saloon",
    "car_time-paper",
    "car_time-hold"
);

@car_marks{
    "car_mark-peugeot" => "Peugeot",
    "car_mark-lada" => "Lada Priora ",
    "car_mark-nissan" => "Nissan",
}

function checkFieldValue($field)
{
    if(isset($_REQUEST[$field])){
        return true;
    }else{
        return false;
    }
}

function getFieldValue($field)
{
    return $_REQUEST[$field];   
}
