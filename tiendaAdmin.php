<?php 
session_start();
require_once 'crud.php';
$objetoAdministracion = new administracion;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/cssTiendaUsuario.css">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
</head>
<body>	

	<div class="">
		
		<div class="container">
		
		<div class="row justify-content-around">
			<!--Zona del header con imagenes-->
			<div class="heder">
				<img class="img-thumbnail" src="img/sombreros/16c.jpeg">
				<img class="img-thumbnail" src="img/sombreros/15c.jpeg">
				<img class="img-thumbnail" src="img/sombreros/3.jpeg">
			</div>
		</div>

		<div class="nav row justify-content-start align-items-center">
			<!--Zona del nav-bar con sus opciones de navegacion  -->
			<a href="indexAdmin.php">
				<div class="col-auto nav-btn">
				Montery
			</div>
			</a>

			<a href="tiendaAdmin.php">
				<div class="col-auto nav-btn">
				Tienda
				</div>
			</a>

			<a href="contactoAdmin.php">
				<div class="col-auto nav-btn">
				Contacto
				</div>
			</a>

			<a href="panelAdmin.php">
				<div class="col-auto nav-btn">
				Panel
				</div>
			</a>

			<div class="col-auto offset-1 textnav">
				Bienvenido
				<?php echo $_SESSION['nombre']; ?>
			</div>

		</div>

		<div class="container main row">
			<!--Zona de main con su respectiva informacion -->			
			<div class="col-12">
				
				<form id="formulario" action="tiendaUsuario.php" method="POST" name="formulario">
				<!--Informacion de todos los productos-->	
				<div class="row">
					
					<div class="col-3 contForm border">
						<img src="img/sombreros/6.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 2 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(1) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>	
						<h4>Agregar cantidad</h4>
						<div class="pl-4 pb-3 contForm">
							<input type="number" id="cantidad1" class="" name="cantidad1" min="0" value="0">
							<input type="hidden" name='cod1' value='1' class="">
						</div>
						<hr>
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/7.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 2 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(2) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad2" class="" name="cantidad2" min="0" value="0">
							<input type="hidden" name='cod2' value='2' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/20.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 2 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(3) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad3" class="" name="cantidad3" min="0" value="0">
							<input type="hidden" name='cod3' value='3' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/19.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 2 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(4) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad4" class="" name="cantidad4" min="0" value="0">
							<input type="hidden" name='cod4' value='4' class="">
						</div>
						<hr>		
					</div >	

				</div>

				<div class="row">
					
					<div class="col-3 contForm border">
								
						<img src="img/sombreros/14.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(5) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 pb-3 contForm">
							<input type="number" id="cantidad5" class="" name="cantidad5" min="0" value="0">
							<input type="hidden" name='cod5' value='5' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/8.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(6) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad6" class="" name="cantidad6" min="0" value="0">
							<input type="hidden" name='cod6' value='6' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/22.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(7) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad7" class="" name="cantidad7" min="0" value="0">
							<input type="hidden" name='cod7' value='7' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/24.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(8) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad8" class="" name="cantidad8" min="0" value="0">
							<input type="hidden" name='cod8' value='8' class="">
						</div>
						<hr>		
					</div >	

				</div>	

				<div class="row">
					
					<div class="col-3 contForm border">
								
						<img src="img/sombreros/11.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(9) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 pb-3 contForm">
							<input type="number" id="cantidad9" class="" name="cantidad9" min="0" value="0">
							<input type="hidden" name='cod9' value='9' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/12.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(10) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad10" class="" name="cantidad10" min="0" value="0">
							<input type="hidden" name='cod10' value='10' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/17.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(11) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad11" class="" name="cantidad11" min="0" value="0">
							<input type="hidden" name='cod11' value='11' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/18.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(12) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad12" class="" name="cantidad12" min="0" value="0">
							<input type="hidden" name='cod12' value='12' class="">
						</div>
						<hr>		
					</div >	

				</div>	

				<div class="row">
					
					<div class="col-3 contForm border">
								
						<img src="img/sombreros/10.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 4</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(13) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 pb-3 contForm">
							<input type="number" id="cantidad13" class="" name="cantidad13" min="0" value="0">
							<input type="hidden" name='cod13' value='13' class="">
						</div>
						<hr>
								
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/9.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 4</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(14) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">			
							<input type="number" id="cantidad14" class="" name="cantidad14" min="0" value="0">
							<input type="hidden" name='cod14' value='14' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/25.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 4</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(15) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad15" class="" name="cantidad15" min="0" value="0">
							<input type="hidden" name='cod15' value='15' class5="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/23.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 4</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(16) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">				
							<input type="number" id="cantidad16" class="" name="cantidad16" min="0" value="0">
							<input type="hidden" name='cod16' value='16' class="">
						</div>
						<hr>		
					</div >	

				</div>		

				<div class="row">
					
					<div class="col-3 contForm border">
								
						<img src="img/sombreros/5.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 5</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(17) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 pb-3 contForm">
							<input type="number" id="cantidad17" class="" name="cantidad17" min="0" value="0">
							<input type="hidden" name='cod17' value='17' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/13.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 5</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(18) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">							
							<input type="number" id="cantidad18" class="" name="cantidad18" min="0" value="0">
							<input type="hidden" name='cod18' value='18' class="">
						</div>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/20.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 5</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(19) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						
						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad19" class="" name="cantidad19" min="0" value="0">
							<input type="hidden" name='cod19' value='19' class5="">
						</div>
						<hr>	
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/21.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 5</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(20) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>

						<h4>Agregar cantidad</h4>
						<div class="pl-4 contForm">
							<input type="number" id="cantidad20" class="" name="cantidad20" min="0" value="0">
							<input type="hidden" name='cod20' value='20' class="">
						</div>
						<hr>
								
					</div >	

				</div>	

				<ul class="error offset-4" id="error"></ul>

				<input type="submit" id="agregar" value="Registrar pedido" class="btn agregar offset-5" name="agregar">
							
				</form>

			</div>

		</div>


	
		<div class="row footer align-items-center">
			<!-- Zona del footer con la informacion de contacto -->
			<div class="col-2 contacto ">

				Contacto <br>
				+57 312 760 5094<br>
				Armenia Quindio <br>
				Carrera 21 # 14-29 <br>

			</div>

			<div class="link col">
				
				<div class="textoFooter">
					<p class="textoFooter">Siguenos en </p>
				</div>

				<a href="https://www.facebook.com/" >
					<img class="fan" src="img/f.png">
				</a>

				<a href="https://www.instagram.com/?hl=es-la">
					<img class="fan" src="img/i.png">
				</a>

				<a href="https://web.whatsapp.com/" class="fan">
					<img class="fan" src="img/w.png">
				</a>
			</div>

			<div class="col-auto contacto">
				
				Sebastian Otalvaro <br>
				+57 312 760 5094 <br>

				<a href="https://web.whatsapp.com/"><img src="img/wF.png"></a>
				<a href="https://www.instagram.com/"><img src="img/iF.png"></a>
				<a href="https://www.facebook.com/"><img src="img/fF.png"></a>
				<a href="https://twitter.com/"><img src="img/t.png"></a>

			</div>

		</div>

	</div>

	</div>

