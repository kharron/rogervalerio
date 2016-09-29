<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$remitente = $_POST['email'] ;
	$destino = "rcsozan@gmail.com" ;
	$asunto = $_POST['asunto'] ;
	$mensaje = $_POST['mensaje'] ;
	$encabezados = "From: $remitente\nReply-To: $remitente\nContent-Type: text/html; charset=iso-8859-1" ;
	mail($destino, $asunto, $mensaje, $encabezados) or die ("No se ha podido enviar tu mensaje. Ha ocurrido un error") ;
	echo "<p>Tu mensaje a sido enviado con este contenido:</p>" ;
	echo "<strong><b>$mensaje</b></strong>" ;
?>
</body>
</html>