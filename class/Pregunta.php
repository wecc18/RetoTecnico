<?php
@session_start();
class Pregunta{ 
 private  $id_pregunta;
 private  $contenido;
 private  $categoria;

public function __construct(){
	 }
public function __destruct(){
	}
	
public function getId_pregunta(){
return $this->id_pregunta;
}

public function getContenido(){
return $this->contenido;
}

public function getCategoria(){
return $this->categoria;
}

public function setId_pregunta($id_pregunta){
$this->id_pregunta=$id_pregunta;	
}

public function setContenido($contenido){
$this->contenido=$contenido;	
}

public function setCategoria($categoria){
$this->categoria=$categoria;	
}


//MUESTRA EL NIVEL 1
public function mostrarPregunta($cat){
 require_once "Conexion.php";
    try{
       $db=Conexion::crear_conexion()->getDbConexion();
	   $ind_pre=mt_rand(1,5);
       if($db){
            //$var_id=1;
            $stmt=$db->prepare("SELECT P.id_pregunta AS id_pregu, P.contenido AS contenid, P.id_categoria AS id_catego, C.dificultad AS dificult, C.nombre AS nomb, PR.valor AS val FROM `pt_pregunta` AS P JOIN pt_categoria AS C ON P.id_categoria=C.id_categoria JOIN pt_premio AS PR ON C.id_premio=PR.id_premio WHERE C.id_categoria= :cat AND P.id_pregunta= :ind_pre");
            $stmt->bindValue('cat',$cat,PDO::PARAM_STR);
			$stmt->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt->execute();
		
            $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows)){
                 $tr=""; $tr2=""; $tr3="";
                foreach($rows AS $row){
                    $id_categoria=$row['id_catego'];
                    $contenido=$row['contenid'];
					$dificulta=$row['dificult'];
					$nombre=$row['nomb'];
					$valor=$row['val'];
					$tr.=<<<HTML
                    <tr>
						<td>$id_categoria</td>
						<td>$dificulta</td>
						<td>$nombre</td>
						<td>$ $valor</td>
					</tr>
HTML;
					 $stmt2=$db->prepare("SELECT * FROM pt_opcion WHERE id_pregunta= :ind_pre");
            $stmt2->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt2->execute();
		
            $rows2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows2)){
                 
                foreach($rows2 AS $row2){
                    $id_opc=$row2['id_opcion'];
                    $id_preg=$row2['id_pregunta'];
                    $descripcion=$row2['descripcion_opc'];
                    $estado=$row2['estado_opc'];
					$acumulado=0;
                    $tr3.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="contenido" name="contenido" value="$contenido"><input type="hidden" id="acumulado" name="acumulado" value="$acumulado"><input type="hidden" id="id_categoria" name="id_categoria" value="$id_categoria"><input type="hidden" id="id_preg" name="id_preg" value="$id_preg"><input type="hidden" id="estado" name="estado" value="$estado"> $descripcion</td>
                       <td><input type="radio" id="respuesta" name="respuesta" required="required" value="$respuesta"></td>  
                    </tr>
HTML;
                }
                $html_result=<<<HTML
                <table id="opciones" border ="1" cellspacing="0" bordercolor="#0000FF">
                    $tr
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );}
					
                    $tr2.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="seleccionar" value="$id_categoria"><input type="hidden" id="pregunta_id" name="pregunta_id" value="$contenido"> $contenido</td> 
                    </tr>
					
HTML;
                }
                $html_result=<<<HTML
				<table id="tabla_seleccion" border="1" style="border:1px #000099 solid">
					<tr>
						<th colspan="4">Nivel $cat</th>
					</tr>
					<tr>
						<td>N&deg;</td>
						<td>Dificultad</td>
						<td>Capitales De:</td>
						<td>Premio</td>
					</tr>
					$tr
                </table>
				</br>
                <table id="pregunta" border ="1" cellspacing="0" bordercolor="#0000FF">
                    <tr bgcolor="#ACCCFD">
                        <th colspan="2">Cual es la capital de:?</th>
                        
                    </tr>
                    $tr2
					$tr3
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );
            }
            else{
                $html_result=<<<HTML
                <h5>
                    No hay resultados
                </h5>
HTML;
                $array_result=array(
                    'result'=>'data_no_found',
                    'html_result'=>$html_result
                );
            }
       }
    }catch(PDOExeption $ex){
        $ex_message=$ex->getMessage();
        $array_result=array(
            'result'=>'data_found',
            'html_result'=>$ex_message
        );
    }
    return $array_result;
	}

