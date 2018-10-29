<?php

if(isset($POST["nombre"]) && !empty($_POST["nombre"])&&
	isset($POST["correo"]) && !empty($_POST["correo"])&&
	isset($POST["ciudad"]) && !empty($_POST["ciudad"])&&
	//isset($POST["contact-provincia_id"]) && !empty($_POST["contact-provincia_id"])&&
	//isset($POST["contact-canton_id"]) && !empty($_POST["contact-canton_id"])&&
	//isset($POST["contact-parroquia_id"]) && !empty($_POST["contact-parroquia_id"])&&
	isset($POST["mensaje"]) && !empty($_POST["mensaje"])
){
	return print("ok");

}

return print("No se puede enviar");