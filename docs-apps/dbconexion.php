<?php
$server='10.128.0.2:3306';
$user='loveran1_turista';
$pass='Lucianouh01';
$db='loveran1_turistnuble';
$conexion=new mysqli($server,$user,$pass,$db);
if(!$conexion)
{  
    echo "error";
} 
?>