//MUESTRA EL NIVEL 2
public function mostrarPregunta2($cat){
 require_once "Conexion.php";
    try{
       $db=Conexion::crear_conexion()->getDbConexion();
	   $ind_pre=mt_rand(6,10);
       if($db){
            //$var_id=1;
            $stmt=$db->prepare("SELECT P.id_pregunta AS id_pregu, P.contenido AS contenid, P.id_categoria AS id_catego, C.dificultad AS dificult, C.nombre AS nomb, PR.valor AS val FROM `pt_pregunta` AS P JOIN pt_categoria AS C ON P.id_categoria=C.id_categoria JOIN pt_premio AS PR ON C.id_premio=PR.id_premio WHERE C.id_categoria= :cat AND P.id_pregunta= :ind_pre");
            $stmt->bindValue('cat',$cat,PDO::PARAM_STR);
			$stmt->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt->execute();
		
            $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows)){
                 $tr=""; $tr2=""; $tr3="";
                foreach($rows AS $row){
                    $id_categoria=$row['id_catego'];
                    $contenido=$row['contenid'];
					$dificulta=$row['dificult'];
					$nombre=$row['nomb'];
					$valor=$row['val'];
					$tr.=<<<HTML
                    <tr>
						<td>$id_categoria</td>
						<td>$dificulta</td>
						<td>$nombre</td>
						<td>$ $valor</td>
					</tr>
HTML;
					 $stmt2=$db->prepare("SELECT * FROM pt_opcion WHERE id_pregunta= :ind_pre");
            $stmt2->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt2->execute();
		
            $rows2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows2)){
                 
                foreach($rows2 AS $row2){
                    $id_opc=$row2['id_opcion'];
                    $id_preg=$row2['id_pregunta'];
                    $descripcion=$row2['descripcion_opc'];
                    $estado=$row2['estado_opc'];
					$acumulado=1000;
                    $tr3.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="contenido" name="contenido" value="$contenido"><input type="hidden" id="acumulado" name="acumulado" value="$acumulado"><input type="hidden" id="id_categoria" name="id_categoria" value="$id_categoria"><input type="hidden" id="id_preg" name="id_preg" value="$id_preg"><input type="hidden" id="estado" name="estado" value="$estado"> $descripcion</td>
                       <td><input type="radio" id="respuesta" name="respuesta" required="required" value="$respuesta"></td>  
                    </tr>
HTML;
                }
                $html_result=<<<HTML
                <table id="opciones" border ="1" cellspacing="0" bordercolor="#0000FF">
                    $tr
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );}
					
                    $tr2.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="seleccionar" value="$id_categoria"><input type="hidden" id="pregunta_id" name="pregunta_id" value="$contenido"> $contenido</td> 
                    </tr>
					
HTML;
                }
                $html_result=<<<HTML
				<table id="tabla_seleccion" border="1" style="border:1px #000099 solid">
					<tr>
						<th colspan="4">Nivel $cat</th>
					</tr>
					<tr>
						<td>N&deg;</td>
						<td>Dificultad</td>
						<td>Capitales De:</td>
						<td>Premio</td>
					</tr>
					$tr
                </table>
				</br>
                <table id="pregunta" border ="1" cellspacing="0" bordercolor="#0000FF">
                    <tr bgcolor="#ACCCFD">
                        <th colspan="2">Cual es la capital de:?</th>
                        
                    </tr>
                    $tr2
					$tr3
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );
            }
            else{
                $html_result=<<<HTML
                <h5>
                    No hay resultados
                </h5>
HTML;
                $array_result=array(
                    'result'=>'data_no_found',
                    'html_result'=>$html_result
                );
            }
       }
    }catch(PDOExeption $ex){
        $ex_message=$ex->getMessage();
        $array_result=array(
            'result'=>'data_found',
            'html_result'=>$ex_message
        );
    }
    return $array_result;
	}
 
 //MUESTRA EL NIVEL 3
