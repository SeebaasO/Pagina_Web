var formulario = document.getElementById('formulario'),
	cedula = formulario.cedula,
	correo = formulario.correo,
	clave = formulario.clave,
	nombre = formulario.nombre,
	celular = formulario.celular,
	ciudad = formulario.ciudad,
	direccion = formulario.direccion,
	terminos = formulario.terminos,
	error = document.getElementById('error');


function validarCedula(e){
	//Fuincion para validar la informacion del campo
	if (cedula.value == '' || cedula.value == null) {
		console.log("Por favor ingrese su cedula");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese su cedula</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function validarCorreo(e){
	//Fuincion para validar la informacion del campo
	if (correo.value == '' || correo.value == null) {
		console.log("Por favor ingrese su Email");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese su correo</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function validarClave(e){
	//Fuincion para validar la informacion del campo
	if (clave.value == '' || clave.value == null) {
		console.log("Por favor ingrese su contraseña");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese su contraseña</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function validarNombre(e){
	//Fuincion para validar la informacion del campo
	if (nombre.value == '' || nombre.value == null) {
		console.log("Por favor ingrese su nombre");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese su nombre</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function validarCelular(e){
	//Fuincion para validar la informacion del campo
	if (celular.value == '' || celular.value == null) {
		console.log("Por favor ingrese su celular");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese su celular</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function validarCiudad(e){
	//Fuincion para validar la informacion del campo
	if (ciudad.value == '' || ciudad.value == null) {
		console.log("Por favor ingrese su ciudad");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese su ciudad</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function validarDireccion(e){
	//Fuincion para validar la informacion del campo
	if (direccion.value == '' || direccion.value == null) {
		console.log("Por favor ingrese su direccion");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese su direccion</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}


function validarTerminos(e){
	//Fuincion para validar la informacion del campo
	if (terminos.checked == false) {
		console.log("Debe aceptar los terminos y condiciones");
		error.style.display = 'block';
		error.innerHTML += '<li>Debe aceptar los terminos y condiciones</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function ValidarFormulario(e){
error.innerHTML= '';

	validarCedula(e);
	validarCorreo(e);
	validarClave(e);
	validarNombre(e);
	validarCelular(e);
	validarCiudad(e);
	validarDireccion(e);
	validarTerminos(e);

}

formulario.addEventListener('submit', ValidarFormulario);