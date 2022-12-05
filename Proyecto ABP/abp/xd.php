<html>
<head>
	<link rel="stylesheet" href="assets/css/styles.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
</head>
<?php
	date_default_timezone_set('America/Santiago');
	$fecha = getdate();
	echo "El dia es: $fecha[mday]-$fecha[mon]-$fecha[year]";
	echo "<br>";
	echo "La hora es: $fecha[hours]:$fecha[minutes]:$fecha[seconds]";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='1;URL=xd.php'>";
?>
</html>