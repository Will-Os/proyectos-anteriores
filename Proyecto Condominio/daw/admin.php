<html>
<meta charset='UTF-8'><head>
<center>
<h1>PÁGINA DE ADMINISTRACIÓN</h1></center>
<div style='float: right;margin-top: -50px'>
<form action='Principal.html'>
<input type='submit' value='Cerrar Sesión'>
</form>
</div>
</head>
<div style='text-align: left; border-style: solid; border-width: 3px; float: left; height: 550px; width: 520px'>
<div style='margin: 5px 5px 5px 5px'>
<h4>Crear Noticia</h4>
<form action='insertnoticia.php' id='add'>
Título de la noticia:<br><input type='text' name='titulo' placeholder='Aquí se pone el título de la noticia' style='width: 400px'><br>
Contenido de la noticia:<br><textarea name='texto' id='add' rows='24' placeholder='Aquí puedes redactar una noticia' style='resize: none; width: 400px'></textarea>
<br><input type='submit' value='Enviar noticia'>
</div></div>
</form>
<?php
$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
$sel=mysqli_query($con,"select * from usuarios where(nombre <> 'Admin' and nombre <> 'Conserje')");
echo		"<div style='text-align: left; border-style: solid; border-width: 3px; border-left: 0 solid black;border-right: 0 solid black ;float: left; height: 550px; width:565px'>
			 <div style='margin: 5px 5px 5px 5px'>";
echo 		"<h4>Enviar Correo</h4>";
echo 		"<form action='correo.php' id='correo' method='post'>";
echo 		"Seleccionar destinatario:<br><select name='envio' form='correo' style='width: 400px'>";
echo		"<optgroup label='Seleccione el destinatario'>";
echo 		"<option selected='selected' value='%'>CORREO MASIVO</option>";
			while($se=mysqli_fetch_array($sel))
			{
			echo "<option value='",$se['correo'],"'>",$se['correo'],"</option>";
			}
echo		"</select>";
echo		"<br>Asunto:<br><input type='text' name='enc' placeholder='Aquí va el encabezado' style='width: 400px'>";
echo 		"<br>Contenido:<br><textarea name='cont' cols='50' rows='20' placeholder='Aquí puedes escribir el correo' style='resize: none; width: 400px'></textarea>";
echo		"<br><input type='submit' value='Enviar correo'>";
echo "</form>";
echo "</div></div>";
?>
<div style='text-align: right; border-style: solid; border-width: 3px; float: left; height: 378px; width:230px'>
<div style='margin: 3px 3px 3px 3px'>
<h4>Insertar usuario</h4>

<form action='inuser.php' method='post'>
Rut: <input type='text' name='rut'><br>
Nombre: <input type='text' name='nom'><br>
Correo: <input type='text' name='cor'><br>
Contraseña: <input type='text' name='pass'><br>
<input type='submit' value='Insertar usuario'>
</form>
<h4>Eliminar usuario</h4>
<form action='deluser.php' method='post'>
Rut: <input type='text' name='rut'><br>
<input type='submit' value='Eliminar usuario'>
</form>
</div></div>
<?php
echo "<div style='border-style: solid; border-width: 3px; float: left;border-top: 0 solid black; height: 169px;width: 230px'> <div style='margin: 5px 5px 5px 5px'>";
echo "<h4> Control de reuniones </h4>";
echo "<form action='reunion.php' method='post'>";
echo "<br><input type='submit' value='LISTA REUNION'>";
echo "</form>";
echo "<form action='mailreunion.php' id='correo' method='post'>";
echo "<br><input type='submit' value='CORREO REUNION'>";
echo "</form>";
echo "</div></div>";
$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
$f=mysqli_query($con,'select * from fecha_lim');
$tab=mysqli_query($con,"select * from archivos order by fecha_ent desc");
$diam=1;
echo "<div style='text-align: left;float: left;border-style: solid; border-width: 3px;border-top: 0 solid black;height: 550px;width: 798'><div style='margin: 5px 5px 5px 5px'>";
echo "<h3>Establecer fecha límite de pago</h3>";
echo "<h5 style='width: 250px'>Este formulario sirve para establecer el día limite de pago de todos los meses, los dias para seleccionar llegan hasta 28 ya que se tiene en cuenta a febrero</h5>";
echo "<form method='post' name='mes' action='tarea.php'>";
echo "Seleccionar día del mes:<select name='dmes' style='width: 50px'>";
while($diam<29){
echo "<option value='".$diam."'>".$diam."</option>";
$diam++;
}
echo "</select>";
echo "<br>Seleccionar hora (Formato 24hrs):";
echo "<input type=time name='hora'>";
echo "<br><input type=submit value='Establecer fecha y hora'>";
echo "</form>";
echo "Una vez establecida la fecha, descargar y ejecutar el archivo <a href='scripts\creartarea.bat'>creartarea.bat</a>, si no se descarga repetir el proceso";
$fl=mysqli_fetch_array($f);
echo "<br><h4>Dia establecido para el ".$fl['dia']." de cada mes a las ".$fl['hora']."</h4>";
echo "<br><br><h4>Cambiar el documento del reglamento</h4>";
echo "<form action='reglamento.php' method='post' enctype='multipart/form-data'>
	Seleccionar arch: <input type='file' name='arch' value='Seleccionar Archivo'><br>
	<input type='submit' value='Subir'>
	</form>";
echo "<a href=reglamento/reglamentoact.pdf>Ver el reglamento aquí</a>";
echo "</div></div>";
echo "<div style='float:  left;border-style: solid; border-width: 3px;border-left: 0 solid black;border-top: 0 solid black; overflow-y:scroll; height: 550px; width:520px'><div style='margin: 5px 5px 5px 5px'>";
if(mysqli_affected_rows($con)==0){
echo"<h1>AÚN NO HAN HABIDO PAGOS ESTE MES</h1>";
}else{
echo "<center><table border=8 cellpadding=4 cellspacing=5></center>";
echo '<tr>';
echo '<th colspan=4><h4><i>TABLA DE PAGOS MENSUALES</i></h4><br>En esta tabla se mostrarán los archivos subidos de este mes</th>';
echo '</tr>';
echo '<tr>';
echo '<th>Rut</th>';
echo '<th>Nombre del archivo</th>';
echo '<th>Fecha de entrega</th>';
echo '<th>Hora de entrega</th>';
echo '</tr>';
}
while($re=mysqli_fetch_array($tab))
{
echo '';
echo '<tr>';
echo '<td>';
echo $re['rut'];
echo '</td>';
echo '';
echo '<td>';
echo '<a href='.$re['nom_arch'].'>';
echo $re['nombre'].'</a>';
echo '</td>';
echo '';
echo '<td>';
echo $re['fecha_ent'];
echo '</td>';
echo '<td>';
echo $re['hora_ent'];
echo '</td>';
echo '</tr>';
}
echo "</div></div>";
?>
</html>