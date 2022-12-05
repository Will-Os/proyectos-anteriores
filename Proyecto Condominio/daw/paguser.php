<html>
	<meta charset="UTF-8">
	<?php
		date_default_timezone_set('America/Santiago');
		$dte=getdate();
		$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
		$f=mysqli_query($con,'select * from fecha_lim');
		$fl=mysqli_fetch_array($f);
		$nom=$_GET['nomb'];
		$title=$_GET['noti'];
		$ru=$_GET['rut'];
		$noti=mysqli_query($con,"select * from noticias where titulo like '$title' order by num desc");
		$sel=mysqli_query($con,"select * from noticias group by titulo order by num desc");
		echo "<header>";
		echo "<center><h1>Bienvenido, ",$nom,"</h1></center>";
		echo"<div style='float: right; margin-right: 5px; margin-top: -50px'>
		<form action='Principal.html'>
		<input type='submit' value='Cerrar Sesión'>
		</form></div><hr color='black'>";
		echo "</header>";
		echo "<div style='height:552px;width: 820px;border-style: solid;border-left: 0;border-width: 2px; float: right; margin-right: 5px'><div style='margin: 3px 3px 3px 3px;'><div style='text-align: right'>";
		echo "<h2>Subir archivo de pago</h2>";
		echo "<h4>Solo se acepta PDF<h4>";
		echo "<form action='archivos.php?nomb=$nom&noti=$title&rut=$ru' method='post' enctype='multipart/form-data'>
		Seleccionar arch: <input type='file' name='arch' value='Seleccionar Archivo'><br>
		<input type='submit' value='Subir'>
		</form>";
		echo "<div style='float: right; width: 200px'><h5> Los archivos solo se deben subir una vez por mes, si el archivo se sube otra vez el mismo mes este será reemplazado por el nuevo </h5>";
		$subir=mysqli_query($con,"select * from archivos where rut='$ru'");
		if(mysqli_affected_rows($con) <> 0){
			$sub=mysqli_fetch_array($subir);
			echo "<h4 style='color: green; text-align: center'>El archivo ya ha sido subido este mes</h4>";
			echo "<h4 style='text-align: center'><a href='$sub[nom_arch]'>IR AL ARCHIVO</a></h4>";
		}else{
			if($fl['dia'] < $dte['mday']){
			echo "<h4 style='color: red; text-align: center'>El archivo no ha sido subido este mes, fecha límite para el ".$fl['dia']." del siguiente mes a las ".$fl['hora']."hrs</h4>";
			}else{
			echo "<h4 style='color: red; text-align: center'>El archivo no ha sido subido este mes, fecha límite para el ".$fl['dia']." de este mes a las ".$fl['hora']."hrs</h4>";
			}
		}
		echo "<a href=reglamento/reglamentoact.pdf>Ver el reglamento aquí</a>";
		echo "</div></div>";
		echo "</div></div>";
		echo "<div style='height:150px; width:500px;border-style: solid;border-width: 2px;border-bottom: 0px solid black; float: right' ><div style='margin: 3px 3px 3px 3px;'>";
		echo "<h2>NOTICIAS</h2>";
			echo "<form action='actnot.php?nomb=$nom&rut=$ru' method='post' id='tit'>
			ELEGIR NOTICIA<br>
			<br><select name='titu' form='tit'>
			<optgroup label='Seleccione el titulo'>
			<option selected='selected' value='%'>Todas</option>";
			while($se=mysqli_fetch_array($sel))
			{
			echo "<option value='",$se['titulo'],"'>",$se['titulo'],"|",$se['fecha'],"</option>";
			}
		echo"<input type='submit' value='FILTRAR'>
		</form>
		</optgroup>
		</select>";
		echo "</div></div>";
		echo "<div style='overflow-y:scroll; height:400px; width:500px;border-style: solid;border-width: 2px; float: right'><div style='margin: 3px 3px 3px 3px;'>";
		while($not=mysqli_fetch_array($noti)){
		echo "<h3><i>",$not['titulo'],"</i></h3><h4>",$not['fecha'],"</h4>";
		echo $not['noticia'];
		echo "<hr>";
		}
		echo "</div></div>";
	?>
</html>