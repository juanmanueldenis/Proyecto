
<?php

include 'conexion.php';
	$result = mysqli_query($conexion, "SELECT * FROM empresas");

	/*while($extraido= mysqli_fetch_array($result)){

	echo "- nombre: ".$extraido['nombre']."<br/>";

	echo "- apellido: ".$extraido['apellido']."<br/>";

	echo "- email: ".$extraido['email']."<br/>";
	}*/


echo  "Ofertas Laborales";
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

?><br></br>

<?php

include 'conexion.php';
		
	$result = mysqli_query($conexion, "SELECT * FROM alumnos");

	/*while($extraido= mysqli_fetch_array($result)){

	echo "- nombre: ".$extraido['nombre']."<br/>";

	echo "- apellido: ".$extraido['apellido']."<br/>";

	echo "- email: ".$extraido['email']."<br/>";
	}*/


echo "POSTULANTES";
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