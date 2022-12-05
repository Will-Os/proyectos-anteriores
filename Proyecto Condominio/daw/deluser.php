<html>
	<meta charset = "UTF-8">
	<?php
		$c=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
		mysqli_query ($c,"select * from usuarios where rut = '$_REQUEST[rut]'") or die (mysqli_error($c));
		$ver=mysqli_affected_rows($c);
		if($ver == 0)
		{
			echo "Este rut no existe";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
		}
		else{
			mysqli_query($c,"delete from reunion where rut='$_REQUEST[rut]'");
			mysqli_query($c,"delete from usuarios where rut='$_REQUEST[rut]'");
			echo "Usuario eliminado correctamente";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
		}
	?>
</html>