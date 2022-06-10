<?php
@session_start();
require_once("../persi/Per_jugador.php");
require_once("../class/Jugador.php");

$coningre=new Con_ing();
$coningre->conIngreso();
class Con_ing{
    public function __construct(){
		}
	public function __desctruct(){
		}
	public function conIngreso(){
	  $usu=new Jugador();
	  $usu->setAlias($_POST['logi']);
      $usu->setPassword($_POST['password']);
	
	  $perusuario=new Per_jugador();
	  $perusuario->validarJugador($usu);
	  
  }
 
}


?>

