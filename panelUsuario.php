<?php 
session_start();
require_once 'crud.php';
$objetoAdministracion = new administracion;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Montery</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/cssPanelUsuario.css">
</head>
<body>

	<div class="">
		
		<div class="container ">
		
		<div class="row justify-content-around">
			<!--Zona del header con imagenes-->
			<div class="heder">
				<img class="img-thumbnail" src="img/sombreros/16c.jpeg">
				<img class="img-thumbnail" src="img/sombreros/15c.jpeg">
				<img class="img-thumbnail" src="img/sombreros/3.jpeg">
			</div>
		</div>

		<div class="nav row justify-content-start">
			<!--Zona del nav-bar con sus opciones de navegacion  -->
			<a href="indexUsuario.php">
				<div class="col-auto nav-btn">
				Montery
			</div>

			</a>

			<a href="tiendaUsuario.php">
				<div class="col-auto nav-btn">
				Tienda
				</div>
			</a>

			<a href="contactoUsuario.php">
				<div class="col-auto nav-btn">
				Contacto
				</div>
			</a>

			<a href="panelUsuario.php">
				<div class="col-auto nav-btn">
				Panel
				</div>
			</a>

			<div class="col-auto offset-1 textnav">
				Bienvenido
				<?php echo $_SESSION['nombre']; ?>
			</div>

		</div>

		<div class="row">
			<!--Zona de main con su respectiva informacion -->
			<div class="col-9 main ">
				
				<div class="datos">
					
					<h1>
						Bienvenido
						<?php echo $_SESSION['nombre']; ?>
					</h1>

				</div>

				<div class="btn1 container">
					
					<div class="btn1">
						
						<form action="panelUsuario.php" method="POST" class="btn1">
							<!--Zona de botones con su respectiva funcion -->
							<div class="row justify-content-around btn1">
								<input type="submit" name="actualizar" value="Actualizar datos personales" class="row btns col-10">
								<input type="submit" name="detallesPedidos" value="Mostrar detalles de los pedidos" class="row btns col-10">
								<input type="submit" name="detallesEnvios" value="Mostrar detalles de los envios" class="row  btns col-10">
								<input type="submit" name="pedidos" value="Mostrar historial de pedidos" class="row  btns col-10">
							</div>
						</form>

					</div>

				</div>


			</div>

			<div class="col-3 aside">
				<!--Zona del aside con imagenes de muestra y el acceso de a la pagina-->
				<div class="row justify-content-around ">
					
					<a href="cerrarSession.php" name="cerrar">
						<div class="option col">Cerrar Sesion</div>
					</a>
					
				</div>
	
				<div class="row pt-3">
					
					<div class="col img offset-2">
						<img class="img-thumbnail " src="img/sombreros/7.jpeg">
					</div>

				</div>

				<div class="row">
					
					<div class="col img offset-2">
						<img class="img-thumbnail " src="img/sombreros/6.jpeg">
					</div>

				</div>

				<div class="row">
					
					<div class="col img offset-2">
						<img class="img-thumbnail " src="img/sombreros/22.jpeg">
					</div>

				</div>

				<div class="row">
					
					<div class="col img offset-2">
						<img class="img-thumbnail" src="img/sombreros/20.jpeg">
					</div>

				</div>

			</div>

		</div>

		<div class="row main mt-4">
			
		<?php 

		if (isset($_POST['actualizar'])) {
			//Elemento reactivo para actualizar los datos 
		$celularA = $_SESSION['celular'];
		$ciudadA = $_SESSION['ciudad'];
		$direccionA = $_SESSION['direccion'];
		$cedula = $_SESSION['cedula'];
							
							echo "<div class='container formularios'>
								<br>
								<form action='panelUsuario.php' method='POST' class='form-inline formularios' id='formulario'>

									<div class='form-group formularios col-12 pt-4'>
										<label for='celular' class='control-label col-4 offset-2 formularios'>Celular:</label>
										<div class='col-6 formularios'>
										<input type='text' name='celular' id='celular' class='form-control' value='$celularA'>
										</div>
									</div>

									<div class='form-group formularios col-12 pt-4'>
										<label for='ciudad' class='control-label offset-2 col-4 formularios'>Ciudad:</label>
										<div class='col-6 formularios'>
											<input type='text' name='ciudad' id='ciudad' class='form-control' value='$ciudadA'>
										</div>
									</div>

									<div class='form-group formularios col-12 pt-4'>
										<label for='direccion' class='control-label offset-2 col-4 formularios'>Direccion:</label>
										<div class='col-6 formularios'>
											<input type='text' name='direccion' id='direccion' class='form-control' value='$direccionA'>
										</div>
									</div>

									<ul class='error pt-3 col-6 offset-5' id='error'></ul>
									<input type='hidden' name='cedula' value='$cedula'>

									<div class='form-group offset-5 pt-4 formularios '>
										<button type='submit' name='actualizarDatos' class='form-control col-auto btActualizar'>Actualizar datos</button>
									</div>
																			
								</form>

								</div> ";
						}

						if (isset($_POST['actualizarDatos'])) {
							//Inyeccion de los datos a la base de datos
							$objetoAdministracion->celular = $_POST['celular'];
							$objetoAdministracion->ciudad = $_POST['ciudad'];
							$objetoAdministracion->direccion = $_POST['direccion'];
							$objetoAdministracion->cedula = $_POST['cedula'];

							$objetoAdministracion->actualizarCliente();
						}

						if (isset($_POST['detallesPedidos'])) {
							//Elemento reactivo para mostrar los detalles de pedidos del cliente
							echo "
							<div class='container divTable pt-5'>
		 					 <table border ='1' class='tablas table'>
							  <thead>
							  <tr>
							  	<th>Codigo producto</th>
							  	<th>Cantidad</th>
							  	<th>Total</th>
							  	<th>Estado</th>
							  </tr>
							  </thead>";

							foreach ($objetoAdministracion->consultarDetalles() as $k) {

							if ($k->cedulaCliente == $_SESSION['cedula']) {

							echo "<tbody>
								<tr>
									<td>$k->codProducto</td>
									<td>$k->cantidad</td>
									<td>$k->total</td>
									<td>Enviado</td>
							    </tr>
						        </tbody>";
							}
							}

							echo "</table>
								</div>";

						}

						if (isset($_POST['detallesEnvios'])) {
							//Elemento reactivo para mostrar la informaion de los envios del cliente
							echo "
		 					 <div class='container divTable pt-5'>
		 					 <table border ='1' class='tablas table'>
							  <thead>
							  <tr>
							  	<th>Empresa</th>
							  	<th>Telefono</th>
							  	<th>Fecha del envio</th>
							  </tr>
							  </thead>";

							foreach ($objetoAdministracion->consultarenviodetallesCedula() as $k) {

								if ($_SESSION['cedula'] == $k->cedula) {
									
									echo "<tbody>
									  	<tr>
										  	<td>$k->empresa</td>
										  	<td>$k->telefono</td>
										  	<td>$k->fechaEnvio</td>
							            </tr>
						            </tbody>";
								}	 
							}
							echo "</table>
								</div>";
						}

						if (isset($_POST['pedidos'])) {
							//Elemento reactivo para mostrar los pedidos del cliente
								echo "
		 					 <div class='container divTable pt-5'>
		 					 <table border ='1' class='tablas table'>
							  <thead>
							  <tr>
							 	<th>Codigo del pedido</th>
							  	<th>Cedula del Cliente</th>
							  	<th>Fecha del pedido</th>
							  </tr>
							  </thead>";
						foreach ($objetoAdministracion->obtenerPedido($objetoAdministracion->cedulaCliente = $_SESSION['cedula']) as $k) {

								if ($_SESSION['cedula'] == $k->cedulaCliente) {

								 echo "<tbody>
									  	<tr>
										  	<td>$k->codPedido</td>
										  	<td>$k->cedulaCliente</td>
										  	<td>$k->fechaPedido</td>
							            </tr>
						            </tbody>";
							}	 
							}
							echo "</table>
								</div>";

						}

						 ?>

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
<script src="js/panelUsuario.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
