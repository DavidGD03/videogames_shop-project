function validarem(){
	var codigo = document.getElementById("codigo").value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var cedula = document.getElementById('cedula').value;
	var contrasena = document.getElementById('contrasena').value;
	var correo = document.getElementById('correo').value;
	var fchnacimiento = document.getElementById('fchnacimiento').value;
	var direccion = document.getElementById('direccion').value;
	var depto = document.getElementById('depto').value;
	var ciudad = document.getElementById('ciudad').value;
	var telefono = document.getElementById('telefono').value;
    var exp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-z]{2,4})+$/;
	
    if(codigo == ""){
		alert("[ERROR]: El campo codigo no fue llenado.");
        return false;
    }
    else if(nombre == ''){
        alert('[ERROR]: El campo nombre no fue llenado.');
        return false;
    }
    else if(apellido == ''){
        alert('[ERROR]: El campo apellido no fue llenado.');
        return false;
    }
    else if(cedula == ''){
        alert('[ERROR]: El campo cedula no fue llenado.');
        return false;
    }
	else if(contrasena == ''){
        alert('[ERROR]: El campo contraseña no fue llenado.');
        return false;
    }
	else if(correo == ''){
        alert('[ERROR]: El campo correo no fue llenado.');
        return false;
    }
	else if(fchnacimiento == ''){
        alert('[ERROR]: El campo fecha de nacimiento no fue llenado.');
        return false;
    }
	else if(direccion == ''){
        alert('[ERROR]: El campo direccion no fue llenado.');
        return false;
    }
	else if(depto == ''){
        alert('[ERROR]: El campo departamento no fue llenado.');
        return false;
    }
	else if(ciudad == ''){
        alert('[ERROR]: El campo ciudad no fue llenado.');
        return false;
    }
	else if(telefono == ''){
        alert('[ERROR]: El campo telefono no fue llenado.');
        return false;
    }
	 else if(!exp.test(correo)){
        alert('[ERROR]: El e-mail ingresado no es valido.');
        return false;
    }
}

function validarFac()
{
var codigo = document.getElementById("codigo").value;
	var fecha = document.getElementById("fecha").value;
	var descuento = document.getElementById("descuento").value;
	var iva = document.getElementById("iva").value;
	var subtotal = document.getElementById("subtotal").value;
	var total = document.getElementById("total").value;
	var direccion = document.getElementById("direccion").value;
	var depto = document.getElementById("depto").value;
	var ciudad = document.getElementById("ciudad").value;
 if(codigo == ""){
		alert("[ERROR]: El campo codigo no fue llenado.");
        return false;
    }
    else if(fecha == ''){
        alert('[ERROR]: El fecha fecha no fue llenado.');
        return false;
    }
    else if(descuento == ''){
        alert('[ERROR]: El campo descuento no fue llenado.');
        return false;
    }
    else if(iva == ''){
        alert('[ERROR]: El campo iva no fue llenado.');
        return false;
    }
	else if(subtotal == ''){
        alert('[ERROR]: El campo subtotal no fue llenado.');
        return false;
    }
	else if(total == ''){
        alert('[ERROR]: El campo total no fue llenado.');
        return false;
    }
	else if(direccion == ''){
        alert('[ERROR]: El campo direccion no fue llenado.');
        return false;
    }
	else if(depto == ''){
        alert('[ERROR]: El campo departamento no fue llenado.');
        return false;
    }
	else if(ciudad == ''){
        alert('[ERROR]: El campo ciudad no fue llenado.');
        return false;
    }
}

function validarJuego()
{
	var codigo = document.getElementById("codigo").value;
	var nombre = document.getElementById("nombre").value;
	var descripcion = document.getElementById("descripcion").value;
	var imagen = document.getElementById("imagen").value;
	var fecha = document.getElementById("fecha").value;
	var req = document.getElementById("req").value;
	var precio = document.getElementById("precio").value;
	var descuento = document.getElementById("descuento").value;

 if(codigo == ""){
		alert("[ERROR]: El campo codigo no fue llenado.");
        return false;
    }
    else if(nombre == ''){
        alert('[ERROR]: El campo nombre no fue llenado.');
        return false;
    }
    else if(descripcion == ''){
        alert('[ERROR]: El campo descripcion no fue llenado.');
        return false;
    }
    else if(imagen == ''){
        alert('[ERROR]: El campo imagen no fue llenado.');
        return false;
    }
	else if(fecha == ''){
        alert('[ERROR]: El campo fecha no fue llenado.');
        return false;
    }
	else if(req == ''){
        alert('[ERROR]: El campo requerimientos no fue llenado.');
        return false;
    }
	else if(precio == ''){
        alert('[ERROR]: El campo precio no fue llenado.');
        return false;
    }
	else if(descuento == ''){
        alert('[ERROR]: El campo descuento no fue llenado.');
        return false;
    }
}

