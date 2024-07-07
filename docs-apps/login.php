<?php
include('dbconexion.php');


if($conexion->connect_errno == 0)
	{
		if(isset($_POST['correo']) && isset($_POST['pass']) )
		{
			$correo = $_POST['correo'];
			$pass = $_POST['pass'];
			
			$rezultat = mysqli_query($conexion, "SELECT * FROM users WHERE mailUser='$correo' AND passUser='$pass'");
			
			if($rezultat->num_rows != 0)
			{
				echo 'logueado';
			}
			else
			{
				echo 'usuario no existe';
			}
		}
		
		$conexion->close();		
	}





?>
