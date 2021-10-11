var form = document.getElementById('form'),
	empresa = form.empresa,
	telefono = form.telefono;
	error = document.getElementById('error');

function validarempresa(e){
	//Fuincion para validar la informacion del campo
	if (empresa.value == '' || empresa.value == null) {
		console.log("Por favor ingrese su empresa");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese la empresa</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function validartelefono(e){
	//Fuincion para validar la informacion del campo
	if (telefono.value == '' || telefono.value == null) {
		console.log("Por favor ingrese su telefono");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese el telefono</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function Validarform(e){
	error.innerHTML = '';

	validarempresa(e);
	validartelefono(e);
}	

form.addEventListener('submit', Validarform);