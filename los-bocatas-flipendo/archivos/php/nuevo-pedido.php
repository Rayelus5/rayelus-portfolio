<?php 
	$destino= "Rayelus@proton.me";
	$nombre= $_POST["nombre"];
	$numcuenta= $_POST["numcuenta"];
	$queso= $_POST["queso"];
	$salsa= $_POST["salsa"];
	$salsaextra= $_POST["salsaextra"];
	$refresco= $_POST["refresco"];
	$orderday= $_POST["orderday"];
	$pago= $_POST["pago"];
	$notapedido= $_POST["notapedido"];
	$contenido= "Nombre: " . $nombre . " " . "\nNúmero de cuenta: " . $numcuenta . "\nSalsa: " . $salsa . "\nQueso (+0,10): " . $queso . "\nSalsa Extra (+0,10): " . $salsaextra . "\nRefresco (+0,60): " . $refresco . "\nDía: " . $orderday . "\nTipo de pago: " . $pago . "\nNota: " . $notapedido; 

	mail($destino,"Nuevo PEDIDO Los Bocatas Flipendo ", $contenido);
	header("Location:../html/nuevo-pedido.html");


?>