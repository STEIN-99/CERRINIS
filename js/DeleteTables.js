function objetoAjax(){
	var xmlhttp=false;
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



//////////////////////////////////////////////////////////

function eliminarOrden(NO_ORDEN){
	//donde se mostrará el resultado de la eliminacion

	//usaremos un cuadro de confirmacion 
	var eliminar = confirm("¿Desea eliminar este dato?")
	if ( eliminar ) {
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	//indicamos el archivo que realizará el proceso de eliminación
	//junto con un valor que representa el id del empleado
	ajax.open("GET", "funciones/DeleteOrden.php?NO_ORDEN="+NO_ORDEN);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			mostrarTrabajo();
			}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.send(null)
	}
 }

//////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////

function eliminarUser(ID_USUA){
	//donde se mostrará el resultado de la eliminacion

	//usaremos un cuadro de confirmacion 
	var eliminar = confirm("¿Desea eliminar este dato?")
	if ( eliminar ) {
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//uso del medotod GET
	//indicamos el archivo que realizará el proceso de eliminación
	//junto con un valor que representa el id del empleado
	ajax.open("GET", "funciones/DeleteUser.php?ID_USUA="+ID_USUA);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			mostrarUser();
			}
	}
	//como hacemos uso del metodo GET
	//colocamos null
	ajax.send(null)
	}
 }

//////////////////////////////////////////////////////////