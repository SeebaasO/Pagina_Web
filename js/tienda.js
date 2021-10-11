var formulario = document.getElementById('formulario'),
	cantidad1 = formulario.cantidad1,
	cantidad2 = formulario.cantidad2,
	cantidad3 = formulario.cantidad3,
	cantidad4 = formulario.cantidad4,
	cantidad5 = formulario.cantidad5,
	cantidad6 = formulario.cantidad6,
	cantidad7 = formulario.cantidad7,
	cantidad8 = formulario.cantidad8,
	cantidad9 = formulario.cantidad9,
	cantidad10 = formulario.cantidad10,
	cantidad11 = formulario.cantidad11,
	cantidad12 = formulario.cantidad12,
	cantidad13 = formulario.cantidad13,
	cantidad14 = formulario.cantidad14,
	cantidad15 = formulario.cantidad15,
	cantidad16 = formulario.cantidad16,
	cantidad17 = formulario.cantidad17,
	cantidad18 = formulario.cantidad18,
	cantidad19 = formulario.cantidad19,
	cantidad20 = formulario.cantidad20;
	error = document.getElementById('error');

function validarCantidad(e){
	//Fuincion para validar la cantidad registrada en el pedido
	var cantidad1 = document.getElementById("cantidad1").value;
	var cantidad2 = document.getElementById("cantidad2").value;
	var cantidad3 = document.getElementById("cantidad3").value;
	var cantidad4 = document.getElementById("cantidad4").value;
	var cantidad5 = document.getElementById("cantidad5").value;
	var cantidad6 = document.getElementById("cantidad6").value;
	var cantidad7 = document.getElementById("cantidad7").value;
	var cantidad8 = document.getElementById("cantidad8").value;
	var cantidad9 = document.getElementById("cantidad9").value;
	var cantidad10 = document.getElementById("cantidad10").value;
	var cantidad11 = document.getElementById("cantidad11").value;
	var cantidad12 = document.getElementById("cantidad12").value;
	var cantidad13 = document.getElementById("cantidad13").value;
	var cantidad14 = document.getElementById("cantidad14").value;
	var cantidad15 = document.getElementById("cantidad15").value;
	var cantidad16 = document.getElementById("cantidad16").value;
	var cantidad17 = document.getElementById("cantidad17").value;
	var cantidad18 = document.getElementById("cantidad18").value;
	var cantidad19 = document.getElementById("cantidad19").value;
	var cantidad20 = document.getElementById("cantidad20").value;

	var suma = 0;

	suma = (parseInt(cantidad1) + parseInt(cantidad2) + parseInt(cantidad3) + parseInt(cantidad4) + parseInt(cantidad5)
		+ parseInt(cantidad6) + parseInt(cantidad7) + parseInt(cantidad8) + parseInt(cantidad9) + parseInt(cantidad10) 
		+ parseInt(cantidad11) + parseInt(cantidad12) + parseInt(cantidad13) + parseInt(cantidad14) + parseInt(cantidad15) 
		+  parseInt(cantidad16) + parseInt(cantidad17) + parseInt(cantidad18) + parseInt(cantidad19) + parseInt(cantidad20));

	if (suma == 0) {
		console.log("Debe seleccionar una cantidad");
		error.style.display = 'block';
		error.innerHTML += '<li>Debe seleccionar una cantidad</li>';

		e.preventDefault();

	}else{
		error.style.display = 'none';
	}
}

function ValidarFormulario(e){
error.innerHTML= '';

	validarCantidad(e);

}

formulario.addEventListener('submit', ValidarFormulario);

