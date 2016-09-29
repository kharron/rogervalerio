<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Roger Valerio - Arquitectura</title>
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script>
		array_imagen = new Array(10)
		array_imagen[0] = new Image(350,160)
		array_imagen[0].src = "images/banner/a-01.png"
		array_imagen[1] = new Image(350,160)
		array_imagen[1].src = "images/banner/a-02.png"
		array_imagen[2] = new Image(350,160)
		array_imagen[2].src = "images/banner/a-03.png"
		array_imagen[3] = new Image(350,160)
		array_imagen[3].src = "images/banner/a-04.png"
		array_imagen[4] = new Image(350,160)
		array_imagen[4].src = "images/banner/a-05.png"
		array_imagen[5] = new Image(350,160)
		array_imagen[5].src = "images/banner/a-06.png"
		array_imagen[6] = new Image(350,160)
		array_imagen[6].src = "images/banner/a-07.png"
		array_imagen[7] = new Image(350,160)
		array_imagen[7].src = "images/banner/a-08.png"
		array_imagen[8] = new Image(350,160)
		array_imagen[8].src = "images/banner/a-09.png"
		array_imagen[9] = new Image(350,160)
		array_imagen[9].src = "images/banner/a-10.png"
		contador = 0
		
		function alternar_banner(){
			window.document["banner"].src = array_imagen[contador].src
			/*window.document.links[0].href = array_url[contador]*/
			contador ++
			contador = contador % array_imagen.length
			setTimeout("alternar_banner()",3000)
		}
	</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="formularios/jquery.uniform.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
      });
    </script>
    <link rel="stylesheet" href="formularios/uniform.default.css" type="text/css" media="screen">
</head>

<body onload="alternar_banner();">
<!-- saved from url=(0013)about:internet -->
<div align="center">
	<div style="width:900px; height:120px;">
		<div class="banner">
			<img src="#" name="banner"/>
		</div>
		<div class="logo">
    		<img src="images/logo.png" width="334" height="120" />
    	</div>
    </div>
	<div class="infotxt">
    	<div class="div-menu">
        	<span class="menu"><a href="index.html" class="ms">inicio</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="perfil.html" class="ms">perfil</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="servicios.html" class="ms">servicios</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="proyectos.html" class="ms">proyectos</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="desarrollo.html" class="ms">desarrollo</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contactenos.html" class="ms">contáctenos</a></span>
        </div>
    	<div class="texto">
        	<h1>DESARROLLO</h1>
            <div style="float:left; width:180px; height:200px;">
            	<p>Roger Valerio abre como parte de su nueva estrategia corporativa el área de desarrollos urbanísticos.  En esta nueva etapa, pretendemos crear proyectos de gran plusvalía utilizando diseños y conceptos modernos. De manera precisa el área de diseño y construcción se complementa para la creación de proyectos que se ajusten a las necesidades financieras de nuestros clientes.</p>
            </div>
            <div style="float:left; margin-left:30px; width:10px; height:200px;">
      			<img src="images/div-s.png" width="10" height="300" />
            </div>
            <div align="left" style="float:left; width:140px; height:200px; margin-left:30px; margin-top:10px;">
          		<?php
					$remitente = $_POST['email'] ;
					$nombre = $_POST['nombre'] ;
					$celular = $_POST['celular'] ;
					$mensaje = $_POST['mensaje'] ;

$destinatario = "rcsozan@gmail.com"; 
$asunto = "Consulta Web - Desarrollos"; 
$cuerpo =	' <p><b>Nombre:</b> ' .$nombre. ' <br><br><b>Celular:</b> ' .$celular. ' <br><br><b>Mensaje:</b><br>' .$mensaje. '</p>'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: " .$nombre. " " .$remitente. "\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: rcsozan@yahoo.com\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc: rcsozan@hotmail.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) 
?>
<p>Mensaje enviado satisfactoriamente.</p>

            </div>
        </div>
    </div>
    <div class="div-pie">
    	<span class="pie"><a href="index.html" class="mf">inicio</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="perfil.html" class="mf">perfil</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="servicios.html" class="mf">servicios</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="proyectos.html" class="mf">proyectos</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="desarrollo.html" class="mf">desarrollo</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contactenos.html" class="mf">contáctenos</a><br>Copyright © Roger Valerio y Asociados</span>
    </div>
</div>
</body>
</html>