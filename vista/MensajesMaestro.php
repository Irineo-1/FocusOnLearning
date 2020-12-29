<?php 

	session_start();

	require 'php/conexion.php';
	
	$Nombre_Usuario = $_SESSION['Usuario'];
	$Correo_Usuario = $_SESSION['Email'];
	$Contra_Usuario = $_SESSION['Password'];

	if($Nombre_Usuario == "" && $Correo_Usuario == "" && $Contra_Usuario == "")
	{
		header("Location: index.php");
	}
	else
	{
		$sql = "SELECT * FROM maestros where Nombres = '$Nombre_Usuario' 
		and Contrasena = '$Contra_Usuario' 
		and Email = '$Correo_Usuario'";     

		$resultado=$conexion->query($sql);

		$row = $resultado->fetch_assoc();
		$id = $row['id'];		

    	$cargarImagen = "SELECT FotoPerfil FROM maestros where id = '$id'";
    	$respuesta = $conexion->query($cargarImagen);
    	$imagen = $respuesta->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Focus on</title>

    <link rel="stylesheet" type="text/css" href="css/chat.css">
    <link rel="stylesheet" href="css/secciones.css">    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'chat.php', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 1000);
	</script>    

</head>
<body onload="ajax();">

<!-- --------------------------------------------------Inicio de la Navar---------------------------------------------------------------- -->
<?php require 'NavarMaestro.php'; ?>

<?php require 'SubNavMaestro.html'; ?>
<!-- --------------------------------------------------Final de la Navar----------------------------------------------------------------- -->

<div class="container">
	<div class="row">
		<div class="col">
			<div id="caja-chat">
				<div id="chat"></div>
			</div>

			<form action="" method="POST">
				<div class="form-group">
				    <textarea class="form-control" name="Mensaje" rows="1" placeholder="Escribir mensaje..."></textarea>
				</div>
				<button type="submit" name="Enviar" class="btn btn-outline-dark">Enviar</button>
			</form>			

		</div>
	</div>
</div>

<?php 

	if(isset($_POST['Enviar']))
	{
		$mensaje = $_POST['Mensaje'];
		$registrarMensaje = "INSERT INTO chatMaestros(Nombre,Mensaje)
									   VALUES('$Nombre_Usuario','$mensaje')";

		$registrarMensaje = $conexion->query($registrarMensaje);

			echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";

	}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>