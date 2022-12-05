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
		$id = $_GET['id'];
		$opc = $_POST['sino'];
		$c=mysqli_connect ("localhost","root","","a") or die ("Problemas de conexión");
		if ($opc == 'si')
		{
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=principal.html'>";
		}
		else
		{
			mysqli_query($c,"delete from hora_s where id_tra='$id' and dia='$fecha[year]-$fecha[mon]-$fecha[mday]'") or die (mysqli_error($c));
			echo "<center><h1 style='color: white;'>La hora de salida ha sido borrada exitosamente</h1></center>";
			echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=principal.html'>";
		}
	?>
</html>
