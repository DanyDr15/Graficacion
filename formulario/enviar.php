<?php

function validar_campo($campo){
	$campo = trim($campo);
	$campo = stripcslashes($campo);
	$campo = htmlspecialchars($campo);

	return $campo;
} 

if (isset($_POST["nombre"]) && !empty($_POST["nombre"])&&
	isset($_POST["correo"]) && !empty($_POST["correo"])&&
	isset($_POST["ciudad"]) && !empty($_POST["ciudad"])&&
	isset($_POST["contact-provincia_id"]) && !empty($_POST["contact-provincia_id"])&&
	isset($_POST["contact-canton_id"]) && !empty($_POST["contact-canton_id"])&&
	isset($_POST["contact-parroquia_id"]) && !empty($_POST["contact-parroquia_id"])&&
	isset($_POST["mensaje"]) && !empty($_POST["mensaje"])) {

	$destinoMail = "dapianchiche@gmail.com";

	$nombre = validar_campo($_POST["nombre"]);
	$correo = validar_campo($_POST["correo"]);
	$ciudad = validar_campo($_POST["ciudad"]);
	$provincia = validar_campo($_POST["contact-provincia_id"]);
	$canton = validar_campo($_POST["contact-canton_id"]);
	$parroquia = validar_campo($_POST["contact-parroquia_id"]);
	$mensaje = validar_campo($_POST["mensaje"]);


	$contenido = "Nombre: ". $nombre . "\n ";
	$contenido .= "\nCorreo: " . $correo . "\n ";
	$contenido = "\nMensaje: " . $mensaje ;
	mail($destinoMail, "Mensaje de Contacto" . $nombre, $contenido);

	return print(json_encode('ok'));
	//return print("ok");
}

	return print(json_encode('no enviado'));
//return print("no enviado");