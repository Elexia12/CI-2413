<?php	
	session_start();
	require_once('fatfree/lib/base.php');
	require_once('fatfree/lib/db/sql.php');
	require_once('fatfree/lib/db/sql/mapper.php');
	require_once('fatfree/lib/db/sql/session.php');
	
	$db=new \DB\SQL('mysql:host=localhost;port=3306;dbname=ci2413_eb05206','eb05206','eb05206');
	$categorias=$db->exec('SELECT * FROM categorias');
	
	return $categorias;
	
?>
	