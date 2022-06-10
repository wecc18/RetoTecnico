<?php 
@session_start();
require_once("../persi/Per_jugador.php");
require_once("../class/Funciones.php");
$conbuscarusu=new Con_buscaUsu();
$conbuscarusu->con_busca_usuario();
class Con_buscaUsu{
	public function __construct(){
		}
	public function __destruct(){
		}
	public function con_busca_usuario(){
				if($_SESSION["ok"]==false){
					mensaje("No hay sesi/xf3n activa");
					redireccionar( "../index.php",false,0 );
					}else{
						$campo=$_POST["campo"];
			   	        $buscarusu=new Per_usuario();
				        $buscarusu->buscar_usuario($campo);
						}
			}
}
?>