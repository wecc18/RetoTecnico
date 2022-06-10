<?php
session_start();
require_once("../class/Funciones.php");
require_once("Jugador.php");

class Per_sesion{

public function __construct(){
	}
public function __destruct(){
	}

public function session($usu){
	 $_SESSION['ok']=true;
	 $_SESSION['log']= $usu->getAlias();
	 session_cache_limiter('nocache');
	}
}
?>