function validarRec()
{
	var codigo = document.getElementById("codigo").value;
	var titulo = document.getElementById("titulo").value;
	var descripcion = document.getElementById("descripcion").value;
	var fecha = document.getElementById("fecha").value;
	var horas = document.getElementById("horas").value;
 if(codigo == ""){
		alert("[ERROR]: El campo codigo no fue llenado.");
        return false;
    }
    else if(titulo == ''){
        alert('[ERROR]: El campo titulo no fue llenado.');
        return false;
    }
    else if(descripcion == ''){
        alert('[ERROR]: El campo descripcion no fue llenado.');
        return false;
    }
    else if(fecha == ''){
        alert('[ERROR]: El campo fecha no fue llenado.');
        return false;
    }
	else if(horas == ''){
        alert('[ERROR]: El campo horas jugadas no fue llenado.');
        return false;
    }
}

function validarUsuario()
{
	var codigo = document.getElementById("codigo").value;
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var nickname = document.getElementById("nickname").value;
	var contrasena = document.getElementById("contrasena").value;
	var correo = document.getElementById("correo").value;
	var fchnacimiento = document.getElementById("fchnacimiento").value;
	var telefono = document.getElementById("telefono").value;
	var dinero = document.getElementById("dinero").value;
	var puntos = document.getElementById("puntos").value;
	var exp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-z]{2,4})+$/;
	
 if(codigo == ""){
		alert("[ERROR]: El campo codigo no fue llenado.");
        return false;
    }
    else if(nombre == ''){
        alert('[ERROR]: El campo nombre no fue llenado.');
        return false;
    }
    else if(apellido == ''){
        alert('[ERROR]: El campo apellido no fue llenado.');
        return false;
    }
    else if(nickname == ''){
        alert('[ERROR]: El campo nickname no fue llenado.');
        return false;
    }
	else if(contrasena == ''){
        alert('[ERROR]: El campo contraseña no fue llenado.');
        return false;
    }
	else if(correo == ''){
        alert('[ERROR]: El campo correo no fue llenado.');
        return false;
    }
	else if(fchnacimiento == ''){
        alert('[ERROR]: El campo fecha de nacimiento no fue llenado.');
        return false;
    }
	else if(telefono == ''){
        alert('[ERROR]: El campo telefono no fue llenado.');
        return false;
    }
	else if(dinero == ''){
        alert('[ERROR]: El campo dinero no fue llenado.');
        return false;
    }
	else if(puntos == ''){
        alert('[ERROR]: El campo puntos no fue llenado.');
        return false;
    }
	else if(!exp.test(correo)){
        alert('[ERROR]: El e-mail ingresado no es valido.');
        return false;
    }
}

function validarUsuarioreg()
{
	var codigo = document.getElementById("codigo").value;
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var nickname = document.getElementById("nickname").value;
	var contrasena = document.getElementById("contrasena").value;
	var correo = document.getElementById("correo").value;
	var fchnacimiento = document.getElementById("fchnacimiento").value;
	var telefono = document.getElementById("telefono").value;
	var exp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[a-z]{2,4})+$/;
	
 if(codigo == ""){
		alert("[ERROR]: El campo codigo no fue llenado.");
        return false;
    }
    else if(nombre == ''){
        alert('[ERROR]: El campo nombre no fue llenado.');
        return false;
    }
    else if(apellido == ''){
        alert('[ERROR]: El campo apellido no fue llenado.');
        return false;
    }
    else if(nickname == ''){
        alert('[ERROR]: El campo nickname no fue llenado.');
        return false;
    }
	else if(contrasena == ''){
        alert('[ERROR]: El campo contraseña no fue llenado.');
        return false;
    }
	else if(correo == ''){
        alert('[ERROR]: El campo correo no fue llenado.');
        return false;
    }
	else if(fchnacimiento == ''){
        alert('[ERROR]: El campo fecha de nacimiento no fue llenado.');
        return false;
    }
	else if(telefono == ''){
        alert('[ERROR]: El campo telefono no fue llenado.');
        return false;
    }
	else if(!exp.test(correo)){
        alert('[ERROR]: El e-mail ingresado no es valido.');
        return false;
    }
}


function mayuscula(e) {
    e.value = e.value.toUpperCase();
}

function letra(e){
    var caracter = e.key.toLowerCase();
    var abc = "abcdefghijklmnñopqrstuvwxyzáéíóú ";
    
    if(abc.indexOf(caracter)==-1){
       return false;
    }
}

function numero(e){
    var caracter = e.key;
    
    if(isNaN(caracter)){
       return false;
    }
}
