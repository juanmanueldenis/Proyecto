<?php
	include 'conexion.php';
		
	$result = mysqli_query($conexion, "SELECT * FROM alumnos");

	while($extraido= mysqli_fetch_array($result)){

	echo "- nombre: ".$extraido['nombre']."<br/>";

	echo "- apellido: ".$extraido['apellido']."<br/>";

	echo "- email: ".$extraido['email']."<br/>";
		
	
}	










?>
