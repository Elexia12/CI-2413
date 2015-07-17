<?php 
	include("header.html"); 

	session_start();
	require_once('fatfree/lib/base.php');
	require_once('fatfree/lib/db/sql.php');
	require_once('fatfree/lib/db/sql/mapper.php');
	require_once('fatfree/lib/db/sql/session.php');
	$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=ci2413_eb05206','eb05206','eb05206');
	if(isset($_SESSION['permiso'])){
		if($_SESSION['permiso'] == 2){
			require("menu.php");
			$platillos=$db->exec('SELECT * FROM platillos');
			$categorias=$db->exec('SELECT * FROM categorias');
			print_r($categorias);
?>
	<div class="container">
        <form id="formulario" method="POST" action="procesarlogin.php">
			<input type="submit" value="Cerrar Sesi&oacute;n">
		</form>
		<br>
		<p>Agregar Platillos</p>
        <form id="agregar" method="POST" action="acciones.php">
			<p>Nombre:<input type="text" name="agregarnombre"></p>
			<p>Precio:<input type="number" name="agregarprecio"></p>
			<select name="agregarcategoria">
				<?php foreach($categorias as $categoria){ ?>
					<option value='<?php echo $categoria['categorias_id']; ?>'><?php echo $categoria['nombre']; ?></option>
				<?php } ?>
			</select>
			<input type="submit" value="Agregar">
		</form>
		<br>
		<p>Editar Platillos</p>
		<form id="editar" method="POST" action="acciones.php">
			<select name="editarplato">
				
			</select>
			<p>Nombre:<input type="text" name="editarnombre"></p>
			<p>Precio:<input type="editarprecio"></p>
			<select name="editarcategoria">
				<?php foreach($categorias as $categoria){ ?>
					<option value='<?php echo $categoria['categorias_id']; ?>'><?php echo $categoria['nombre']; ?></option>
				<?php } ?>
			</select>
			<input type="submit" value="Editar">
		</form>
		<br>
		<p>Borrar Platillos</p>
		<form id="borrar" method="POST" action="acciones.php">
			<select name="borrarplato">
				
			</select>
			<input type="submit" value="borrar">
		</form>
	</div>
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
	include("footer.html"); 
?>