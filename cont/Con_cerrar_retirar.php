
<?php
@ session_start();
require_once('../class/Funciones.php');
require_once('../class/Jugador.php');
require_once('../class/Ronda.php');
require_once('../class/Pregunta.php');
require_once('../persi/Per_ronda.php');
$cerrar=new Cerrar_retirar();
$cerrar->conCerrar_retirar();
class Cerrar_retirar{
	public function __construct(){
		}
	public function __destruct(){
		}
	public function conCerrar_retirar(){
		if($_SESSION["ok"]==false){
		mensaje("No hay sesion activa");
		redireccionar( "index.php",false,0 );
	}else{	
	try{
		$db=Conexion::crear_conexion()->getDbConexion();
		if($db){
			$pre=new Pregunta();
			$ron=new Ronda();
			$perronda=new Per_ronda();
			$pre->setCategoria($_POST['id_categoria']);
				  $pre->setContenido($_POST['contenido']);
				  $pre->setId_pregunta($_POST['id_preg']);
			 	  $idr=$ron->obtenerIdRonda();
				  $acu=$ron->getAcumulado_ronda($_POST['acumulado']);
				  $ron->setEstado_ronda('R');
				  $perronda->Registrar_ron_ret($pre, $ron, $idr, $ali);
				   mensaje("SE RETIRA, SU ACUMULADO ES:".$acu);	
			 	  
 
		}
		}catch(PDOExeption $ex){
        echo "Error[".$ex."]";
        }
		$db=NULL;
	
			$_SESSION['ok']=NULL;
			$_SESSION['log']= NULL;
	 		
	}
	}
}
?>
