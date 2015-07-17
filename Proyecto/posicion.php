<?php require_once('plantilla.php');?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ruta</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
		<!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
			</script>
         <![endif]-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC_EbzI-13-H-wGPd5GJnM-9dd_ODXCdM"></script>
    <script src="js/procesar.js"></script>
  </head>
  <body>
	<form id="formulario" method="POST" action="procesar.php">
		<button onclick="calcularRuta()">Obtener posici&oacute;n</button>
	</form>
    <div id="map-canvas"></div>
  </body>
</html>

