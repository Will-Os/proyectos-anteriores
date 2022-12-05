<html>
<?php
$n=$_GET['un'];
$c=$_GET['co'];
if(!isset($n,$c)){
echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=chat.php?un=Usuario&co=black'>";
}
echo "<form id='ins' method='post' action='in.php' enctype='multipart/form-data'>
Nickname: <input name='nick' type='text' style='width: 200px' value='$n'> 
Color: <select name='col' form='ins' style='width: 40px'>
<option value='$c' selected='selected' style='color: $c'>AC</option>
<option value='black' style='color: black'>N</option>
<option value='red' style='color: red'>R</option>
<option value='green' style='color: green'>V</option>
<option value='blue' style='color: blue'>A</option>
<option value='purple' style='color: purple'>M</option>
</select>
<br>
Texto:<br>
<textarea name='texto' style='width:365px; height: 365px;resize: none'></textarea><br>
Subir foto: <input type='file' name='arch' value='Subir foto'><br>	
<input type='submit' value='ENVIAR' style='color: white; background-color: #6495ED; width: 365px;height:50px; text-align: center;' name='sub'>
</form>
<div style='margin-top: -490px'>";
?>
<?php
include 'conv.php';
?>
<?php
$cuant=0;
$ident=$_SERVER['REMOTE_ADDR'];
$con=mysqli_connect("localhost","root","","chat") or die ("Problemas de conexión");
if($cuant==0){
mysqli_query($con,"insert into conectados values('$ident')");
$cuant=1;
}
?>
</div>
</html>