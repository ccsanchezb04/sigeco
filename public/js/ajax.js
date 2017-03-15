function buscador() {
	var xmlhttp=false;

	try{
		xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
	}
	catch(e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E){
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function buscar() {

	var busqueda  = document.getElementById('busqueda').value;
	var resultado = document.getElementById('res_tabla');
	ajax = buscador();
	ajax.open("GET", '?q='+busqueda);
	ajax.onreadystatechange = function(){
		if (ajax.readyState == 3) {
			resultado.innerHTML = ajax.responseText;
		}
		
	}
	if (busqueda.length <= 1) {
		ajax = buscador();
		ajax.open("GET", "?q=z");
		ajax.onreadystatechange = function(){
			if (ajax.readyState == 3) {
				resultado.innerHTML = ajax.responseText;
			}
		}

	}
	console.log(resultado);
	ajax.send(null);
}
 
/*===============================================*/
/*saber que tecla se oprimio y ejecutar buscar*/
/*===============================================*/
function callkeydownhandler(evnt) {
   var ev   = (evnt) ? evnt : event;
   var code =(ev.which) ? ev.which : event.keyCode;
 /*  alert("El código de la tecla pulsada es: " + code);*/
   if (code == 8) {
   		buscar();
   };
}
if (window.document.addEventListener) {
   window.document.addEventListener("keydown", callkeydownhandler, false);
} 
else {
   window.document.attachEvent("onkeydown", callkeydownhandler);
}