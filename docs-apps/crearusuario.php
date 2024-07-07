<?php
include('dbconexion.php');

$nombre= $_GET['nameUser'];
$email= $_GET['mailUser'];
$contrasena= $_GET['passUser'];


$sql="INSERT INTO users (nameUser,mailUser,passUser
) VALUES ('$nombre','$email','$contrasena') ";
$resultado= mysqli_query($conexion,$sql);






 ?>