public function mostrarPregunta3($cat){
 require_once "Conexion.php";
    try{
       $db=Conexion::crear_conexion()->getDbConexion();
	   $ind_pre=mt_rand(11,15);
       if($db){
            //$var_id=1;
            $stmt=$db->prepare("SELECT P.id_pregunta AS id_pregu, P.contenido AS contenid, P.id_categoria AS id_catego, C.dificultad AS dificult, C.nombre AS nomb, PR.valor AS val FROM `pt_pregunta` AS P JOIN pt_categoria AS C ON P.id_categoria=C.id_categoria JOIN pt_premio AS PR ON C.id_premio=PR.id_premio WHERE C.id_categoria= :cat AND P.id_pregunta= :ind_pre");
            $stmt->bindValue('cat',$cat,PDO::PARAM_STR);
			$stmt->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt->execute();
		
            $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows)){
                 $tr=""; $tr2=""; $tr3="";
                foreach($rows AS $row){
                    $id_categoria=$row['id_catego'];
                    $contenido=$row['contenid'];
					$dificulta=$row['dificult'];
					$nombre=$row['nomb'];
					$valor=$row['val'];
					$tr.=<<<HTML
                    <tr>
						<td>$id_categoria</td>
						<td>$dificulta</td>
						<td>$nombre</td>
						<td>$ $valor</td>
					</tr>
HTML;
					 $stmt2=$db->prepare("SELECT * FROM pt_opcion WHERE id_pregunta= :ind_pre");
            $stmt2->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt2->execute();
		
            $rows2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows2)){
                 
                foreach($rows2 AS $row2){
                    $id_opc=$row2['id_opcion'];
                    $id_preg=$row2['id_pregunta'];
                    $descripcion=$row2['descripcion_opc'];
                    $estado=$row2['estado_opc'];
					$acumulado=0;
                    $tr3.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="contenido" name="contenido" value="$contenido"><input type="hidden" id="acumulado" name="acumulado" value="$acumulado"><input type="hidden" id="id_categoria" name="id_categoria" value="$id_categoria"><input type="hidden" id="id_preg" name="id_preg" value="$id_preg"><input type="hidden" id="estado" name="estado" value="$estado"> $descripcion</td>
                       <td><input type="radio" id="respuesta" name="respuesta" required="required" value="$respuesta"></td>  
                    </tr>
HTML;
                }
                $html_result=<<<HTML
                <table id="opciones" border ="1" cellspacing="0" bordercolor="#0000FF">
                    $tr
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );}
					
                    $tr2.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="seleccionar" value="$id_categoria"><input type="hidden" id="pregunta_id" name="pregunta_id" value="$contenido"> $contenido</td> 
                    </tr>
					
HTML;
                }
                $html_result=<<<HTML
				<table id="tabla_seleccion" border="1" style="border:1px #000099 solid">
					<tr>
						<th colspan="4">Nivel $cat</th>
					</tr>
					<tr>
						<td>N&deg;</td>
						<td>Dificultad</td>
						<td>Capitales De:</td>
						<td>Premio</td>
					</tr>
					$tr
                </table>
				</br>
                <table id="pregunta" border ="1" cellspacing="0" bordercolor="#0000FF">
                    <tr bgcolor="#ACCCFD">
                        <th colspan="2">Cual es la capital de:?</th>
                        
                    </tr>
                    $tr2
					$tr3
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );
            }
            else{
                $html_result=<<<HTML
                <h5>
                    No hay resultados
                </h5>
HTML;
                $array_result=array(
                    'result'=>'data_no_found',
                    'html_result'=>$html_result
                );
            }
       }
    }catch(PDOExeption $ex){
        $ex_message=$ex->getMessage();
        $array_result=array(
            'result'=>'data_found',
            'html_result'=>$ex_message
        );
    }
    return $array_result;
	}
 
 //MUESTRA EL NIVEL 4
