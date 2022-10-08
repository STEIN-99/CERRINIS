function crearInstancia()
{
	XMLHttp=false;
	if(window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}
	else
	{
		alert('No se pudo crear la instancia');
	}
}

function registrarUsua(){

	XMLHttp=crearInstancia();
	if(XMLHttp)
	{
		user=document.RUsua.usuario.value;
		pass=document.RUsua.passw.value;

		url="funciones/AgregarUsua.php?user=" + user + "&pass=" + pass;

	XMLHttp.open("POST",url,true);
		XMLHttp.onload= function rescliente() {
			if(XMLHttp.readyState==4){
				if(XMLHttp.responseText=='1')
				{
					//respuesta="<a href='bienvenido.php'>Acceso</a>";
					alert('Error de registro');
				}
				else
				{
					//alert('No se pudo hacer el registro');
					alert("El registro de nueva sucursal se realizo correctamente");
					document.getElementById('modal-Rusuario').classList.remove('bg-active');
                    mostrarUser();
		
				}
			}
		}
		XMLHttp.send(null);
	}
}

function registrarSucursal(){

	XMLHttp=crearInstancia();
	if(XMLHttp)
	{
		nombres=document.Rsucursal.nombresucursal.value;
		sucursal=document.Rsucursal.direccionSucursal.value;

		url="../funciones/AgregarSucursal.php?nombres=" + nombres + "&sucursal=" + sucursal;

	XMLHttp.open("POST",url,true);
		XMLHttp.onload= function rescliente() {
			if(XMLHttp.readyState==4){
				if(XMLHttp.responseText=='1')
				{
					//respuesta="<a href='bienvenido.php'>Acceso</a>";
					alert('Error de registro');
				}
				else
				{
					//alert('No se pudo hacer el registro');
					alert("El registro de nueva sucursal se realizo correctamente");
					document.getElementById('modal-Sucursal').classList.remove('bg-active');;
					mostrarSucursales();
		
				}
			}
		}
		XMLHttp.send(null);
	}
}