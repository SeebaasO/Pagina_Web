var formulario = document.getElementById('formulario'),
	celular = formulario.celular,
	ciudad = formulario.ciudad,
	direccion = formulario.direccion;
	error = document.getElementById('error');

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

function ValidarFormulario(e){
	error.innerHTML = '';

	validarCelular(e);
	validarCiudad(e);
	validarDireccion(e);
}	

formulario.addEventListener('submit', ValidarFormulario);