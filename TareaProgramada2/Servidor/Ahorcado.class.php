<?php

	require_once('fatfree/lib/base.php');
	require_once('fatfree/lib/db/sql.php');
	require_once('fatfree/lib/db/sql/mapper.php');
	require_once('fatfree/lib/db/sql/session.php');

$db=new \DB\SQL('pgsql:host=localhost;port=5432;dbname=ci2413','eb17016','eb17016');
			$db->exec('SET search_path TO eb17016');

class Ahorcado {
	private $intentos = 8; //Aun no se cuantos, cuando hagamos la interfaz definimos. Si intentos llega a 0 pierde, se disminuye en 1 cada vez que el jugador falla
	private $tiempoInicio;
	private $tiempoFin;
	private $palabras = array(/*posibles palabras a adivinar*/);
	private $palabraJuego = ""; //palabra a adivinar
	private $palabraOculta = ""; //Letras sustituidas por _
	
	//Se selecciona una palabra aleatoria de las definidas en $palabras
	public function __construct() {
		$this->palabras = array("marioneta", "camion", "mariposa", "carro", "perro", "ambulancia", "pez", "televisor");
		

		$rand = rand(0, sizeof($this->palabras) - 1);	// Un numero de 0 a cantidad de palabras - 1
		$this->palabraJuego = $this->palabras[$rand];
		//Sustituimos las letras por _
		for($i=0; $i<strlen($this->palabraJuego); $i++){
			$this->palabraOculta = $this->palabraOculta . "_";
		}
		$this->tiempoInicio = time();
	}
	
	//Tiempo que tardo en adivinar la palabra
	public function getTiempo(){
		return $this->tiempoInicio - $this->tiempoFin;
	}
	
	public function getPalabraOculta(){
		return $this->palabraOculta;
	}
	
	//Recibe la letra digigtada por el jugador
	//Retorna el estado actual de palabra oculta (despues del intento de adivinar)
	public function juego($letra){
		$letra = strtolower($letra);
		if(strpos($this->palabraJuego, $letra) === false){			//Si la letra no esta, se resta la cantidad de intentos
			$this->intentos = $this->intentos-1;
		}else{
			for($i=0; $i<strlen($this->palabraJuego); $i++){
				if($this->palabraJuego[$i] == $letra){
					$this->palabraOculta[$i] = $letra;			//Se cambia el _ por la letra encontrada
				}
			}
		}
		return $this->palabraOculta;
	}
	
	//Verifica el estado del juego
	public function verificarJuego(){
		$res = "continuar";
		if($this->palabraOculta == $this->palabraJuego){
			$res = "gano";
		}else{
			if($this->intentos == 0){
				$res = "perdio";
			}
		}
		return $res;
	}
	
	//Guarda el puntaje en la base de datos
	public function guardarPuntaje($nombre){
		$contacto=new DB\SQL\Mapper($GLOBALS['db'],'puntajes');
		$contacto->reset();
		$contacto->tiempo= $this->getTiempo();
		$contacto->nombre=$nombre;
		if($contacto->save()){
			return true;
		}
		else{
			return false;
		}
	}
	
	//Retorna los diez mejores jugadores
	public function getMejores(){
		$contactos=$GLOBALS['db']->exec('SELECT tiempo, nombre FROM puntajes ORDER BY tiempo ASC LIMIT 10');
		$contador = 1;
		$respuesta = "";
		foreach($contactos as $contacto){
			$respuesta .= $contador."\t".$contacto['tiempo']."\t".$contacto['nombre']."\n";
			$contador++;
		}
		return $respuesta;
	}
	
}