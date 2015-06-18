<?php
	require_once('fatfree/lib/base.php');
	require_once('fatfree/lib/db/sql.php');
	require_once('fatfree/lib/db/sql/mapper.php');
	require_once('fatfree/lib/db/sql/session.php');
	$db=new \DB\SQL('pgsql:host=localhost;port=5432;dbname=ci2413','eb17016','eb17016');
	$db->exec('SET search_path TO eb17016');
	$contacto=new DB\SQL\Mapper($db,'puntajes');
	$contacto->reset();
	$contacto->tiempo=50;
	$contacto->nombre="juan";
	if($contacto->save()){
		echo true;
	}
	else{
		echo false;
	}
	$contactos=$db->exec('SELECT tiempo, nombre FROM puntajes ORDER BY tiempo ASC LIMIT 10');
	$contador = 1;
	$respuesta = "";
	foreach($contactos as $contacto){
		$respuesta .= $contador."\t".$contacto['tiempo']."\t".$contacto['nombre']."\n";
		$contador++;
	}
	echo $respuesta;
?>