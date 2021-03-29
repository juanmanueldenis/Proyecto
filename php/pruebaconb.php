<?php

include ("conexion.php");
$result = mysqli_query($conexion, "SELECT * FROM empresas");
$extraido= mysqli_fetch_array($result);
//declaro variables //
//$nombre = _$extraido['nombre']."<br/>";
//$apellido = $extraido['apellido']."<br/>";


$nombre =$_POST['nombre'];
$cuit =$_POST['cuit'];
$prov =$_POST['prov'];
$loc=$_POST['loc'];
$direc =$_POST['direc'];
$email =$_POST['emaili'];
$tel =$_POST['tel'];
$desc =$_POST['desca'];

//echo $nombre;
$sql = "INSERT INTO empresas (nomemp, cuit, provincia, localidad, direccion, telefono, mail, descpues) 
VALUES ('$nombre', '$cuit', '$prov', '$loc', '$direc',  '$tel', '$email','$desc')"; 
//$sql = "INSERT INTO alumnos (nombre) VALUES ('$nombre')"; 

if (mysqli_query($conexion, $sql)) {
      echo "REGISTRO CREADO";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}






?>
