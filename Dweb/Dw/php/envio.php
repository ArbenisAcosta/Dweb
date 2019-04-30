<?php

// Se crea 3 variables para tomar lo que se va a enviar por POST
$nombreUsuario = $_POST['nombre'];
$emailUsuario = $_POST['correo'];
$consultaUsuario = $_POST['consulta'];

$destino = "conrreo@gmail.com";

$asunto = "Consulta enviada desde REPATEC"

$mensaje = "Nombre: ".$nombreUsuario."\r\n";
$mensaje.= "Email: ".$emailUsuario."\r\n";
$mensaje.= "Consulta: ".$consultaUsuario."\r\n";

$remitente = "From: correo@gmail.com"

mail($destino, $asunto, $mensaje, $remitente);


header("location: index.php?i=ok");

?>