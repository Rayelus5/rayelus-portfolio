<?php 
	$destino= "Rayelus@proton.me";
	$nombre= $_POST["nombre"];
	$apellido= $_POST["apellido"];
	$correo= $_POST["correo"];
	$telefono= $_POST["telefono"];
	$calle= $_POST["calle"];
	$ciudad= $_POST["ciudad"];
	$contenido= "Nombre: " . $nombre . " " . $apellido . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nCalle: " . $calle . "\nCiudad: " . $ciudad; 

	mail($destino,"Nuevo Registro Los Bocatas Flipendo ", $contenido);
	header("Location:../html/new-account.html");


?>