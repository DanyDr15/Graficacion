<?php

if(isset($_POST["nombre"]) && !empty($_POST["nombre"])&&
	isset($_POST["correo"]) && !empty($_POST["correo"])&&
	isset($_POST["ciudad"]) && !empty($_POST["ciudad"])&&
	//isset($_POST["contact-provincia_id"]) && !empty($_POST["contact-provincia_id"])&&
	//isset($_POST["contact-canton_id"]) && !empty($_POST["contact-canton_id"])&&
	//isset($_POST["contact-parroquia_id"]) && !empty($_POST["contact-parroquia_id"])&&
	isset($_POST["mensaje"]) && !empty($_POST["mensaje"])
){
	return print("ok");

}

return print("No se puede enviar");