public function mostrarPregunta4($cat){
 require_once "Conexion.php";
    try{
       $db=Conexion::crear_conexion()->getDbConexion();
	   $ind_pre=mt_rand(16,20);
       if($db){
            //$var_id=1;
            $stmt=$db->prepare("SELECT P.id_pregunta AS id_pregu, P.contenido AS contenid, P.id_categoria AS id_catego, C.dificultad AS dificult, C.nombre AS nomb, PR.valor AS val FROM `pt_pregunta` AS P JOIN pt_categoria AS C ON P.id_categoria=C.id_categoria JOIN pt_premio AS PR ON C.id_premio=PR.id_premio WHERE C.id_categoria= :cat AND P.id_pregunta= :ind_pre");
            $stmt->bindValue('cat',$cat,PDO::PARAM_STR);
			$stmt->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt->execute();
		
            $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows)){
                 $tr=""; $tr2=""; $tr3="";
                foreach($rows AS $row){
                    $id_categoria=$row['id_catego'];
                    $contenido=$row['contenid'];
					$dificulta=$row['dificult'];
					$nombre=$row['nomb'];
					$valor=$row['val'];
					$tr.=<<<HTML
                    <tr>
						<td>$id_categoria</td>
						<td>$dificulta</td>
						<td>$nombre</td>
						<td>$ $valor</td>
					</tr>
HTML;
					 $stmt2=$db->prepare("SELECT * FROM pt_opcion WHERE id_pregunta= :ind_pre");
            $stmt2->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt2->execute();
		
            $rows2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows2)){
                 
                foreach($rows2 AS $row2){
                    $id_opc=$row2['id_opcion'];
                    $id_preg=$row2['id_pregunta'];
                    $descripcion=$row2['descripcion_opc'];
                    $estado=$row2['estado_opc'];
					$acumulado=0;
                    $tr3.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="contenido" name="contenido" value="$contenido"><input type="hidden" id="acumulado" name="acumulado" value="$acumulado"><input type="hidden" id="id_categoria" name="id_categoria" value="$id_categoria"><input type="hidden" id="id_preg" name="id_preg" value="$id_preg"><input type="hidden" id="estado" name="estado" value="$estado"> $descripcion</td>
                       <td><input type="radio" id="respuesta" name="respuesta" required="required" value="$respuesta"></td>  
                    </tr>
HTML;
                }
                $html_result=<<<HTML
                <table id="opciones" border ="1" cellspacing="0" bordercolor="#0000FF">
                    $tr
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );}
					
                    $tr2.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="seleccionar" value="$id_categoria"><input type="hidden" id="pregunta_id" name="pregunta_id" value="$contenido"> $contenido</td> 
                    </tr>
					
HTML;
                }
                $html_result=<<<HTML
				<table id="tabla_seleccion" border="1" style="border:1px #000099 solid">
					<tr>
						<th colspan="4">Nivel $cat</th>
					</tr>
					<tr>
						<td>N&deg;</td>
						<td>Dificultad</td>
						<td>Capitales De:</td>
						<td>Premio</td>
					</tr>
					$tr
                </table>
				</br>
                <table id="pregunta" border ="1" cellspacing="0" bordercolor="#0000FF">
                    <tr bgcolor="#ACCCFD">
                        <th colspan="2">Cual es la capital de:?</th>
                        
                    </tr>
                    $tr2
					$tr3
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );
            }
            else{
                $html_result=<<<HTML
                <h5>
                    No hay resultados
                </h5>
HTML;
                $array_result=array(
                    'result'=>'data_no_found',
                    'html_result'=>$html_result
                );
            }
       }
    }catch(PDOExeption $ex){
        $ex_message=$ex->getMessage();
        $array_result=array(
            'result'=>'data_found',
            'html_result'=>$ex_message
        );
    }
    return $array_result;
	}
 
 //MUESTRA EL NIVEL 5
