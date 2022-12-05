<?php
$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
mysqli_query($con,"UPDATE reunion set estado ='asistente' WHERE rut ='$_REQUEST[rut]'") or die (mysqli_error($con)); 
mysqli_close($con);

echo "<META HTTP-EQUIV='REFRESH' CONTENT='1;URL=reunion.php'>";
?>