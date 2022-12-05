<html>
<?php
require 'phpmailer/PHPMailerAutoload.php';
$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
$sel=mysqli_query($con,"select * from usuarios where (nombre <> 'Conserje' and nombre <> 'Admin' and not exists (select * from archivos where usuarios.rut=archivos.rut))");

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
$mail->Subject = 'Alerta';
$mail->Body    = 'Hola, informamos que se ha terminado el tiempo límite para pagar su gasto común, tienes una multa de: <div style="color: red"><strong>0.5UF</strong></div>';
$mail->AltBody = 'Hola, informamos que se ha terminado el tiempo límite para pagar su gasto común, tienes una multa de: 0.5UF';
}
if(!$mail->send()) {
	echo 'El/Los mail(s) no fueron enviado(s) a causa de un error <br>';
    echo 'Error: ' . $mail->ErrorInfo;
	mysqli_query($con,"delete from archivos");
	pclose(popen('start /b scripts\\cerrarenvio.bat','r'));
} else {
    echo 'El/Los mail(s) fueron enviado(s) correctamente';
	mysqli_query($con,"delete from archivos");
	pclose(popen('start /b scripts\\cerrarenvio.bat','r')); 
}
?>
</html>