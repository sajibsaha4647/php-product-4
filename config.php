<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="zakkash_info";
$con= mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$con){
  echo "database connect error";
}
 ?>
