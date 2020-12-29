    <nav class="navbar navbar-expand-lg navbar-dark c-navbartheneoxd border-bottom">
        <a class="navbar-brand" href="#">Focus On | <?php echo $row['Especialista']; ?></a>

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