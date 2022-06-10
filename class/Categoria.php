<?php
@session_start();
class Categoria{ 
 private  $id_categoria;
 private  $dificultad;
 private  $id_premio;
 
public function __construct(){
	 }
public function __destruct(){
	}
	
public function getId_categoria(){
return $this->id_categoria;
}

public function getDificultad(){
return $this->dificultad;
}

public function getId_premio(){
return $this->id_premio;
}


public function setId_categoria($id_categoria){
$this->id_categoria=$id_categoria;
}

public function setDificultad($dificultad){
$this->dificultad=$dificultad;
}

public function setId_premio($id_premio){
$this->id_premio=$id_premio;
}



 }

?>