<?php 
	// include_once $_SERVER['DOCUMENT_ROOT'].'/FocusOnLearnig/config.php';
	// require_once 'config.php';
	require '../vista/php/conexion.php';
	session_start();
	

	$Nombre = $_POST['Nombres'];
	$Apellido = $_POST['Apellidos'];
	$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$Correo = $_POST['Correo'];
	$Contra = $_POST['password'];
	$Telefono = $_POST['Telefono'];
	$Especialidad = $_POST['exampleFormControlSelect1'];
	$sexo = $_POST['customRadioInline1'];
	$tipo = $_POST['customRadioInline2'];

	// var_dump($_POST);

	$contador;

	if($sexo == "Hombre" && $tipo == "Estudiante") 
	{
		$contador = 1;
	}
	if ($sexo == "Hombre" && $tipo == "Maestro")
	{
		$contador = 2;
	}
	if ($sexo == "Hombre" && $tipo == "Maestra")
	{
		$contador = 0;
		header("Location: ../vista/RegistroUsuarios.php");
	}


	if ($sexo == "Mujer" && $tipo == "Estudiante")
	{
		$contador = 1;
	}
	if($sexo == "Mujer" && $tipo == "Maestra") 
	{
		$contador = 2;
	}
	if ($sexo == "Mujer" && $tipo == "Maestro")
	{
		$contador = 0;
		header("Location: ../vista/RegistroUsuarios.php");
	}


	if ($contador == 1)
	{
		// $estudiante = new Estudiantes();

		$sql = "INSERT INTO estudiantes(Nombres,Apellidos,FotoPerfil,Email,Contrasena,Telefono)
								VALUES('$Nombre','$Apellido','$img','$Correo','$Contra','$Telefono')";

			if($conexion->query($sql) == true)
			{
				$_SESSION['Usuario'] = $Nombre;
				$_SESSION['Email'] = $Correo;
				$_SESSION['Password'] = $Contra;

				header("Location: ../vista/InicioEstudiante.php");
			}
	}
	if($contador == 2)
	{
		$sqlmaestro = "INSERT INTO maestros(Nombres,Apellidos,FotoPerfil,Email,Contrasena,Telefono,Especialista)
									VALUES('$Nombre','$Apellido','$img','$Correo','$Contra','$Telefono','$Especialidad')";

			if($conexion->query($sqlmaestro) == true)
			{
				$_SESSION['Usuario'] = $Nombre;
				$_SESSION['Email'] = $Correo;
				$_SESSION['Password'] = $Contra;

				header("Location: ../vista/InicioMaestro.php");
			}
	}
?>