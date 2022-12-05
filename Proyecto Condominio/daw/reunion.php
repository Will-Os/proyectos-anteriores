<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8"/>
<style type="text/css">

#logo {
    background-image: url(../img/aconcagua-logo.png);
    width: 180px;
    height: 90px;
    background-size: 190px 40px;
    -o-transition: .5s;
    transition: .5s;
	float: left;

header {
display: block;
}
h3{
margin-top: 50;
margin-left: 400px;
}
</style>
<header>
<div >
<img src="https://sites.google.com/site/losalercesquito/_/rsrc/1472781690756/config/customLogo.gif?revision=2" id="logo"></img>
<h3  style="margin-left: 500px;">CONDOMINIOS BALCÓN DEL NORTE</h3>

</div>
</header>
<head>
<br><br><br><br>
<form action="inserta3.php" method="post">
    RUT: <input type="text" name="rut"><br>
    <input type="submit" value="ASISTENTE"><br>
</form>
<br>
<form action='admin.php'>
<input type='submit' value='volver'>
</form>
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","condominio") or die ("PROBLEMAS CON LA BASE DE DATOS");
$registr=mysqli_query($con,"select * from reunion") or die (mysqli_error($con));
echo "<center><table border=8 cellpadding=6 cellspacing=6></center>";
echo '<tr>';
echo '<th colspan=2><h4><i>LISTA REUNION</i></h4></th>';
echo '</tr>';
echo '<br>';
echo '<br>';
echo '<tr>';
echo '<th>RUT</th>';
echo '<th>ESTADO</th>';
echo '</tr>';
while($re=mysqli_fetch_array($registr))
{
echo '<tr>';
echo '<td>';
echo $re['rut'];
echo '</td>';
echo '<td>';
echo $re['estado'];
echo '</td>';

echo '</tr>';
}
?>
</body>
</html>