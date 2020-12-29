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

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/InicioMaestro.css">
    <link rel="stylesheet" href="css/secciones.css">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- --------------------------------------------------Inicio de la Navar---------------------------------------------------------------- -->
<?php require 'NavarMaestro.php'; ?>

<?php require 'SubNavMaestro.html'; ?>
<!-- --------------------------------------------------Final de la Navar----------------------------------------------------------------- -->

<div class="container">
	<br>
	<div class="row">
		<div class="col">
			<div class="main">
				<ul class="cards">

		<?php 
			$sqlC = "SELECT * FROM cursos WHERE idMaestro = '$id'";
			$r = $conexion->query($sqlC);
			while($C = $r->fetch_assoc())
			{
		?>
					<li class="cards_item">
						<div class="card">
							<div class="card_image">
								<img src="data:image/png;base64,<?php echo base64_encode($C['ImagenPresentacion']); ?>">
							</div>

							<div class="card_content">
								<h2 class="card_title"><?php echo $C['Titulo']; ?></h2>
								<p class="card_text"><?php echo $C['SubTitulo']; ?></p>
								<button class="btn card_btn">Read More</button>
							</div>
						</div>
					</li>
					
		<?php 	
			} 
		?>
				</ul>
			</div>	
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>