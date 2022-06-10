<?php
@session_start();
require_once("../class/Pregunta.php");
require_once("../class/Ronda.php");	
require_once("../class/Funciones.php");
require_once("../persi/Per_ronda.php");
	
$conpre=new con_registrar_ronda();
$conpre->conRegistrarRon();

class con_registrar_ronda{
	public function __construct(){
		}
	public function __desctruct(){
		}
	public function conRegistrarRon(){
       if($_SESSION["ok"]==false){
		mensaje("No hay sesi\xf3n activa");
		redireccionar( "index.php",false,0 );
	}else{
		//echo $s=$_POST['estado'];
		$pre=new Pregunta();
		$ron=new Ronda();
		$perronda=new Per_ronda();
		$ali=$_SESSION['log'];
		$y=$_POST['estado'];
		echo $y;
		if($y=='F'){
			
		    $pre->setCategoria($_POST['id_categoria']);
			$pre->setContenido($_POST['contenido']);
			$pre->setId_pregunta($_POST['id_preg']);
			$idr=$ron->obtenerIdRonda();
			$ron->setAcumulado_ronda('0');
			$ron->setEstado_ronda('F');
			
			
			$perronda->Registrar_ron_per($pre, $ron, $idr, $ali);
			mensaje("HASTA LA PROXIMA");
				redireccionar( "../index.php",false,0 );
			}elseif ($y=='V'){
				$ron->setAcumulado_ronda('4321000');
			    $ron->setEstado_ronda('V');
				mensaje("LA RESPUESTA ES CORRECTA, PASAS AL NIVEL 5");
				$perronda->Registrar_ron_cor($pre, $ron, $idr, $ali);
				redireccionar( "../view/forms/juego5.php",false,0 );
				}else{
				  $pre->setCategoria($_POST['id_categoria']);
				  $pre->setContenido($_POST['contenido']);
				  $pre->setId_pregunta($_POST['id_preg']);
			 	  $idr=$ron->obtenerIdRonda();
				  $acu=$ron->getAcumulado_ronda($_POST['acumulado']);
				  $ron->setEstado_ronda('R');
				  $perronda->Registrar_ron_ret($pre, $ron, $idr, $ali);
				      mensaje("SE RETIRA, SU ACUMULADO ES ".$acu." ");	
					}
		
		   
				
		  } 
	 
	}
}
?>