<?php
@session_start();
date_default_timezone_set("America/Bogota");
require_once("Conexion.php");


//La siguiente funcion es para redirecionar la pagina ne donde nos encontramos
function redireccionar( $pag, $nuevaVentana = false, $t= 1500 )  
{ 
    $pagina=strtolower($pag);
	echo "<script language=\"Javascript\"> 
        var pagina='$pagina' 
        function redireccionar() {"; 
     
    if ( $nuevaVentana == true ) 
        echo "window.open( pagina, 'nuevaVentana' );"; 
    else 
        echo "location.href=pagina;"; 
     
    echo "} 
        setTimeout( 'redireccionar()', '$t' ); 
    </script>"; 
}

function mensaje($a){
	echo "<script>alert('".$a."'); </script>";
}
function confirma($a){
	echo "<script language=\"Javascript\">
	".$resp.="return confirm('".$a."');
</script>";
return $resp;
}


	
?>