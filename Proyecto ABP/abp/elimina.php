<?php
$con=mysqli_connect("localhost","root","","a") or die ("Problemas de conexión");
mysqli_query($con,"delete from trabajadores where id_tra=$_REQUEST[id]") or die (mysqli_error($con));
mysqli_close($con);
echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=insertar.php'>";
?>