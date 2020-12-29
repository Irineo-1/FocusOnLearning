<?php 

	require '../vista/php/conexion.php';

	session_start();

	$Titulo = $_POST['titulo'];
	$STitulo = $_POST['stitulo'];
	$Descripcion = $_POST['Descripcion'];
	$img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$LVideo = $_POST['LVideo'];
	$Contenido = $_POST['Contenido'];

	$idMaestro = $_SESSION['id'];

	$sql = "INSERT INTO cursos(Titulo,SubTitulo,Descripcion,ImagenPresentacion,VideoPresentacion,Contenido,idMaestro)
						VALUES('$Titulo','$STitulo','$Descripcion','$img','$LVideo','$Contenido','$idMaestro')";

	if($conexion->query($sql))
	{
		header("Location: ../vista/InicioMaestro.php");
	}

?>