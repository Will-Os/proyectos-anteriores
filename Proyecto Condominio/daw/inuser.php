<html>
	<meta charset = "UTF-8">
	<?php
		$c=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
		mysqli_query ($c,"select * from usuarios") or die (mysqli_error($c));
		$vera=mysqli_affected_rows($c);
		if($vera == 62)
		{
			echo "No se pueden crear más usuarios";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
		}
		else {
		mysqli_query ($c,"select * from usuarios where rut = '$_REQUEST[rut]'") or die (mysqli_error($c));
		$ver=mysqli_affected_rows($c);
		if($ver == 0)
		{
			mysqli_query($c,"insert into usuarios (rut,nombre,correo,password) VALUES ('$_REQUEST[rut]','$_REQUEST[nom]','$_REQUEST[cor]','$_REQUEST[pass]')");
			echo "Usuario insertado correctamente";
			mysqli_query($c,"insert into reunion (rut,estado) VALUES ('$_REQUEST[rut]','ausente')");
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
		}
		else{
			echo "Este rut ya está registrado";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
		}
		}
	?>
</html>