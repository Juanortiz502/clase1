<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$obs = $_POST['obs'];

if($name == "" || $email == "" || $phone == "" || $obs == ""){
    header("location: formulario.php");
}
//mail(para, asunto, mensaje, cabeceras?, parametros?)

$to = "wramirez@misena.edu.co,$email";
$subject = "Formulario de Contactenos";
$message = "Se recibio del usuario $name, con el numero de telefono $phone con las siguientes observaciones\n";
$message .= $obs;
$message .= "\nGracias\n";
$message .= "<img src='https://seeklogo.com/images/S/sena-logo-AD3CDF05EE-seeklogo.com.png'>";
$header = "MIME-Version: 1.0" . "\r\n";
$header .= 'Content-type: text/html; charset=utf8' . "\r\n";
$header .= 'From: wilson@gml.com' . "\r\n" .
            'Reply-To: wilson@gm.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $header);
header("location: formulario.php?status=ok");
