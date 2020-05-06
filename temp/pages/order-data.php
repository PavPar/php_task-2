<?php
if ( ! session_id() ) {

  session_start();
  
  }

include("field-names.php");



$GatheredData = array();

foreach ($order_fields as $key) {
    if(checkFieldValue($key)){
      $GatheredData[$key] = getFieldValue($key);
    }
}

$_SESSION['order_fields'] = $GatheredData;

header("Location:bill.php");

