<html>
<?php
require 'phpmailer/PHPMailerAutoload.php';
$con=mysqli_connect("localhost","root","","condominio") or die ("Problemas de conexión");
$sel=mysqli_query($con,"select usuarios.correo from usuarios inner join reunion on usuarios.rut=reunion.rut where reunion.estado='ausente'");

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
$mail->Body    = 'Hola, informamos que se ha aplicado una multa a su gasto común debido a la ausencia de la reunion, multa: <div style="color: red"><strong>0.2UF</strong></div>';
$mail->AltBody = 'Hola, informamos que se ha terminado el tiempo límite para pagar su gasto común, tienes una multa de: 0.2UF';
}
if(!$mail->send()) {
	echo 'El/Los mail(s) no fueron enviado(s) a causa de un error <br>';
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'El/Los mail(s) fueron enviado(s) correctamente';
}
echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=admin.php'>";
?>
</html>