<script src="js/tienda.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php
		if(isset($_POST['agregar'])){

			$fecha = date('Y-m-d',time());

			$objetoAdministracion->cedulaCliente = $_SESSION['cedula'];
			$objetoAdministracion->fechaPedido = $fecha;

			if($objetoAdministracion->registrarPedido()){
				echo "<script>
				alert('con su cuenta');
				</script>";	
			}

			if ($_POST['cantidad1'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod1'];
				$objetoAdministracion->cantidad = $_POST['cantidad1'];
				$objetoAdministracion->total = $_POST['cantidad1']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(1) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad1'];
				$objetoAdministracion->codProducto = 1;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad2'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod2'];
				$objetoAdministracion->cantidad = $_POST['cantidad2'];
				$objetoAdministracion->total = $_POST['cantidad2']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(2) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad2'];
				$objetoAdministracion->codProducto = 2;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad3'] > 0) {
				
				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod3'];
				$objetoAdministracion->cantidad = $_POST['cantidad3'];
				$objetoAdministracion->total = $_POST['cantidad3']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(3) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad3'];
				$objetoAdministracion->codProducto = 3;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad4'] > 0) {
				
				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod4'];
				$objetoAdministracion->cantidad = $_POST['cantidad4'];
				$objetoAdministracion->total = $_POST['cantidad4']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(4) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad4'];
				$objetoAdministracion->codProducto = 4;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad5'] > 0) {
				
				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod5'];
				$objetoAdministracion->cantidad = $_POST['cantidad5'];
				$objetoAdministracion->total = $_POST['cantidad5']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(5) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad5'];
				$objetoAdministracion->codProducto = 5;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad6'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod6'];
				$objetoAdministracion->cantidad = $_POST['cantidad6'];
				$objetoAdministracion->total = $_POST['cantidad6']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(6) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad6'];
				$objetoAdministracion->codProducto = 6;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad7'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod7'];
				$objetoAdministracion->cantidad = $_POST['cantidad7'];
				$objetoAdministracion->total = $_POST['cantidad7']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(7) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad7'];
				$objetoAdministracion->codProducto = 7;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad8'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod8'];
				$objetoAdministracion->cantidad = $_POST['cantidad8'];
				$objetoAdministracion->total = $_POST['cantidad8']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(8) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad8'];
				$objetoAdministracion->codProducto = 8;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad9'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod9'];
				$objetoAdministracion->cantidad = $_POST['cantidad9'];
				$objetoAdministracion->total = $_POST['cantidad9']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(9) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad9'];
				$objetoAdministracion->codProducto = 9;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad10'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod10'];
				$objetoAdministracion->cantidad = $_POST['cantidad10'];
				$objetoAdministracion->total = $_POST['cantidad10']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(10) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad10'];
				$objetoAdministracion->codProducto = 10;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad11'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod11'];
				$objetoAdministracion->cantidad = $_POST['cantidad11'];
				$objetoAdministracion->total = $_POST['cantidad11']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(11) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad11'];
				$objetoAdministracion->codProducto = 11;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad12'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod12'];
				$objetoAdministracion->cantidad = $_POST['cantidad12'];
				$objetoAdministracion->total = $_POST['cantidad12']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(12) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad12'];
				$objetoAdministracion->codProducto = 12;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad13'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod13'];
				$objetoAdministracion->cantidad = $_POST['cantidad13'];
				$objetoAdministracion->total = $_POST['cantidad13']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(13) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad13'];
				$objetoAdministracion->codProducto = 13;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad14'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod14'];
				$objetoAdministracion->cantidad = $_POST['cantidad14'];
				$objetoAdministracion->total = $_POST['cantidad14']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(14) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad14'];
				$objetoAdministracion->codProducto = 14;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad15'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod15'];
				$objetoAdministracion->cantidad = $_POST['cantidad15'];
				$objetoAdministracion->total = $_POST['cantidad15']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(15) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad15'];
				$objetoAdministracion->codProducto = 15;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad16'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod16'];
				$objetoAdministracion->cantidad = $_POST['cantidad16'];
				$objetoAdministracion->total = $_POST['cantidad16']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(16) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad16'];
				$objetoAdministracion->codProducto = 16;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad17'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod17'];
				$objetoAdministracion->cantidad = $_POST['cantidad17'];
				$objetoAdministracion->total = $_POST['cantidad17']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(17) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad17'];
				$objetoAdministracion->codProducto = 17;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad18'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod18'];
				$objetoAdministracion->cantidad = $_POST['cantidad18'];
				$objetoAdministracion->total = $_POST['cantidad18']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(18) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad18'];
				$objetoAdministracion->codProducto = 18;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad19'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod19'];
				$objetoAdministracion->cantidad = $_POST['cantidad19'];
				$objetoAdministracion->total = $_POST['cantidad19']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(19) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad19'];
				$objetoAdministracion->codProducto = 19;

				$objetoAdministracion->actualizarProductoCantidad();
			}

			if ($_POST['cantidad20'] > 0) {

				$objetoAdministracion->cedulaClienteD = $_SESSION['cedula'];
				$objetoAdministracion->codProducto = $_POST['cod20'];
				$objetoAdministracion->cantidad = $_POST['cantidad20'];
				$objetoAdministracion->total = $_POST['cantidad20']*6000; 
				$objetoAdministracion->estado = 0;

				$objetoAdministracion->registrarDetalles();

				foreach($objetoAdministracion->obtenerProducto(20) as $k){$cantidadA = $k->cantidadExistencia;}

				$objetoAdministracion->cantidadExistencia = $cantidadA - $_POST['cantidad20'];
				$objetoAdministracion->codProducto = 20;

				$objetoAdministracion->actualizarProductoCantidad();
			}
		}

 ?>