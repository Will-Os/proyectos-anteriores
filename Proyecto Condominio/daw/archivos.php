<html>
<?php
date_default_timezone_set('America/Santiago');
$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
$fecha=getdate();
echo "<meta charset='ISO-8859-1'>";
$n=$_GET['nomb'];
$not=$_GET['noti'];
$ru=$_GET['rut'];
$destino='archivos/';
$fichero= $destino.basename($ru.".".$fecha['mon'].$fecha['year'].".".$_FILES['arch']['name']);
$fichero= iconv("utf-8","ISO-8859-1", $fichero);
$nombre= $_FILES['arch']['name'];
$peso=$_FILES['arch']['size'];
$tipo=$_FILES['arch']['type'];
$tmp=$_FILES['arch']['tmp_name'];
echo "Nombre: ".$nombre."<br>";
echo "Peso: ".$peso."kb<br>";
echo "Tipo: ".$tipo."<br>";
if($tipo == "application/pdf"){
	mysqli_query($con,"delete from archivos where rut='$ru'");
	if(move_uploaded_file($tmp,$fichero)){
	mysqli_query($con,"insert into archivos (rut,nombre,nom_arch,fecha_ent,hora_ent) values ('$ru','$nombre','$fichero','$fecha[year]-$fecha[mon]-$fecha[mday]','$fecha[hours]:$fecha[minutes]:$fecha[seconds]')");
	echo "Archivo subido correctamente";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=paguser.php?nomb=$n&noti=$not&rut=$ru'>";
	}
	else
	{
	echo "El archivo no fue subido";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=paguser.php?nomb=$n&noti=$not&rut=$ru'>";
	}
}
else{
	echo "El archivo debe estar en formato PDF!";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=paguser.php?nomb=$n&noti=$not&rut=$ru'>";
}
?>
</html>