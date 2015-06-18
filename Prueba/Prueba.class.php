<?php
	require_once('fatfree/lib/base.php');
	require_once('fatfree/lib/db/sql.php');
	require_once('fatfree/lib/db/sql/mapper.php');
	require_once('fatfree/lib/db/sql/session.php');
	
	class Prueba{
		private $db;
		
		public function __construct(){
			$db=new \DB\SQL('pgsql:host=localhost;port=5432;dbname=ci2413','eb17016','eb17016');
			$db->exec('SET search_path TO eb17016');
		}
		
		public function agregarTiempo($tiempo, $nombre){
			$contacto=new DB\SQL\Mapper($db,'puntajes');
			$contacto->reset();
			$contacto->tiempo=$tiempo;
			$contacto->nombre=$nombre;
			if($contacto->save()){
				return true;
			}
			else{
				return false;
			}
		}
		
		public function obtenerTopTen(){
			$contactos=$db->exec('SELECT tiempo, nombre FROM puntajes ORDER BY tiempo ASC LIMIT 10');
			$contador = 1;
			$respuesta = "";
			foreach($contactos as $contacto){
				$respuesta .= $contador."\t".$contacto['tiempo']."\t".$contacto['nombre']."\n";
				$contador++;
			}
			return $respuesta;
		}
	}
?>