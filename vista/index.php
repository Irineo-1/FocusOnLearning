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

<article>
<!-- --------------------------------------------------Inicio de la Navar---------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark c-navbartheneoxd fixed-top">
        <a class="navbar-brand" href="#">Focus On |</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <img src="img/pandasolo.png" width="30" height="30" alt="">
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            <a class="navbar-brand" href="#">
                <img src="img/pandasolo.png" width="30" height="30" alt="">
            </a>

            </ul>
            <form class="form-inline my-2 my-lg-0">
            <button type="button" class="btn btn-outline-light my-2 my-sm-0 mr-3" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Iniciar sesion</button>
            <button type="button" class="btn btn-outline-light" onclick="window.location = 'RegistroUsuarios.php'">Registrarse</button>
            </form>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Iniciar seción</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <form action="../controlador/ValidarInicio.php" method="POST">
            <div class="modal-body">
                <div class="form-group" id="Area">
                    <select class="form-control" id="exampleFormControlSelect1" name="exampleFormControlSelect1">
                        <option selected>Estudiante</option>
                        <option>Maestro</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label class="col-form-label">Primer o primeros nombres:</label>
                    <input type="text" class="form-control" name="Nombre" required="on">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Correo:</label>
                    <input type="Email" class="form-control" name="Correo" required="on">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Contraseña:</label>
                    <input type="password" class="form-control" name="Contra" required="on">
                </div>              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Listo</button>
            </div>
        </form>
        </div>
      </div>
    </div>    
<!-- --------------------------------------------------Final de la Navar---------------------------------------------------------- -->

<div class="Cabezera">
    <img class="imagenfondo" src="img/matematicas2.jpg" alt="">
    <div class="contenidoCB row align-items-center">
        <div class="col derecha">
            <img class="animacion-panda" src="img/pandasolo.png" alt="">
        </div>
        <div class="col">
            <h1 class="titulo font-weight-bold">FOCUS ON</h1>
            <p class="badge badge-light text-wrap">MATEMATICAS</p>
            <div class="w-100"></div>
            <button type="button" class="btn btn-outline-light col-md-4" onClick="window.location='#s1'">Empezar</button>
        </div>
    </div>
    <div class="linea"></div>
    <div class="barraabajo row align-items-center">
        <div class="col">
            <img src="img/aprende.png" alt="">
            <p>Aprende de una manera nueva.</p>
        </div>
        <div class="col">
            <img src="img/abilidad.png" alt="">
            <p>Desarrolla esa habilidad oculta.</p>
        </div>
        <div class="col">
            <img src="img/buscar.png" alt="">
            <p>Busca lo que nesecites.</p>
        </div>
    </div>    
</div>

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

</article>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="js/jQuery.progressBar.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script>
    $('article').progressBar({
        throttleTime:100,
        dobounceTime:200,
        progressBarHeight:7,
        progressBarColor:'#fff',
        progressBarValueColor:'#57039a',
        progressBarTopPosition: 55,
    });

</script>

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