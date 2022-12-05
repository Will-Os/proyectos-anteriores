<html>
<meta charset="UTF-8">
<?php
date_default_timezone_set('America/Santiago');
$fecha = getdate();
$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
mysqli_query($con,"insert into noticias(num,titulo,noticia,fecha) VALUES (default,'$_REQUEST[titulo]','$_REQUEST[texto]','$fecha[year]-$fecha[mon]-$fecha[mday]')") or die (mysqli_error($con));
mysqli_close($con);
echo "Noticia publicada correctamente";
echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";

?>
</html>