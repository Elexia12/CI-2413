<?php 
	session_start();
	require_once('fatfree/lib/base.php');
	require_once('fatfree/lib/db/sql.php');
	require_once('fatfree/lib/db/sql/mapper.php');
	require_once('fatfree/lib/db/sql/session.php');
	if(isset($_SESSION['permiso'])){
		if($_SESSION['permiso'] == 1){
			$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=ci2413_eb05206','eb05206','eb05206');
?>
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
    <script src="js/ruta.js"></script>
  </head>
  <body>
	<div id='inforuta' data-latrest='9.901771873590537' data-longrest='-84.07940435611721' data-latped='9.901771873590537' data-longped='-84.07940435611'></div>
	<button onclick="calcularRuta()">Obtener posici&oacute;n</button>
	<form id="formulario" method="POST" action="procesarlogin.php">
		<input type="submit" value="Cerrar Sesi&oacute;n">
	</form>
	<div id="map-canvas"></div>
  </body>
</html>
<?php
		}
		if($_SESSION['permiso'] == 2){
			header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/procesarlogin.php");
			die();
		}
	}
	else{
		header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/login.php");
		die();
	}
?>