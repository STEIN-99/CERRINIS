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

function registrarOrden(){

	XMLHttp=crearInstancia();
	if(XMLHttp)
	{
        pagos=document.ROrden.pago.value;
        entregas=document.ROrden.entrega.value;
        fechas=document.ROrden.fecha.value;
        conceptos=document.ROrden.concepto.value;
        montos=document.ROrden.monto.value;


		url="funciones/AgregarOrden.php?pagos=" + pagos + 
		"&entregas=" + entregas +
		"&fechas=" + fechas +
		"&conceptos=" + conceptos + 
		"&montos=" + montos;



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
					document.getElementById('modal-imprimir').classList.remove('bg-active');
					mostrarTrabajo();
		
				}
			}
		}
		XMLHttp.send(null);
	}
}