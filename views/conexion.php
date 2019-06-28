<?php
$host = "163.178.173.144";
$user = "multi-paraiso";
$pass = "multimedios.rp.2017";
$db = "ADLRtourism";

$conexion = mysqli_connect($host,$user,$pass,$db);

   if(!$conexion){
    echo "Not Connected...";
   }else{
    echo "Connection Succesfully";
   }
?>