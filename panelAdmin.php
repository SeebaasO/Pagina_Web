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
	<link rel="stylesheet" type="text/css" href="css/cssPanelAdmin.css">
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

		<div class="nav row justify-content-start">
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
						
						<form action="panelAdmin.php" method="POST" class="btn1">
							<!--Zona de botones con informacion -->
							<div class="row justify-content-around btn1">
								<input type="submit" name="producto" value="Mostrar productos" class="row btns col-10">
								<input type="submit" name="cliente" value="Mostrar Informacion de los Clientes" class="row btns col-10">
								<input type="submit" name="enviados" value="Envios realizados" class="row btns col-10">
								<input type="submit" name="pendientes" value="Envios pendientes" class="row btns col-10">
								<input type="submit" name="envio" value="Informacion de los envios" class="row btns col-10">
								<input type="submit" name="pedido" value="Informacion de los pedidos" class="row btns col-10">
								<input type="submit" name="actualizar" value="Actualizar producto" class="row btns col-10">	
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
					
					<div class="col img offset-2 pb-5">
						<img class="img-thumbnail" src="img/sombreros/20.jpeg">
					</div>

				</div>

			</div>


		</div>

		<div class="row main mt-4">
			
			<?php 

						if (isset($_POST['actualizar'])) {
							//Elemnto reactivo para mostrar los producto
								echo "
		 						 <div class='container divTable pt-5'>
		 					 	<table border ='1' class='tablas table'>
							 	 <thead>
							 		 <tr>
							 			<th>Codigo</th>
							  			<th>Cantidad en existencia</th>
							  			<th>Precio</th>
							  			<th>Accion</th>
							 		 </tr>
							  	</thead>";

							  foreach ($objetoAdministracion->consultarProducto() as $k) {

							  	echo "<tbody>
									  	<tr>
										  	<td>$k->codProducto</td>
										  	<td>$k->cantidadExistencia</td>
										  	<td>$k->precio</td>
										  	<td class='backForm'>
	            								<form action='panelAdmin.php' method='POST' class='backForm'> 
	                     							<button type='submit' name='act' value='$k->codProducto' class='botonActualizar'>Actualizar</button>
	               								</form>
	           								</td>
							            </tr>
						            </tbody>";

								}
								echo "</table>
									</div>";
						}

						if (isset($_POST['act'])) {
							//Elemnto reactivo para actualizar la informacion de los productos
							$codig = $_POST['act'];
							echo "		<div class='container formularios'>
											<br>
											<form action='panelAdmin.php' method='POST' class='form-inline formularios'id='formulario'>

												<span class='col-12 pb-2 formularios'>Codigo del producto $codig</span>

												<div class='form-group formularios'>
													<label for='cantidad' class='control-label col-3 offset-2 formularios'>Cantidad:</label>
													<div class='col-7 formularios'>
														<input type='text' name='cantidad' id='cantidad' class='form-control'>
													</div>
												</div>

												<div class='form-group formularios'>
													<label for='precio' class='control-label offset-2 col-2 formularios'>Precio:</label>
													<div class='col-6 formularios'>
														<input type='text' name='precio' id='precio' class='form-control'>
													</div>
												</div>

												<input type='hidden' name='codig' value='$codig'>

												<ul class='error pt-3 col-6 offset-5' id='error'></ul>

												<div class='form-group offset-5 pb-2 formularios'>
														<button type='submit' name='actualizarPro' class='form-control col-auto btActualizar'>Actualizar producto</button>
												</div>
												
											</form>

										</div> ";
						}

						if (isset($_POST['actualizarPro'])) {
							//Actualizar la informacion de los productos
								 $objetoAdministracion->codProducto = $_POST['codig'];
								 $objetoAdministracion->cantidadExistencia = $_POST['cantidad'];
								 $objetoAdministracion->precio = $_POST['precio'];
	
								 $objetoAdministracion->actualizarProducto();	
						}

						if (isset($_POST['producto'])) {
							//Elemento reactivo para mostrar todos los producto
							echo "
		 					 <div class='container divTable pt-5'>
		 					 <table border ='1' class='tablas table'>
							  <thead>
							  <tr>
							 	<th>Codigo</th>
							  	<th>Talla</th>
							  	<th>Cantidad en Existencia</th>
							  	<th>Precio</th>
							  </tr>
							  </thead>";

						$talla = 0;
						foreach ($objetoAdministracion->consultarProducto() as $k) {
							
							if ($k->codProducto == 1) {$talla = '2½';}
							if ($k->codProducto == 2) {$talla = '2½';}
							if ($k->codProducto == 3) {$talla = '2½';}
							if ($k->codProducto == 4) {$talla = '2½';}
							if ($k->codProducto == 5) {$talla = 3;}
							if ($k->codProducto == 6) {$talla = 3;}
							if ($k->codProducto == 7) {$talla = 3;}
							if ($k->codProducto == 8) {$talla = 3;}
							if ($k->codProducto == 9) {$talla = '3½';}
							if ($k->codProducto == 10) {$talla = '3½';}
							if ($k->codProducto == 11) {$talla = '3½';}
							if ($k->codProducto == 12) {$talla = '3½';}
							if ($k->codProducto == 13) {$talla = 4;}
							if ($k->codProducto == 14) {$talla = 4;}
							if ($k->codProducto == 15) {$talla = 4;}
							if ($k->codProducto == 16) {$talla = 4;}
							if ($k->codProducto == 17) {$talla = 5;} 
							if ($k->codProducto == 18) {$talla = 5;} 
							if ($k->codProducto == 19) {$talla = 5;} 
							if ($k->codProducto == 20) {$talla = 5;} 


								 echo "<tbody>
									  	<tr>
										  	<td>$k->codProducto</td>
										  	<td>$talla</td>
										  	<td>$k->cantidadExistencia</td>
										  	<td>$k->precio</td>
							            </tr>
						            </tbody>";
								 
							}
							echo "</table>
								</div>";
						}

							if (isset($_POST['cliente'])) {
								//Elemnteo reactivo para mostrar la informacion de los clientes
								echo "
		 					<div class='container divTable pt-5'>
		 					 <table border ='1' class='tablas table'>
							  <thead>
							  <tr>
							 	<th>Cedula</th>
							  	<th>Correo</th>
							  	<th>Nombre</th>
							  	<th>Celular</th>
							  	<th>Ciudad</th>
							  	<th>Direccion</th>
							  </tr>
							  </thead>";

						foreach ($objetoAdministracion->consultarCliente() as $k) {

								 echo "<tbody>
									  	<tr>
										  	<td>$k->cedula</td>
										  	<td>$k->correo</td>
										  	<td>$k->nombre</td>
										  	<td>$k->celular</td>
										  	<td>$k->ciudad</td>
										  	<td>$k->direccion</td>
							            </tr>
						            </tbody>";
								 
							}
							echo "</table>
								</div>";
						}

							if (isset($_POST['enviados'])) {
								//Elemnto reactivo para mostrar los detalles
								echo "
		 					 <div class='container divTable pt-5'>
		 					 <table border ='1' class='tablas table'>
							  <thead>
							  <tr>
							 	<th>Codigo</th>
							  	<th>Cedula del Cliente</th>
							  	<th>Codigo producto</th>
							  	<th>Cantidad</th>
							  	<th>Total</th>
							  	<th>Estado</th>
							  </tr>
							  </thead>";

						foreach ($objetoAdministracion->consultarDetalles() as $k) {

							if ($k->estado == 1) {

								 echo "<tbody>
									  	<tr>
										  	<td>$k->detalles</td>
										  	<td>$k->cedulaCliente</td>
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

						if (isset($_POST['pendientes'])) {
								//Elemento reactivo para mostrar los envios que estan pendientes
								echo "
		 					 <div class='container divTable pt-5'>
		 					 <table border ='1' class='tablas table'>
							  <thead>
							  <tr>
							 	<th>Codigo</th>
							  	<th>Cedula del Cliente</th>
							  	<th>Codigo producto</th>
							  	<th>Cantidad</th>
							  	<th>Total</th>
							  	<th>Estado</th>
							  </tr>
							  </thead>";

						foreach ($objetoAdministracion->consultarDetalles() as $k) {

							if ($k->estado == 0) {

								 echo "<tbody>
									  	<tr>
										  	<td>$k->detalles</td>
										  	<td>$k->cedulaCliente</td>
										  	<td>$k->codProducto</td>
										  	<td>$k->cantidad</td>
										  	<td>$k->total</td>
										  	<td class='backForm'><form action='panelAdmin.php' method='POST' class='backForm'> 
	                     							<button type='submit' name='enviado' value='$k->detalles' class='botonActualizar'>Enviado</button>
	                     							<input type='hidden' name='cedulaEnvio' value='$k->cedulaCliente'>
	           								     </form>
										  	</td>
							            </tr>
						            </tbody>";	
							}
							}

							echo "</table>
								</div>";
						}

						if (isset($_POST['enviado'])) {
							//Funcion para registrar los envios
							$objetoAdministracion->detalles = $_POST['enviado'];
							$objetoAdministracion->estado = 1;
							$codigoPedidoEnvio = $_POST['enviado'];
							$cedulaEnvio = $_POST['cedulaEnvio'];
							if ($objetoAdministracion->actualizarDetalles()) {
								echo "<script type='text/javascript'>
								alert('Envio registrado');
							    </script>";
							}

							echo "<div class='container formularios'>
								<br>
								<form action='panelAdmin.php' method='POST' class='form-inline formularios' id='form'>

									<div class='form-group formularios'>
										<label for='empresa' class='control-label offset-2 col-3 formularios pt-4'>Empresa:</label>
										<div class='col-6 formularios pt-4'>
											<input type='text' name='empresa' id='empresa' class='form-control'>
										</div>
									</div>

									<div class='form-group formularios'>
										<label for='telefono' class='control-label offset-2 col-3 formularios pt-4'>Telefono:</label>
										<div class='col-6 formularios pt-4'>
											<input type='text' name='telefono' id='telefono' class='form-control'>
										</div>
									</div>

									<ul class='error pt-3 col-6 offset-5' id='error'></ul>

									<div class='form-group offset-5 pt-4 pb-2 formularios'>
										<button type='submit' name='registroEnvio' class='form-control col-auto btActualizar'>Registrar envio</button>
									</div>

									<input type='hidden' name='cedulaEnvio' value='$cedulaEnvio'>
									<input type='hidden' name='codigoPedidoEnvio' value='$codigoPedidoEnvio'>

								</form>

								</div>";

						}

						if (isset($_POST['registroEnvio'])) {
								//Funcion para registrar la informacion de los envios
								$fecha = date('Y-m-d',time());
								$objetoAdministracion->cedulaCliente = $_POST['cedulaEnvio'];
								$objetoAdministracion->empresa = $_POST['empresa'];
								$objetoAdministracion->telefono = $_POST['telefono'];
								$objetoAdministracion->fechaEnvio = $fecha;
								
								if($objetoAdministracion->registrarEnvioDetalles()){
									echo "<script>
									alert('se registro');
									</script>";	
								}
						}

						if (isset($_POST['envio'])) {
								//Elemento para mostrar los detalles de los envios
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

						foreach ($objetoAdministracion->consultarenviodetalles() as $k) {

								 echo "<tbody>
									  	<tr>
										  	<td>$k->empresa</td>
										  	<td>$k->telefono</td>
										  	<td>$k->fechaEnvio</td>
							            </tr>
						            </tbody>";
								 
							}
							echo "</table>
								</div>";
						}


						if (isset($_POST['pedido'])) {
								//Elemento reactivo para mostrar los pedidos
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

						foreach ($objetoAdministracion->consultarPedido() as $k) {

								 echo "<tbody>
									  	<tr>
										  	<td>$k->codPedido</td>
										  	<td>$k->cedulaCliente</td>
										  	<td>$k->fechaPedido</td>
							            </tr>
						            </tbody>";
								 
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
<script src="js/panelAdmin.js"></script>
<script src="js/panelAdmin1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
