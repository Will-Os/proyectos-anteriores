<!DOCTYPE>
<html>
<head>
	<title> Insertando en Formulario</title>
		<link rel="stylesheet" href="assets/css/styles.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
</head>
<?php
date_default_timezone_set('America/Santiago');
$fecha = getdate();
$con=mysqli_connect("localhost","root","","a") or die ("Problemas de conexión");
mysqli_query($con,"insert into trabajadores(id_tra,nombre,apellidos) VALUES ('$_REQUEST[id]','$_REQUEST[nombre]','$_REQUEST[apellido]')") or die (mysqli_error($con));
mysqli_close($con);

echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=insertar.php'>";

?>
 
</body>
</html>