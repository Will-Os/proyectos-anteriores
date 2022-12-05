<html>
<?php
require 'phpmailer/PHPMailerAutoload.php';
$destino=$_REQUEST['envio'];
$encabezado=$_REQUEST['enc'];
$cont=$_REQUEST['cont'];
$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
$sel=mysqli_query($con,"select * from usuarios where(nombre <> 'Admin' and nombre <> 'Conserje' and correo like '$destino')");
$mail = new PHPMailer;
$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                              	// Enable SMTP authentication
$mail->Username = 'admalerces158@gmail.com';            // SMTP username
$mail->Password = 'losalerces123';                      // SMTP password
$mail->SMTPSecure = 'ssl';                            	// Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                  	// TCP port to connect to
while($se=mysqli_fetch_array($sel)){
$mail->setFrom('admalerces@condominio.com','Condominio los alerces');
$mail->addAddress($se['correo']);   
$mail->Subject = $encabezado;
$mail->Body    = $cont;
$mail->AltBody = $cont;
}
if(!$mail->send()) {
	echo 'El/Los mail(s) no fueron enviado(s) a causa de un error <br>';
    echo 'Error: ' . $mail->ErrorInfo;
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
} else {
    echo 'El/Los mail(s) fueron enviado(s) correctamente';
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
}
?>
</html>