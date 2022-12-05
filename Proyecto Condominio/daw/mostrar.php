<!DOCTYPE html>
<html lang="es">
<style type="text/css">

#logo {
    background-image: url(../img/aconcagua-logo.png);
    width: 180px;
    height: 90px;
    background-size: 190px 40px;
    -o-transition: .5s;
    transition: .5s;
	float: left;
aside{
background-color: #A3F14B;
width: 300px;
height: 700px;
}
header {
display: block;
}
h3{
margin-top: 50;
margin-left: 400px;
}
</style>
<head>
	<header>
	<img src="https://sites.google.com/site/losalercesquito/_/rsrc/1472781690756/config/customLogo.gif?revision=2" id="logo"></img>
	<meta charset="UTF-8">
<form action="Principal.html" style="float: right">
<input type="submit" value="Cerrar Sesión">
</form>
<br>
<h3  style="margin-left: 555px; margin-top: 50px">CONTROL DE ACCESO</h3>

	<center><form action="control.html" method="post"></center>
	<center><input type="submit" value="VISITA"></center>
</form>
<center><form action="ControlInserta.php" method="post"></center>
	<center><input type="submit" value="VISITA AUTO"></center>
</form>
<center><form action="salida.html" method="post"></center>
	<center><input type="submit" value="SALIDA"></center>
</form>
</header>
<meta charset="UTF-8">
</head>
<body>
<?php
echo "<h3 align='center'>Respaldar datos de acceso</h3>";
echo "<h5 align='center'>Descargar y ejecutar el archivo <a href='scripts\backup.bat'>BACKUP</a>, si no se descarga repetir el proceso</h5>";
?>
</body>
</html>