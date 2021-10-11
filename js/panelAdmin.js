var formulario = document.getElementById('formulario'),
	cantidad = formulario.cantidad,
	precio = formulario.precio;
	error = document.getElementById('error');

function validarcantidad(e){
	//Fuincion para validar la informacion del campo
	if (cantidad.value == '' || cantidad.value == null) {
		console.log("Por favor ingrese la cantidad");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese la cantidad</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function validarprecio(e){
	//Fuincion para validar la informacion del campo
	if (precio.value == '' || precio.value == null) {
		console.log("Por favor ingrese el precio");
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingrese el precio</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}


function ValidarFormulario(e){
	error.innerHTML = '';

	validarcantidad(e);
	validarprecio(e);

}	

formulario.addEventListener('submit', ValidarFormulario);


