<html>
<?php
date_default_timezone_set('America/Santiago');
$con=mysqli_connect("localhost","root","","chat") or die ("Problemas de conexión");
$fecha=getdate();
echo "<meta charset='ISO-8859-1'>";
$n=$_GET['un'];
$c=$_GET['co'];;
$destino='fotos/';
$fichero= $destino.basename($fecha['hours'].$fecha['minutes'].$fecha['seconds'].$fecha['mday'].$fecha['mon'].$fecha['year'].".".$_FILES['arch']['name']);
$fichero= iconv("utf-8","ISO-8859-1", $fichero);
$nombre= $_FILES['arch']['name'];
$peso=$_FILES['arch']['size'];
$tipo=$_FILES['arch']['type'];
$tmp=$_FILES['arch']['tmp_name'];
if($tipo == "image/png" or $tipo == "image/jpeg"){
	if(move_uploaded_file($tmp,$fichero)){
	mysqli_query($con,"insert into foto values('$fichero')");
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=chat.php?un=".$n."&co=".$c."'>";
	}
	else
	{
	echo "El archivo no se movió correctamente";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=chat.php?un=".$n."&co=".$c."'>";
	}
}
else{
	echo "El archivo debe estar en formato JPEG o PNG!";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=chat.php?un=".$n."&co=".$c."'>";
}
?>
</html>