<?php

include ("conexion.php");
$result = mysqli_query($conexion, "SELECT * FROM alumnos");
$extraido= mysqli_fetch_array($result);
//declaro variables //
//$nombre = _$extraido['nombre']."<br/>";
//$apellido = $extraido['apellido']."<br/>";


$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$tdoc =$_POST['tdoc'];
$ndoc=$_POST['ndoc'];
$fnac =$_POST['fnac'];
$email =$_POST['emaili'];
$carrera =$_POST['carrera'];
$año =$_POST['año'];
$exp =$_POST['exp'];

//echo $nombre;
$sql = "INSERT INTO alumnos (nombre, apellido, tdoc, ndoc, fnac, email, carrera, año, exp) VALUES ('$nombre', '$apellido', '$tdoc', '$ndoc', '$fnac', '$email', '$carrera', '$año', '$exp')"; 
//$sql = "INSERT INTO alumnos (nombre) VALUES ('$nombre')"; 

if (mysqli_query($conexion, $sql)) {
      echo "REGISTRO CREADO";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}






?>


<html>
<nav class="volver">
			
			<section id="v">
				<a href="../regalum.html">VER PROPUESTAS DE TRABAJO</a>
		</section>
		</nav>

</html>