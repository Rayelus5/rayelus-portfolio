<?php 
	$destino= "rpame876@gmail.com";
	$name= $_POST["nombreusuario"];
	$email= $_POST["asistencia"];
	$phone= $_POST["phone"];
	$message= $_POST["message"];
	$contenido= "Nombre: " . $name . "\nRecibir asistencia: " . $email;
	mail($destino,"Nuevo miembro ", $contenido);
	header("Location:enviado.html");


?>