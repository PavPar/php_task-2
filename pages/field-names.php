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

$car_marks = array(
    "service_type-prokat" => array(
        "car_mark-peugeot" => "Peugeot",
        "car_mark-lada" => "Lada Priora ",
        "car_mark-nissan" => "Nissan"
    ),
    "service_type-sale" => array(
        "car_mark-сitroen" => "Citroen",
        "car_mark-skoda" => "Skoda",
        "car_mark-lexus" => "Lexus"
    ),
    "service_type-lizing" => array(
        "car_mark-kia" => "Kia",
        "car_mark-honda" => "Honda",
        "car_mark-mazda" => "Mazda"
    )
);

$car_extra = array(
    "service_type-prokat" => array(
        "car_extra-benzin" => "Бензин",
        "car_extra-tires" => "Шины",
    ),
    "service_type-sale" => array(
        "car_extra-jojo" => "Полировка",
        "car_extra-saloon" => "Чистка салона"
    ),
    "service_type-lizing" => array(
        "car_extra-benzin" => "Бензин",
        "car_extra-saloon" => "Чистка салона"
    )
);

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
