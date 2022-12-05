<!DOCTYPE html>
<html lang="es">
<head><title>Tabla de trabajadores</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon"></head>
<style>
tr {color: white; border: 2px green solid}
</style>
    <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="assets/css/styles.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />
<div style='margin-top: -180px'>
<?php
$con=mysqli_connect("localhost","root","","a") or die ("PROBLEMAS CON LA BASE DE DATOS");
//Elejir FECHA
$sel=mysqli_query($con,"select dia from hora_s group by dia order by dia desc");
echo "<DIV style='float: right; margin-top: 150px'><form action='index.html' method='post'> 
    <input type='submit' value='VOLVER A LA PÁGINA PRINCIPAL' class='btn--primary' style='height: 50px;'>
</form><br></div>";
echo "<form action='tabla.php' method='post' id='fech'>
   <h4 style='color: white'> ELEGIR FECHA:</h4>&nbsp;&nbsp;<select name='fe' form='fech'>
	<optgroup label='Seleccione la fecha del filtro'>
	<option selected='selected' value='%'>Todas</option>";
	while($se=mysqli_fetch_array($sel))
	{
	echo "<option value='",$se['dia'],"'>",$se['dia'],"</option>";
	}
echo"<input type='submit' value='FILTRAR' class='btn--primary'  style='height: 50px;'>
	</form>
	</optgroup>
	</select>";

//Mostrar tabla
$registr=mysqli_query($con,"select trabajadores.id_tra,trabajadores.nombre,trabajadores.apellidos,hora_s.hora_s,hora_s.dia from trabajadores inner join hora_s on trabajadores.id_tra = hora_s.id_tra where hora_s.dia like '$_REQUEST[fe]' order by hora_s.dia desc,hora_s.id_tra") or die (mysqli_error($con));
$horaent=mysqli_query($con,"select trabajadores.id_tra,trabajadores.nombre,trabajadores.apellidos,hora_e.hora_e,hora_e.dia from trabajadores inner join hora_e on trabajadores.id_tra = hora_e.id_tra where hora_e.dia like '$_REQUEST[fe]' order by hora_e.dia desc,hora_e.id_tra") or die (mysqli_error($con));
echo "<center ><table border=8 cellpadding=4 cellspacing=5></center>";
echo '<tr>';
echo '<th colspan=6><h4 style="color: white"><center><i>TABLA DE HORAS DE ENTRADA Y SALIDA</center></i></h4></th>';
echo "<font color='white'>";
echo '</tr>';
echo '<tr>';
echo '<th style="color: green; border: 2px green solid"><center>Rut</center></th>';
echo '<th style="color: green; border: 2px green solid"><center>Nombre</center></th>';
echo '<th style="color: green; border: 2px green solid"><center>Apellido</center></th>';
echo '<th style="color: green; border: 2px green solid"><center>Hora de entrada</center></th>';
echo '<th style="color: green; border: 2px green solid"><center>Hora de salida</center></th>';
echo '<th style="color: green; border: 2px green solid"><center>Fecha</center></th>';
echo '</tr>';
while($hor=mysqli_fetch_array($horaent) and $re=mysqli_fetch_array($registr))
{
echo '';
echo '<tr>';
echo '<h6>';
echo '<td>';
echo $re['id_tra'];
echo '</td>';
echo '';
echo '<td>';
echo $re['nombre'];
echo '</td>';
echo '';
echo '<td>';
echo $re['apellidos'];
echo '</td>';
echo '<td>';
echo $hor['hora_e'];
echo '</td>';
echo '<td>';
echo $re['hora_s'];
echo '</td>';
echo '<td>';
echo $re['dia'];
echo '</td>';
echo '';
echo '</h6>';
echo '</tr>';
}
//Volver al inicio
mysqli_close($con);
?>
</div>
</html>