<html>	
	<?php
		echo "<meta charset='UTF-8'>";
		$c=mysqli_connect ("localhost","root","","condominio") or die ("Problemas de conexión");
		mysqli_query ($c,"select * from usuarios where rut = '$_REQUEST[rut]' and password ='$_REQUEST[pass]'") or die (mysqli_error($c));
		$a=mysqli_affected_rows($c);
		if ($a == 0)
		{
			echo "<div id=a>";
			echo "<br><h1>La contraseña o el rut es incorrecto, espere unos segundos y volvera al inicio</h1>";
			echo "</div>";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=principal.html'>";
		}
		else
		{
			$req=mysqli_query ($c,"select * from usuarios where rut = '$_REQUEST[rut]' and password ='$_REQUEST[pass]'") or die (mysqli_error($c));
			$re=mysqli_fetch_array($req);
			$n=$re['nombre'];
			$ru=$re['rut'];
			if ($n == "Admin"){
				echo "<br><h1>Logeado exitosamente</h1>";
				echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
			}
			else
			{
				if($n == "Conserje"){
					echo "<br><h1>Logeado exitosamente</h1>";
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=mostrar.php'>";
				}
				else{
					echo "<br><h1>Logeado exitosamente</h1>";
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=paguser.php?nomb=$n&noti=%&rut=$ru'>";
				}
			}
		}
	?>
	
</html>