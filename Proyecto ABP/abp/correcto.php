<html>
	<head>
		<meta charset="UTF-8">
	</head>
	    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
		<center><br><h1 style='color: white'>El trabajador ya ingresó su hora de entrada y salida este dia</h1>
	<?php
		$id=$_GET['id'];
	echo "<center style='color: white'>El RUT del trabajador es ".$id."</center><br>";
	echo "<font size=9 color=white>Es esto correcto?</font>";
	echo "<form action='seguridad.php?id=$id' method='post'>";
	echo "<input type='radio' Name='sino' value='si'>SI<br>";
	echo "<input type='radio' Name='sino' value='no'>NO<br>";
	echo "<input type='submit' value='CONFIRMAR' class='btn--primary'></center>";
	?>
</form>
</html>