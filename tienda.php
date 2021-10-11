<?php 
require_once 'crud.php';
$objetoAdministracion = new administracion;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/csstienda.css">
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
			<a href="index.php">
				<div class="col-auto nav-btn">
				Montery
			</div>
			</a>

			<a href="tienda.php">
				<div class="col-auto nav-btn">
				Tienda
				</div>
			</a>

			<a href="contacto.php">
				<div class="col-auto nav-btn">
				Contacto
				</div>
			</a>

		</div>

		<div class="container main row">
			<!--Zona de main con su respectiva informacion -->			
			<div class="col-12">
				
				<form id="formulario" action="tiendaUsuario.php" method="POST" name="formulario">

				<div class="row">
					
					<div class="col-3 contForm border">
						<img src="img/sombreros/6.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 2 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(1) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/7.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 2 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(2) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/20.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 2 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(3) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/19.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 2 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(4) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

				</div>

				<div class="row">
					
					<div class="col-3 contForm border">
								
						<img src="img/sombreros/14.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(5) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/8.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(6) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/22.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(7) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/24.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(8) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

				</div>	

				<div class="row">
					
					<div class="col-3 contForm border">
								
						<img src="img/sombreros/11.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(9) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/12.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(10) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/17.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(11) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/18.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 3 ½</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(12) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

				</div>	

				<div class="row">
					
					<div class="col-3 contForm border">
								
						<img src="img/sombreros/10.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 4</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(13) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>
								
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/9.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 4</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(14) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/25.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 4</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(15) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/23.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 4</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(16) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

				</div>		

				<div class="row">
					
					<div class="col-3 contForm border">
								
						<img src="img/sombreros/5.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 5</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(17) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/13.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 5</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(18) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>		
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/20.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 5</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(19) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>	
					</div >	

					<div class="col-3 contForm border">
								
						<img src="img/sombreros/21.jpeg" class="img-fluid rounded  pl-5 contForm">
						<hr>
						<h4>Talla 5</h4>
						<?php foreach($objetoAdministracion->obtenerProducto(20) as $k){echo "<h4>Cantidad en Existencia $k->cantidadExistencia</h4>";}?>
						<hr>
								
					</div >	

				</div>	

				<ul class="error offset-4" id="error">
					<li>Debe estar registrado para realizar una compra</li>
				</ul>
		
				</form>

			</div>

		</div>

	
		<div class="row footer align-items-center container">
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
