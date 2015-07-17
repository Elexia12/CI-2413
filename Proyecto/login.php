<?php 
	session_start();
	if(isset($_SESSION['permiso'])){
		if($_SESSION['permiso'] == 0){
			header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/ruta.php");
			die();
		}
		if($_SESSION['permiso'] == 1){
			header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/ruta.php");
			die();
		}
	}
	else{
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
		<!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
			</script>
         <![endif]-->
  </head>
  <body>
	<form id="formulario" method="POST" action="procesarlogin.php">
		<input type="text" name="usuario">
		<br>
		<input type="password" name="clave">
		<br>
		<input type="submit" value="Iniciar Sesi&oacute;n">
	</form>
	<div id="map-canvas"></div>
  </body>
</html>	
<?php
	}
?>