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
	<link rel="stylesheet" type="text/css" href="css/cssIndexUsuario.css">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
</head>
<body>

	<div class="">
		
		<div class="container">
		<!--Zona del header con imagenes-->
		<div class="row justify-content-around">
			<div class="heder">
				<img class="img-thumbnail" src="img/sombreros/16c.jpeg">
				<img class="img-thumbnail" src="img/sombreros/15c.jpeg">
				<img class="img-thumbnail" src="img/sombreros/3.jpeg">
			</div>
		</div>

		<div class="nav row justify-content-start">
		<!--Zona del nav-bar con sus opciones de navegacion  -->	
			<a href="cssIndexUsuario.php">
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
			
			<div class="col-9 main container">
				<!--Zona de main con su respectiva informacion -->
				<div class="row main">
					<div class="col-12 main pt-5"><h2>Sombreros Montery</h2></div>
				</div>

				<div class="row pt-5 main">
					
					<div class="col-6 main">
						<img src="img/sombreros/2.jpeg" class="img-fluid rounded ">
					</div>

					<div class="col-6 main pt-4">
						
						<span >Somos una empresa especializada en la fabricación y distribución de sombreros, enfocados en la mano de obra artesanal colombiana. Nuestro mercado abarca las ventas al por mayor y al detal de productos que provienen de todos los rincones del país y productos de calidad provenientes del exterior. Manejamos precios competitivos que cumplen con la exigencia del mercado actual. Dedicados a la distribución nacional y empezando a abrir mercados internacionales, donde lo hecho a mano es cada vez mas importante.</span>
					</div>

				</div>

				<div class="row main">
					
					<div class="main col-10 pt-5 offset-2 pb-3" >
						<iframe width="80%" height="355" src="https://www.youtube.com/embed/EbWKni8cJaI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

