<?php 
	$destino= "Rayelus@proton.me";
	$name= $_POST["name"];
	$email= $_POST["email"];
	$phone= $_POST["phone"];
	$message= $_POST["message"];
	$contenido= "Nombre: " . $name . "\nRecibir asistencia: " . $email . "\n" . $message;
	mail($destino,"AYUDA - Los Bocatas Flipendo ", $contenido);
	header("Location:../html/help.html");


?>