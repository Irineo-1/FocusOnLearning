<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Registro de usuarios</title>

	<link rel="stylesheet" type="text/css" href="css/ModeladoImagenesRegistro.css">
	<link rel="stylesheet" type="text/css" href="css/controlRegistroUsuarios.css">
    <link rel="stylesheet" href="css/secciones.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark c-navbartheneoxd">
    <a class="navbar-brand" href="#">Focus On | Registro</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <img src="img/pandasolo.png" width="30" height="30" alt="">
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
	        <a class="navbar-brand" href="#">
	            <img src="img/pandasolo.png" width="30" height="30" alt="">
	        </a>
	        <a class="navbar-brand" href="../vista/index.php">
	        	Volver
	        </a>         
        </ul>
    </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-6 ocultaren">
			<div class="pic-ctn">
				<img src="img/sumatoria.jpg" alt="" class="pic">
				<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Proj-map.svg/1200px-Proj-map.svg.png" alt="" class="pic">
				<img src="https://thumbs.dreamstime.com/b/sistema-del-vector-icono-de-la-matem%C3%A1ticas-colecci%C3%B3n-matem%C3%A1tica-ejemplo-s%C3%ADmbolo-los-c%C3%A1lculos-para-sitios-web-o-el-m%C3%B3vil-153539933.jpg" alt="" class="pic">
				<img src="https://ih0.redbubble.net/image.553519320.0474/flat,550x550,075,f.u1.jpg" alt="" class="pic">
				<img src="img/fdex.jpg" alt="" class="pic">
			</div>
		</div>

		<div class="col">
			<form action="../controlador/ValidarDatosRegistro.php" method="POST" enctype="multipart/form-data">

				<h1>Crea una cuenta</h1>
				<p>No cuesta nada ;)</p>

				<div class="form-row">
				<div class="form-group col-md-6">
					<label>Nombres</label>
					<input type="text" class="form-control" name="Nombres" required="On">
				</div>
				<div class="form-group col-md-6">
					<label>Apellidos</label>
					<input type="text" class="form-control" name="Apellidos" required="On">
				</div>
				</div>
				<div class="custom-file">
					<label>Seleccionar foto de perfil</label>
    				<input type="file" class="form-control-file" id="img" name="img" required />
				</div>				
				<br><br>
				<div class="form-group">
					<label>Correo Electronico</label>
					<input type="Email" class="form-control" name="Correo" placeholder="Ejemplo@gmail.com" required="On">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" class="form-control" name="password" required="On">
				</div>
				<div class="form-group">
					<label>Telefono</label>
					<input type="number" class="form-control" name="Telefono" required="On" maxlength="10" minlength="10">
				</div>
			 	 <div class="form-group ocultarinput" id="Area">
			 	 	<label for="exampleFormControlSelect1">Profesor de:</label>
					<select class="form-control" id="exampleFormControlSelect1" name="exampleFormControlSelect1">
						<option selected></option>
						<option>Aritmetica</option>
						<option>Algebra</option>
						<option>Geometria plana y del espacio</option>
						<option>Geometria analitica</option>
						<option>Logica</option>
						<option>Probabilidad</option>
						<option>Estadistica</option>
						<option>Calculo</option>
						<option>Conjuntos</option>
						<option>Matematicas aplicada</option>
					</select>
			  	</div>
				<div class="form-row">
				<div class="form-group col-md-6">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline1" value="Hombre" name="customRadioInline1" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline1">Hombre</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline2" value="Mujer" name="customRadioInline1" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline2">Mujer</label>
					</div>
				</div>
				<div class="form-group col-md-6">
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline3" value="Estudiante" name="customRadioInline2" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline3">Estudiante</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline4" value="Maestro" name="customRadioInline2" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline4">Maestro</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="customRadioInline5" value="Maestra" name="customRadioInline2" class="custom-control-input">
					  <label class="custom-control-label" for="customRadioInline5">Maestra</label>
					</div>
				</div>

				<button type="submit" class="btn btn-outline-dark">Registrarse</button>
			</form>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





<script type="text/javascript">
	$(function()
	{
		$("#customRadioInline3").change(function()
		{
			if($(this).val() === "Estudiante")
			{
	            $("#Area").addClass("ocultarinput");
			}
		});
	});

	$( function() 
	{
	    $("#customRadioInline4").change( function() 
	    {
	        if ($(this).val() === "Maestro") 
	        {
	        	$("#Area").removeClass("ocultarinput");
	        }
	    });
	});	

	$( function() 
	{
	    $("#customRadioInline5").change( function() 
	    {
	        if ($(this).val() === "Maestra") 
	        {
	        	$("#Area").removeClass("ocultarinput");
	        }
	    });
	});	

	$( function() 
	{
	    $("#customRadioInline1").change( function() 
	    {
	        if ($(this).val() === "Hombre") 
	        {
	        	$("#customRadioInline5").prop("disabled", true);
	        	$("#customRadioInline4").prop("disabled", false);	        	
	        }
	    });
	});	

	$( function() 
	{
	    $("#customRadioInline2").change( function() 
	    {
	        if ($(this).val() === "Mujer") 
	        {
	        	$("#customRadioInline5").prop("disabled", false);
	        	$("#customRadioInline4").prop("disabled", true);	        	
	        }
	    });
	});	
</script>

</body>
</html>