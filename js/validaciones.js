// JavaScript Document

//Desde aqui las validaciones-->

//para biseccion
function formulario1()
{
//Chequeamos a
if (document.bise.a.value.length==0){
   alert("Debes introducir un valor en A.");
   document.bise.a.focus();
   return false;
}

//Chequeamos b
if (document.bise.b.value.length==0){
   alert("Debes introducir un valor en B.");
   document.bise.b.focus();
   return false;
}


//Chequeamos n
if (document.bise.n.value.length==0){
   alert("Debes introducir un valor para iterar.");
   document.bise.n.focus();
   return false;
}


//enviar form
alert("¡Click para ver el resultado!");

	document.bise.submit();

}

//para Gauss
function formulario2()
{
	
if (document.datos.x1.value.length==0){
   alert("Introduzca el valor de X");
   document.datos.x1.focus();
   return false;
}


if (document.datos.y1.value.length==0){
   alert("Introduzca Introduzca el valor de Y");
   document.datos.y1.focus();
   return false;
}

if (document.datos.z1.value.length==0){
   alert("Introduzca Introduzca el valor de Z");
   document.datos.z1.focus();
   return false;
}

if (document.datos.t1.value.length==0){
   alert("Introduzca Introduzca el Termino Independiente");
   document.datos.t1.focus();
   return false;
}

if (document.datos.x2.value.length==0){
   alert("Introduzca el valor de X");
   document.datos.x2.focus();
   return false;
}


if (document.datos.y2.value.length==0){
   alert("Introduzca Introduzca el valor de Y");
   document.datos.y2.focus();
   return false;
}

if (document.datos.z2.value.length==0){
   alert("Introduzca Introduzca el valor de Z");
   document.datos.z2.focus();
   return false;
}

if (document.datos.t2.value.length==0){
   alert("Introduzca Introduzca el valor Independiente");
   document.datos.t2.focus();
   return false;
}

if (document.datos.x3.value.length==0){
   alert("Introduzca el valor de X");
   document.datos.x3.focus();
   return false;
}


if (document.datos.y3.value.length==0){
   alert("Introduzca Introduzca el valor de Y");
   document.datos.y3.focus();
   return false;
}

if (document.datos.z3.value.length==0){
   alert("Introduzca Introduzca el valor de Z");
   document.datos.z3.focus();
   return false;
}

if (document.datos.t3.value.length==0){
   alert("Introduzca Introduzca el valor Independiente");
   document.datos.t3.focus();
   return false;
}
//enviar form
alert("¡Click para ver el resultado!");

	document.datos.submit();


}


//para reduccion
function formulario3()
{
	
if (document.reduccion.x1.value.length==0){
   alert("Introduzca el valor de X");
   document.reduccion.x1.focus();
   return false;
}


if (document.reduccion.y1.value.length==0){
   alert("Introduzca Introduzca el valor de Y");
   document.reduccion.y1.focus();
   return false;
}

if (document.reduccion.c1.value.length==0){
   alert("Introduzca Introduzca el valor de c");
   document.reduccion.c1.focus();
   return false;
}

if (document.reduccion.t1.value.length==0){
   alert("Introduzca Introduzca el Termino Independiente");
   document.reduccion.t1.focus();
   return false;
}

if (document.reduccion.x2.value.length==0){
   alert("Introduzca el valor de X");
   document.reduccion.x2.focus();
   return false;
}


if (document.reduccion.y2.value.length==0){
   alert("Introduzca Introduzca el valor de Y");
   document.reduccion.y2.focus();
   return false;
}

if (document.reduccion.c2.value.length==0){
   alert("Introduzca Introduzca el valor de Z");
   document.reduccion.c2.focus();
   return false;
}

if (document.reduccion.t2.value.length==0){
   alert("Introduzca Introduzca el valor Independiente");
   document.reduccion.t2.focus();
   return false;
}

//enviar form
alert("¡Click para ver el resultado!");

	document.reduccion.submit();


}

//para biseccion
function formulario4()
{
//Chequeamos a
if (document.newton.valor.value.length==0){
   alert("Debes introducir un valor en A.");
   document.newton.valor.focus();
   return false;
}

//enviar form
alert("¡Click para ver el resultado!");

	document.newton.submit();

}