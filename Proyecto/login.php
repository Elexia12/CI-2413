<?php 
include("header.html"); 
	session_start();
	if(isset($_SESSION['permiso'])){
		if($_SESSION['permiso'] == 1){
			header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/ruta.php");
			die();
		}
		if($_SESSION['permiso'] == 2){
			header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/pedidos.php");
			die();
		}
	}
	else{
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form role="form">
			  <div class="form-group">
				<label for="text">Usuario:</label>
				<input type="text" class="form-control" id="email">
			  </div>
			  <div class="form-group">
				<label for="pwd">Contraseña:</label>
				<input type="password" class="form-control" id="pwd">
			  </div>
			  <button type="submit" class="btn btn-default">Aceptar</button>
			</form>
			<div id="map-canvas"></div>
		</div>
	</div>
</div>
	
  	
<?php
	}
	include("footer.html"); 
?>