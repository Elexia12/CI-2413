<?php
	session_start();
	require_once('fatfree/lib/base.php');
	require_once('fatfree/lib/db/sql.php');
	require_once('fatfree/lib/db/sql/mapper.php');
	require_once('fatfree/lib/db/sql/session.php');
	if($_POST && $_POST['usuario']){
		$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=ci2413_eb05206','eb05206','eb05206');
		$usuarios=$db->exec('SELECT * FROM usuarios');
		$grupo=null;
		foreach ($usuarios as $usuario){
			if($usuario['usuario'] == $_POST['usuario'] && $usuario['clave'] == $_POST['clave']){
				$grupo = $usuario['grupo'];
			}
		}
		if($grupo == "motorizado"){
			$_SESSION['permiso'] = 1;
			header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/ruta.php");
			die();
		}
		else{
			if($grupo == "admin"){
				$_SESSION['permiso'] = 2;
				//header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/ruta.php");
				//die();
			}
			else{
				header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/login.php");
				die();
			}
		}
	}
	else{
		unset($_SESSION['permiso']);
		header("Location: http://titanic.ecci.ucr.ac.cr/~eb17016/Proyecto/login.php");
		die();
	}
?>