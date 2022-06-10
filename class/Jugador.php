<?php
@session_start();
 class Jugador{ 
 private  $alias;
 private  $password;
 private  $rol;
 private  $nombre;
 
public function __construct(){
	 }
public function __destruct(){
	}
	
public function getAlias(){
 return $this->alias;
}

public function getPassword(){
 return $this->password;
}

public function getRol(){
 return $this->rol;
}

public function getNombre(){
 return $this->nombre;
}



public function setAlias($alias){
$this->alias=$alias;
}

public function setPassword($password){
$this->password=$password;
}

public function setRol($rol){
$this->rol=$rol;
}

public function setNombre($n){
$this->nombre=$n;	
}

 }

?>