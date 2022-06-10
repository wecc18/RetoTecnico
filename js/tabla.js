//Funcion para validar la info en los formularios 
	 var alfanumericos= /(^([A-Z\u00F1\u00D1.-_# a-z]{1,60}))$/; //Cualquier alfanumérico, [a-zA-Z0-9_ ] \w
	 var numeros = /(^([0,-9]{1,40}))$/;
// Creación del objeto XMLHttpRequest.
function nuevoAjax(xmlhttp){
 
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
var obXHR;
try {
	obXHR=new XMLHttpRequest();
} catch(err) {
	try {
		obXHR=new ActiveXObject("Msxml2.XMLHTTP");
	} catch(err) {
		try {
			obXHR=new ActiveXObject("Microsoft.XMLHTTP");
		} catch(err) {
			obXHR=false;
		}
	}
}



function cargarContenido(pagina,destino){
    var container;
    var ajax;
 
    container = document.getElementById(destino);
    ajax = nuevoAjax(ajax);
    ajax.open("GET", pagina, true);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            container.innerHTML = ajax.responseText;
        }
    }
    ajax.send(null);
}

//Funcion cambiar a Mayusculas	
function conMayusculas(field) {
         field.value = field.value.toUpperCase();
}
//Funciones de redireccion
function cargar_workspace(pag){
	cargarContenido(pag, 'workspace');
	}
function cargar_menu(pag){
	cargarContenido(pag, 'menu');
	}
function cargar_tab(pag){
	cargarContenido(pag, 'tab');
	cargar_workspace('forms/blanc.php');
	}
function cargar_atras(pag){
	cargarContenido(pag, 'menu');
	cargarContenido(pag2, 'workspace');
	}
