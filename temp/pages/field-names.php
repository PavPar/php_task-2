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
        "car_extra-water" => "Омыватель"
    ),
    "service_type-sale" => array(
        "car_extra-jojo" => "Полировка",
        "car_extra-saloon" => "Чистка салона",
        "car_extra-to" => "ТО"
    ),
    "service_type-lizing" => array(
        "car_extra-benzin" => "Бензин",
        "car_extra-saloon" => "Чистка салона",
        "car_engine-clean" => "Чистка двигателя"
    )
);

$names = array(
    "service_type-prokat" => "Прокат",
    "service_type-sale" => "Продажа",
    "service_type-lizing" => "Лизинг",
    "car_extra-benzin" => "Бензин",
    "car_extra-saloon" => "Чистка салона",
    "car_engine-clean" => "Чистка двигателя",
    "car_extra-jojo" => "Полировка",
    "car_extra-to" => "ТО",
    "car_extra-tires" => "Шины",
    "car_extra-water" => "Омыватель",
    "car_mark-kia" => "Kia",
    "car_mark-honda" => "Honda",
    "car_mark-mazda" => "Mazda",
    "car_mark-сitroen" => "Citroen",
    "car_mark-skoda" => "Skoda",
    "car_mark-lexus" => "Lexus",
    "car_mark-peugeot" => "Peugeot",
    "car_mark-lada" => "Lada Priora ",
    "car_mark-nissan" => "Nissan",
    'service__extra-leather' => "Кожанные сидения",
    'service__extra-heater' => "Подогреватель сидений",
    'service__extra-luke' => "Люк",
);

$car_fields_extra = array(
    "car_extra-benzin"  =>"",
    "car_extra-tires"  =>"",
    "car_extra-jojo"  =>"",
    "car_extra-saloon"  =>"",
    "car_extra-benzin"  =>"",
    "car_extra-saloon"  =>""
);

$service_fields_extra = array(
    'service__extra-leather' =>"",
    'service__extra-heater' =>"",
    'service__extra-luke' =>""
);

$car_time_names = array(   
    "car_time-paper" => "Ускоренное оформление",
    "car_time-hold" => "Кол-во дней на аренду"
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

function getName($key){
    global $names;
    return $names[$key];
}