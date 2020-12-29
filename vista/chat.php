<?php
	require 'php/conexion.php';
	///consultamos a la base
	$consulta = "SELECT * FROM chatmaestros";
	$ejecutar = $conexion->query($consulta); 
	while($fila = $ejecutar->fetch_array()) : 
?>
	<div id="datos-chat">
		<span style="color: #1C62C4;"><?php echo $fila['Nombre']; ?></span>
		<span style="color: #848484;"><?php echo $fila['Mensaje']; ?></span>
		<span class="hora" style="float: right;"><?php echo formatearFecha($fila['Fecha']); ?></span>
	</div>
	
	<?php endwhile; ?>
