<?php
if ( ! session_id() ) {

  session_start();
  
  }
include("field-names.php");

$GatheredData = array();

foreach ($bill_fields as $key) {
    if(checkFieldValue($key)){
      $GatheredData[$key] = getFieldValue($key);
    }
}

$_SESSION["bill_fields"] = $GatheredData;

exit(header("Location:basket.php"));