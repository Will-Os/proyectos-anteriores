<?php


$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
mysqli_query($con,"UPDATE estacionamiento set num = '$_REQUEST[num]', 
estado = '$_REQUEST[estado]', nom_visita = '-', 
rut_visita = '&_REQUEST[rut_visita]', depto_visita = '-'
 WHERE num = '$_REQUEST[num]'") or die (mysqli_error($con)); 
mysqli_close($con);

?>