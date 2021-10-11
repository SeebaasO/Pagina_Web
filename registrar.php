<?php 
require_once 'crud.php';
$objetoAdministracion = new administracion;
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/cssRegistrar.css">
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

		<div class="row">
			
			<div class="col-9 main">
				<!--Zona de main con su respectiva informacion -->
				<div class="container formulario">
					
					<h2>Registro</h2>

					<form class="form form-horizontal" id="formulario" action="registrar.php" method="POST">

						<div class="form-group inputs row pt-5">
							<label for="cedula" class="control-label label col-2 offset-2">Cedula :</label>
							<input type="text" id="cedula" class="form-control col-6 " placeholder="Cedula :" name="cedula">
						</div>

						<div class="form-group inputs row">
							<label for="correo" class="control-label col-2 offset-2">Email :</label>
							<input type="email" id="correo" class="form-control col-6" placeholder="Email :" name="correo">
						</div>

						<div class="form-group inputs row">
							<label for="clave" class="control-label col-2 offset-2">Contraseña :</label>
							<input type="password" id="clave" class="form-control col-6" placeholder="Contraseña :" name="clave">
						</div>

						<div class="form-group inputs row">
							<label for="nombre" class="control-label col-2 offset-2">Nombre :</label>
							<input type="text" id="nombre" class="form-control col-6" placeholder="Nombre :" name="nombre">
						</div>

						<div class="form-group inputs row">
							<label for="celular" class="control-label col-2 offset-2">Celular :</label>
							<input type="text" id="celular" class="form-control col-6" placeholder="Celular :" name="celular">
						</div>

						<div class="form-group inputs row">
							<label for="ciudad" class="control-label col-2 offset-2">Ciudad :</label>
							<input type="text" id="ciudad" class="form-control col-6" placeholder="Ciudad :" name="ciudad">
						</div>

						<div class="form-group inputs row">
							<label for="direccion" class="control-label terminos col-2 offset-2">Direccion :</label>
							<input type="text" id="direccion" class="form-control control-label col-6" placeholder="Direccion :" name="direccion">
						</div>

						<div class="form-group inputs terminos row">
							<input type="checkbox" id="terminos" class="form-control col-2 offset-3">
							<label for="terminos" class="control-label terminoslabel">Terminos y Condiciones</label>
						</div>

						<div class="ul offset-4">
							<ul class="error" id="error"></ul>
						</div>

						<div class="form-group espacioBoton col offset-5">
							<input type="submit" value="Registrar" class="boton btn" name="registrar">
						</div>

					</form>

				</div>

			</div>

			<div class="col-3 aside">
				<!--Zona del aside con imagenes de muestra y el acceso de a la pagina-->
				<div class="row justify-content-around">
					
					<a href="login.php"><div class="option col">Ingresar</div></a>

					<a href="registrar.php"><div class="option col">Registrar</div></a>

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

<script src="js/registro.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php 
if(isset($_POST['registrar'])){
 	//Fuincion para registrar los usuarios 
	$objetoAdministracion->cedula = $_POST['cedula'];
	$objetoAdministracion->correo = $_POST['correo'];
	$objetoAdministracion->clave = $_POST['clave'];
	$objetoAdministracion->nombre = $_POST['nombre'];
	$objetoAdministracion->celular = $_POST['celular'];
	$objetoAdministracion->ciudad = $_POST['ciudad'];
	$objetoAdministracion->direccion = $_POST['direccion'];
	//Inyeccion de datos a la base de datos
	if($objetoAdministracion->registrarCliente()){

		echo "<script type='text/javascript'>
		alert('Usuario registrado');
	    </script>";

	}else{

		echo "<script type='text/javascript'>
		alert('Ocurrio un error');
	    </script>";

	}
}

 ?>