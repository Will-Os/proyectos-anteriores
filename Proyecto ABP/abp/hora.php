<html>
	<head>
		    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="assets/css/styles.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
	</head>
	<?php
		date_default_timezone_set('America/Santiago');
		$fecha = getdate();
		$c=mysqli_connect ("localhost","root","","a") or die ("Problemas de conexión");
		mysqli_query ($c,"select * from trabajadores where id_tra = '$_REQUEST[id]'") or die (mysqli_error($c));
		$a=mysqli_affected_rows($c);
		if ($a == 0)
		{
			echo "<div id=a>";
			echo "<br><h1 style='color: white;'><center>No existe ningun trabajador con ese rut</center></h1>";
			echo "</div>";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=principal.html'>";
		}
		else
		{
			mysqli_query ($c,"select * from hora_e where id_tra = $_REQUEST[id] and dia = '$fecha[year]-$fecha[mon]-$fecha[mday]'") or die (mysqli_error($c));
			$a=mysqli_affected_rows($c);
			if($a == 0){
				mysqli_query($c,"insert into hora_e(id_tra,hora_e,dia) VALUES ('$_REQUEST[id]','$fecha[hours]:$fecha[minutes]:$fecha[seconds]','$fecha[year]-$fecha[mon]-$fecha[mday]')") or die (mysqli_error($c));
				echo "<h1 style='color: white;'><center>Fecha y hora insertada correctamente</center></h1>";
				echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=principal.html'>";
			}
			else
			{
				mysqli_query ($c,"select * from hora_s where id_tra = $_REQUEST[id] and dia = '$fecha[year]-$fecha[mon]-$fecha[mday]'") or die (mysqli_error($c));
				$a=mysqli_affected_rows($c);
				if($a == 0){
					mysqli_query($c,"insert into hora_s(id_tra,hora_s,dia) VALUES ('$_REQUEST[id]','$fecha[hours]:$fecha[minutes]:$fecha[seconds]','$fecha[year]-$fecha[mon]-$fecha[mday]')") or die (mysqli_error($c));
					echo "<h1 style='color: white;'><center>Fecha y hora insertada correctamente</center></h1>";
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=principal.html'>";
				}
				else{
					$idt=$_REQUEST['id'];
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=correcto.php?id=$idt'>";
				}
			}
		}
	?>
</html>
