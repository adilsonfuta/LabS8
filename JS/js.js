/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function validacion() {
  
var vnombre = document.getElementById("nombre").value;
var vapellido = document.getElementById("apellido").value;
var vci = document.getElementById("ci").value;
var vtelf = document.getElementById("telf").value;
var vedad = document.getElementById("edad").value;


/* Campos obligatorios*/
if( vnombre == null || vnombre.length == 0 || /^\s+$/.test(vnombre) ) {
alert("Nombre obligatorio");
return false;
}

if( vapellido == null || vapellido.length == 0 || /^\s+$/.test(vapellido) ) {
alert("apellidos obligatorio");
return false;
}

if( vci == null || vci.length == 0 || /^\s+$/.test(vci) ) {
alert("ci obligatorio");
return false;
}

if( vtelf == null || vtelf.length == 0 || /^\s+$/.test(vtelf) ) {
alert("telefono obligatorio");
return false;
}

if( vedad == null || vedad.length == 0 || /^\s+$/.test(vedad) ) {
alert("edad obligatorio");
return false;
}



}