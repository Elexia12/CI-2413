<?php 
	session_start();
	require_once('fatfree/lib/base.php');
	require_once('fatfree/lib/db/sql.php');
	require_once('fatfree/lib/db/sql/mapper.php');
	require_once('fatfree/lib/db/sql/session.php');
	if(isset($_SESSION['permiso'])){
		if($_SESSION['permiso'] == 2){
			require("menu.php");
			$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=ci2413_eb05206','eb05206','eb05206');
			$platillos=$db->exec('SELECT * FROM platillos');
			$categorias=$db->exec('SELECT * FROM categorias');
?>
<html>
  <head>
    <title>Platillos</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
		<!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
			</script>
         <![endif]-->
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
	<script src="js/funcionTabla.js"></script>
  </head>
    <body>
        <form id="formulario" method="POST" action="procesarlogin.php">
			<input type="submit" value="Cerrar Sesi&oacute;n">
		</form>
        <form id="agregar" method="POST" action="acciones.php">
			<p>Nombre:<input type="text" name="agregarnombre"></p>
			<p>Precio:<input type="number" name="agregarprecio"></p>
			<select name="agregarcategoria">
				
			</select>
			<input type="submit" value="Agregar">
		</form>
		<form id="editar" method="POST" action="acciones.php">
			<select name="editarplato">
				
			</select>
			<p>Nombre:<input type="text" name="editarnombre"></p>
			<p>Precio:<input type="editarprecio"></p>
			<select name="editarcategoria">
				
			</select>
			<input type="submit" value="Editar">
		</form>
		<form id="borrar" method="POST" action="acciones.php">
			<select name="borrarplato">
				
			</select>
			<input type="submit" value="borrar">
		</form>
    </body>
</html>
<?php
		}
		if($_SESSION['permiso'] == 1){
			header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/procesarlogin.php");
			die();
		}
	}
	else{
		header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/login.php");
		die();
	}
?>