<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
	$to = "rayelus@proton.me";
	$from = $_POST["email"];
	$username = $_POST["username"];
	$referCode = $_POST["referCode"];
	$contenido = "Email: " . $from . " " . "\nUsername: " . $username . "\nRefer Code: " . $referCode; 
	$headers = "From: "  . $from;

	mail($to,"ERC Connect - Nueva Cuenta ",$contenido, $headers);
	header("Location:../../static/created-account.html");
	

?>