<html  bgcolor="#111111">
<head> 
<meta charset="UTF-8">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
	 <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
	<link rel="stylesheet" href="assets/css/styles.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
<title> Insertar</title>
</head>
<style>
tr {color: white; border: 2px green solid}
</style>
<body  bgcolor="#111111"> <div style='margin-top: -190;'>
<form action="inserta.php" method="post">
    <h1 style='color: white;'> INSERTAR TRABAJADOR</h1>
    RUT: <input type="text" name="id" > 
	NOMBRE: <input type="text" name="nombre">
	APELLIDO: <input type="text" name="apellido"><br>
    <input type="submit" value="INSERTAR" class='btn--primary'>
</form>
<form action="elimina.php" method="post">
    <h1 style='color: white;'> ELIMINAR TRABAJADOR</h1>
    RUT: <input type="text" name="id"><br>
    <input type="submit" value="ELIMINAR" class='btn--primary'>
</form>
<div style='float: right;margin-right: 3px; height: 640px;border: 3px green solid; margin-top: -550px;overflow-y:scroll'>
<?php
$con=mysqli_connect("localhost","root","","a") or die ("PROBLEMAS CON LA BASE DE DATOS");
$tab=mysqli_query($con,"select * from trabajadores");
echo "<center><table border=8 cellpadding=4 cellspacing=5></center>";
echo '<tr>';
echo '<th colspan=3><h4 style="color: white"><center><i>TRABAJADORES REGISTRADOS ACTUALMENTE</i></center></h4></th>';
echo '</tr>';
echo '<tr>';
echo '<th style="color: green; border: 2px green solid"><center>Rut</center></th>';
echo '<th style="color: green; border: 2px green solid"><center>Nombre</center></th>';
echo '<th style="color: green; border: 2px green solid"><center>Apellido</center></th>';
echo '</tr>';
while($tra=mysqli_fetch_array($tab))
{
echo '';
echo '<tr>';
echo '<td>';
echo $tra['id_tra'];
echo '</td>';
echo '';
echo '<td>';
echo $tra['nombre'];
echo '</td>';
echo '';
echo '<td>';
echo $tra['apellidos'];
echo '</td>';
echo '</tr>';
}
?>
</div>
</div>
</body>
</html>