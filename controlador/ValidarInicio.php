<?php 

	require '../vista/php/conexion.php';

	$Tipo = $_POST['exampleFormControlSelect1'];
	$Nombre_Introducido = $_POST['Nombre'];
	$Correo_Introducido = $_POST['Correo'];
	$Contra_Introducido = $_POST['Contra'];

	session_start();



	if($Tipo == "Estudiante")
	{
		$sqlEstudiante = "SELECT * FROM estudiantes WHERE Nombres = '$Nombre_Introducido' 
														and Email = '$Correo_Introducido'
														and Contrasena = '$Contra_Introducido'"; 
		if($resultado = $conexion->query($sqlEstudiante)) 
		{
			if($Datos = $resultado->fetch_assoc())
			{
				$_SESSION['Usuario'] = $Datos['Nombres'];
				$_SESSION['Email']   = $Datos['Email'];
				$_SESSION['Password']= $Datos['Contrasena'];

				header("Location: ../vista/InicioEstudiante.php");
			}
			else
			{
				header("Location: ../vista/index.php");
			}
		}
	}
	else
	{
		$sqlMaestro = "SELECT * FROM maestros WHERE Nombres = '$Nombre_Introducido' 
												and Email = '$Correo_Introducido'
												and Contrasena = '$Contra_Introducido'"; 
		if($resultado = $conexion->query($sqlMaestro)) 
		{
			if($Datos = $resultado->fetch_assoc())
			{
				$_SESSION['Usuario'] = $Datos['Nombres'];
				$_SESSION['Email']   = $Datos['Email'];
				$_SESSION['Password']= $Datos['Contrasena'];

				header("Location: ../vista/InicioMaestro.php");
			}
			else
			{
				header("Location: ../vista/index.php");
			}
		}
	}

?>