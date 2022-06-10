<?php
@session_start();
 class Opcion{ 
 private $contenido;
 private $estado;

public function __construct(){
	 }
public function __destruct(){
	}
	
public function getContenido(){
return $this->contenido;
}

public function getEstado(){
return $this->estado;
}

public function setContenido($contenido){
$this->contenido=$contenido;	
}

public function setEstado($estado){
$this->estado=$estado;	
}





 
 
 }

?>