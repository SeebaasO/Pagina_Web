var formulario = document.getElementById('formulario'),
	cedula = formulario.cedula,
	clave = formulario.clave;
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

function ValidarFormulario(e){
error.innerHTML= '';

	validarCedula(e);
	validarClave(e);

}

formulario.addEventListener('submit', ValidarFormulario);