public function mostrarPregunta5($cat){
 require_once "Conexion.php";
    try{
       $db=Conexion::crear_conexion()->getDbConexion();
	   $ind_pre=mt_rand(21,25);
       if($db){
            //$var_id=1;
            $stmt=$db->prepare("SELECT P.id_pregunta AS id_pregu, P.contenido AS contenid, P.id_categoria AS id_catego, C.dificultad AS dificult, C.nombre AS nomb, PR.valor AS val FROM `pt_pregunta` AS P JOIN pt_categoria AS C ON P.id_categoria=C.id_categoria JOIN pt_premio AS PR ON C.id_premio=PR.id_premio WHERE C.id_categoria= :cat AND P.id_pregunta= :ind_pre");
            $stmt->bindValue('cat',$cat,PDO::PARAM_STR);
			$stmt->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt->execute();
		
            $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows)){
                 $tr=""; $tr2=""; $tr3="";
                foreach($rows AS $row){
                    $id_categoria=$row['id_catego'];
                    $contenido=$row['contenid'];
					$dificulta=$row['dificult'];
					$nombre=$row['nomb'];
					$valor=$row['val'];
					$tr.=<<<HTML
                    <tr>
						<td>$id_categoria</td>
						<td>$dificulta</td>
						<td>$nombre</td>
						<td>$ $valor</td>
					</tr>
HTML;
					 $stmt2=$db->prepare("SELECT * FROM pt_opcion WHERE id_pregunta= :ind_pre");
            $stmt2->bindValue('ind_pre',$ind_pre,PDO::PARAM_INT);
            $stmt2->execute();
		
            $rows2=$stmt2->fetchAll(PDO::FETCH_ASSOC);
            if(is_array($rows2)){
                 
                foreach($rows2 AS $row2){
                    $id_opc=$row2['id_opcion'];
                    $id_preg=$row2['id_pregunta'];
                    $descripcion=$row2['descripcion_opc'];
                    $estado=$row2['estado_opc'];
					$acumulado=0;
                    $tr3.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="contenido" name="contenido" value="$contenido"><input type="hidden" id="acumulado" name="acumulado" value="$acumulado"><input type="hidden" id="id_categoria" name="id_categoria" value="$id_categoria"><input type="hidden" id="id_preg" name="id_preg" value="$id_preg"><input type="hidden" id="estado" name="estado" value="$estado"> $descripcion</td>
                       <td><input type="radio" id="respuesta" name="respuesta" required="required" value="$respuesta"></td>  
                    </tr>
HTML;
                }
                $html_result=<<<HTML
                <table id="opciones" border ="1" cellspacing="0" bordercolor="#0000FF">
                    $tr
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );}
					
                    $tr2.=<<<HTML
                    <tr>
                       <td colspan="2"><input type="hidden" id="seleccionar" value="$id_categoria"><input type="hidden" id="pregunta_id" name="pregunta_id" value="$contenido"> $contenido</td> 
                    </tr>
					
HTML;
                }
                $html_result=<<<HTML
				<table id="tabla_seleccion" border="1" style="border:1px #000099 solid">
					<tr>
						<th colspan="4">Nivel $cat</th>
					</tr>
					<tr>
						<td>N&deg;</td>
						<td>Dificultad</td>
						<td>Capitales De:</td>
						<td>Premio</td>
					</tr>
					$tr
                </table>
				</br>
                <table id="pregunta" border ="1" cellspacing="0" bordercolor="#0000FF">
                    <tr bgcolor="#ACCCFD">
                        <th colspan="2">Cual es la capital de:?</th>
                        
                    </tr>
                    $tr2
					$tr3
                </table>
HTML;
                $array_result=array(
                    'result'=>'data_found',
                    'html_result'=>$html_result
                );
            }
            else{
                $html_result=<<<HTML
                <h5>
                    No hay resultados
                </h5>
HTML;
                $array_result=array(
                    'result'=>'data_no_found',
                    'html_result'=>$html_result
                );
            }
       }
    }catch(PDOExeption $ex){
        $ex_message=$ex->getMessage();
        $array_result=array(
            'result'=>'data_found',
            'html_result'=>$ex_message
        );
    }
    return $array_result;
	}
 
 
 }

?>