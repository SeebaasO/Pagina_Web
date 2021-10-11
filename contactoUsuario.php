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
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/cssContacto.css">
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
			<a href="indexUsuario.php">
				<div class="col-auto nav-btn">
				Montery
			</div>
			</a>

			<a href="tiendaUsuiario.php">
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
			<div class="col-9 main">

				<div class="informacion">
					
					<h2>Contacto</h2>

					<p>
						Colombia <br>
						Armenia Quindio  <br>
						Carrera 21 # 14 - 29 <br>
						Celular: 312 760 5094 <br> 
						Telefono: 7 40 3437 <br>
						Correo: MonteryArmenia@gmail.com <br>
					</p>

				</div>

				<div class="map align-items-center">
					
					<iframe class="mapa col" src="https://www.google.com/maps/embed?pb=!4v1543929783806!6m8!1m7!1s2jA-iN9IT8tKluDEtjmZLQ!2m2!1d4.539172808284779!2d-75.6735760669798!3f159.37005486610457!4f9.734570187434542!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

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
		
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>