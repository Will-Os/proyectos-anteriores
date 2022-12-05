<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO REALIZADO</title>
</head>
<body>
<?php

$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
mysqli_query($con,"insert into control_acc (nom_visita,rut_visita,depto_visita) VALUES ('$_REQUEST[nom_visita]','$_REQUEST[rut_visita]','$_REQUEST[depto_visita]')") or die (mysqli_error($con));

mysqli_query($con,"UPDATE estacionamiento set estado='ocupado',nom_visita='$_REQUEST[nom_visita]',rut_visita='$_REQUEST[rut_visita]',depto_visita='$_REQUEST[depto_visita]' WHERE num='$_REQUEST[num]'") or die (mysqli_error($con)); 
mysqli_close($con);
echo "<META HTTP-EQUIV='REFRESH' CONTENT='1;URL=mostrar.php'>";
?>
</form>
</body>
</html>