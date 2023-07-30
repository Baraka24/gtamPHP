<?php

$con = mysqli_connect('mysql-gtam.alwaysdata.net', 'gtam', 'gtam*#gtam', 'gtam_db');
if (mysqli_connect_errno($con)) {
  echo "Error";
}
mysqli_set_charset($con,"utf8");
?>
