<?php

$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
mysqli_query($con,"insert into control_acc (nom_visita,rut_visita,depto_visita) VALUES 
('$_REQUEST[nom_visita]','$_REQUEST[rut_visita]','$_REQUEST[depto_visita]')") or die (mysqli_error($con));
mysqli_close($con);
echo "<META HTTP-EQUIV='REFRESH' CONTENT='1;URL=mostrar.php'>";
?>