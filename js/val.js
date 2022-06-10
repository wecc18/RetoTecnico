//Funcion para validar la info en los formularios 
	 var alfanumericos= /(^([A-Z\u00F1\u00D1.-_# a-z]{1,20}))$/; //Cualquier alfanumérico, [a-zA-Z0-9_ ] \w
//Funcion para validar los valores en el Index

function ValidaIndex(formulario) { 
	if(!alfanumericos.test(formulario.logi.value)){
		formulario.logi.focus(); 
		formulario.logi.style.backgroundColor ='#F8E0E0'; 
		formulario.logi.style.borderColor ='#FF0000';
		alert("Valores no Validos, solo Letras y Numeros");
		formulario.password.style.backgroundColor ='#FFFFFF'; 
		 formulario.password.style.borderColor ='#FAFAFA';
		return false;
	  }else if(!alfanumericos.test(formulario.password.value)){
		formulario.password.focus(); 
		formulario.password.style.backgroundColor ='#F8E0E0'; 
		formulario.password.style.borderColor ='#FF0000';
		alert("Valores no Validos, solo Letras y Numeros");
		formulario.logi.style.backgroundColor ='#FFFFFF'; 
		formulario.logi.style.borderColor ='#FAFAFA';
		return false;
		  }
	  else{
		 formulario.logi.style.backgroundColor ='#FFFFFF'; 
		 formulario.logi.style.borderColor ='#FAFAFA';
		 formulario.password.style.backgroundColor ='#FFFFFF'; 
		 formulario.password.style.borderColor ='#FAFAFA';
	  return true;
	  }
 }	