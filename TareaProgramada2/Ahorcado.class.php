<?php

class Ahorcado {
	private $intentos = 8; //Aun no se cuantos, cuando hagamos la interfaz definimos. Si intentos llega a 0 pierde, se disminuye en 1 cada vez que el jugador falla
	private $tiempoInicio;
	private $tiempoFin;
	private $palabras = array(/*posibles palabras a adivinar*/);
	private $palabraJuego = ""; //palabra a adivinar
	private $palabraOculta = ""; //Letras sustituidas por _
	
	//Se selecciona una palabra aleatoria de las definidas en $palabras
	public function __construct() {
		$rand = rand(0, sizeof($this->palabras) - 1);	// Un numero de 0 a cantidad de palabras - 1
		$this->palabraJuego = $this->palabras[$rand];
		//Sustituimos las letras por _
		for($i=0; i<$strlen(this->palabraJuego); i++){
			$this->palabraOculta = $this->palabraOculta . "_";
		}
		$this->tiempoInicio = time();
	}
	
	//Tiempo que tardo en adivinar la palabra
	public getTiempo(){
		return $this->tiempoInicio - $this->tiempoFin;
	}
	
	public getPalabraOculta(){
		return $this->palabraOculta;
	}
	
	//Recibe la letra digigtada por el jugador
	//Retorna el estado actual de palabra oculta (despues del intento de adivinar)
	public juego($letra){
		
	}
	
	//Verifica el estado del juego
	public verificarJuego(){
		$res = "continuar";
		if($this->palabraOculta == $this->palabraJuego){
			$res = "gano";
		}else{
			if($this->intentos == 0){
				$res = "perdio";
			}
		}
	}
	
	//Guarda el puntaje en la base de datos
	public guardarPuntaje(){
		
	}
	
	//Retorna los diez mejores jugadores
	public getMejores(){
	
	}
	
}