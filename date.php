<?php
include_once('database.php');
function getcurrentdate($date)
{  date_default_timezone_set("Australia/Brisbane");
  $date = date("Y-m-d h:i:sa");
  return $date;
}
?>
