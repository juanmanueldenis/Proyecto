<?php

include 'conexion.php';
		
	$result = mysqli_query($conexion, "SELECT * FROM alumnos");

	/*while($extraido= mysqli_fetch_array($result)){

	echo "- nombre: ".$extraido['nombre']."<br/>";

	echo "- apellido: ".$extraido['apellido']."<br/>";

	echo "- email: ".$extraido['email']."<br/>";
	}*/



$s = '<table border="1">';
foreach ( $result as $r ) {
        $s .= '<tr>';
        foreach ( $r as $v ) {
                $s .= '<td>'.$v.'</td>';
        }
        $s .= '</tr>';
}
$s .= '</table>';
echo $s;

?>