<?php
	$hor=$_REQUEST['hora'];
	$di =$_REQUEST['dmes'];
	file_put_contents('scripts\\creartarea.bat','schtasks /CREATE /TN "Envio" /TR c:\wamp\www\daw\scripts\enviarcorreo.bat /SC monthly /mo 1 /d '.$di.' /ST '.$hor.':00 /F');
	$c=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
	mysqli_query($c,"update fecha_lim set dia=$di , hora='$hor'");
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=admin.php'>";
?>