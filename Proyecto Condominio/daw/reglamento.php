<?php
$nombre= $_FILES['arch']['name'];
$peso=$_FILES['arch']['size'];
$tipo=$_FILES['arch']['type'];
$tmp=$_FILES['arch']['tmp_name'];
echo "Nombre: ".$nombre."<br>";
echo "Peso: ".$peso."kb<br>";
echo "Tipo: ".$tipo."<br>";
if($tipo == "application/pdf"){
	if(move_uploaded_file($tmp,"reglamento/reglamentoact.pdf")){
	echo "Archivo actualizado correctamente";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=admin.php'>";
	}
	else
	{
	echo "El archivo no fue actualizado";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=admin.php'>";
	}
}
else{
	echo "El archivo debe estar en formato PDF!";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=admin.php'>";
}
?>