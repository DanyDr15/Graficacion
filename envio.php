<?php
$name = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];
$para = 'tucorreo@corre.com';
$titulo = 'Asunto del Mensaje';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $name\n Telefono: $telefono\n E-Mail: $email\n Mensaje:\n $comentario";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://167.99.1.164';
</script>";
} else {
echo 'Falló el envio';
}
}
?>