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
		$sql = "SELECT * FROM estudiantes where Nombres = '$Nombre_Usuario' 
		and Contrasena = '$Contra_Usuario' 
		and Email = '$Correo_Usuario'";     

		$resultado=$conexion->query($sql);

		$row = $resultado->fetch_assoc();
		$id = $row['id'];		

    	$cargarImagen = "SELECT FotoPerfil FROM estudiantes where id = '$id'";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/secciones.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- --------------------------------------------------Inicio de la Navar---------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark c-navbartheneoxd border-bottom">
        <a class="navbar-brand" href="#">Focus On | Bienvenido</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
				<img src="data:image/png;base64,<?php echo base64_encode($imagen['FotoPerfil']); ?>" class="fotoperfil" width="30" height="30" alt="...">
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            <a class="navbar-brand oculto" href="#">
            	<?php echo $Nombre_Usuario;?>
            </a>
            <a class="navbar-brand oculto" href="#">
            	Perfil
            </a>
            <a class="navbar-brand oculto" href="../controlador/CerrarSession.php">
            	Salir
            </a>                        

            </ul>
            <form class="form-inline my-2 my-lg-0">
				<div class="btn-group dropleft">
				  <button type="button" class="btn btn-secondary dropdown-toggle color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			     	<img src="data:image/png;base64,<?php echo base64_encode($imagen['FotoPerfil']); ?>" class="fotoperfil" width="30" height="30" alt="...">
				  </button>
				  <div class="dropdown-menu">
					<button class="dropdown-item" type="button"><?php echo $Nombre_Usuario;?></button>					  	
				    <a class="dropdown-item" href="../controlador/CerrarSession.php">Salir</a>
				    <a class="dropdown-item" href="#">Perfil</a>
				  </div>
				</div>		     	 
            </form>
        </div>
    </nav>

	<nav class="navbar navbar-expand-lg navbar-dark c-subnavbartheneoxd">
	    <div class="container">
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="navbar-collapse collapse" id="navbar10">
	            <ul class="navbar-nav nav-fill w-100">
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Ofertas</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Primeros pasos</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Te puede interezar..</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Chat</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="#">Lo mas visto</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	</nav>
<!-- --------------------------------------------------Final de la Navar---------------------------------------------------------- -->


<div class="Seccion container" id="s1" data-aos="fade-right"
     data-aos-offset="500"
     data-aos-easing="ease-in-sine">

    <div class="contenidoBD">
        <div class="row align-items-end">
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>        
        </div>

        <div class="row align-items-center">
            <div class="col">
                <div class="owl-carousel owl-theme card-group">
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Aritmetica.jpg" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Aritmetica</div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/algebra-s1.jpg" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Algebra</div>
                                <div class="card-footer"> 
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Geometria_plana_ydel_espacio.png" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Geometria plana y del espacio</div>
                                <div class="card-footer"> 
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Geometria_analitica.jpg" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Geometria analitica</div>
                                <div class="card-footer"> 
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Logica.jpg" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Logica</div>
                                <div class="card-footer"> 
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Probabilidad.png" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Probabilidad</div>
                                <div class="card-footer"> 
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Estadistica.jpg" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Estadistica</div>
                                <div class="card-footer"> 
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Calculo.jpg" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Calculo</div>
                                <div class="card-footer"> 
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Conjuntos.jpg" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Conjuntos</div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card largoTergeta">
                            <img data-src="img/Matematicas_aplicada.jpg" class="card-img-top owl-lazy">
                            <div class="card-body">
                                <div class="card-title">Matematicas aplicada</div>
                                <div class="card-footer"> 
                                    <a href="#" class="btn btn-outline-dark">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </div>
</div>

<div class="Seccion container" id="s2">

</div>

<div class="Seccion container">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, cumque recusandae? Praesentium, reiciendis harum facere in ipsa consectetur quisquam hic dolor non. Blanditiis est a sequi ipsa alias quod fugit.</p>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="js/owl.carousel.min.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayHoverPause:true,
        lazyLoad: true,
        margin: 2,
        stagePadding: 5,
        responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:6
                }
        }
    });
</script>

<script>
    AOS.init();
</script>
</body>
</html>