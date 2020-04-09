<?php 
session_start();
include("prices.php");
include("field-names.php");


if(isset($_SESSION['order_fields']) && isset($_SESSION['bill_fields'])){
   

$order_fields = $_SESSION['order_fields'];
$bill_fields = $_SESSION['bill_fields'];
$order = array_merge($order_fields,$bill_fields);

function CalculatePrice(){
    global $order;
    $totalPrice = 0;
    foreach($order as $key => $value){
        $totalPrice+=GetPrice($value);
    }
    if(array_key_exists("car_time-paper",$order)){
        $totalPrice*=2;
    }
    if(array_key_exists("car_time-hold",$order)){
        $totalPrice*=$order["car_time-hold"];
    }
    echo "Итого : ".$totalPrice;
}

function ouputValExtraService($key,$arr){
    global $order;
    if(array_key_exists($key,$arr)){
        echo '- '.getName($order[$key]).' - '.GetPrice($order[$key]);
        echo '<br>';
    }
}
function GetPrice($key){
    global $prices;
    if(array_key_exists($key,$prices)){
        return $prices[$key];
    }
}
function Output(){
    global $order;
    global $service_fields_extra;
    global $car_fields_extra;
    echo 'Имя : '.$order['user_name'];
    echo '<br>';
    echo 'Email : '.$order['user_email'];
    echo '<br>';    
    echo 'Телефон : '.$order['user_phone'];
    echo '<div style="margin-left:6px; margin-top:2px; "><img
    src="../images/hl.gif"></div>';
    echo '<br>';
    echo 'Тип услуги : '.getName($order['service_type']).' - '.GetPrice($order['service_type']);
    echo '<br>';
    echo 'Марка машины : '.getName($order['car_mark']).' - '.GetPrice($order['car_mark']);
    echo '<br>';   
    echo 'Дополнительные услуги : ';
    echo '<br>';
    foreach($order as &$key){
        ouputValExtraService($key,$service_fields_extra);
    }
    echo 'Предворительная подготовка : ';
    echo '<br>';
    foreach($order as &$key){
        ouputValExtraService($key,$car_fields_extra);
    }
    if(array_key_exists("car_time-paper",$order)){
        echo '<div style="margin-left:6px; margin-top:2px; "><img
        src="../images/hl.gif"></div>';
        echo 'Дополнительно : ';
        echo '<br>';
        echo 'Ускоренное заполнение'.' - '.GetPrice($order['car_time-paper']);
    }
    if(array_key_exists("car_time-hold",$order)){
        echo '<div style="margin-left:6px; margin-top:2px; "><img
        src="../images/hl.gif"></div>';
        echo 'Время аренды/лизинга : '.$order["car_time-hold"];
        echo '<br>';
    }
}
}

function OutputText(){
    
}
?>