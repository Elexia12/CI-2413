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
?>
<html>
  <head>
    <title>Pedidos</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
		<!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
			</script>
         <![endif]-->
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
	<script src="js/funcionTabla.js"></script>
    </head>
    <body>
        <form id="formulario" method="POST" action="procesarlogin.php">
			<input type="submit" value="Cerrar Sesi&oacute;n">
		</form>
        <h1>Pedidos</h1>
		<table id="tabla" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Platillo</th>
					<th>Nombre Cliente</th>
                    <th>Tel&eacute;fono Cliente</th>
                    <th>Estado Pedido</th>
					<th>Tipo Pedido</th>
					<th>Ruta</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>ID Platillo</th>
					<th>Nombre Cliente</th>
                    <th>Tel&eacute;fono Cliente</th>
                    <th>Estado Pedido</th>
					<th>Tipo Pedido</th>
					<th>Ruta</th>
                </tr>
            </tfoot>
 
            <tbody id="cuerpo"></tbody>
        </table>
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