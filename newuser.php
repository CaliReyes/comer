<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear cuenta</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
</head>
<body>
<?php include('barraMenu.php'); ?>

	<div class="container">
	<div class="row">
		<div class="col-xs-12 well">
			<h2 align="center">Crea tu cuenta</h2>
		</div>
	</div>
		<form>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="Tu email" name="email">

			</div>
			<div class="form-group">
				<label for="password">Contraseña</label>
				<input type="password" class="form-control" id="password" placeholder="Tu contraseña" name="password">

			</div>

		</form>
		<div class="row">
			<div class="col-xs-12 well">
				<h3 align="center">Dirección de Envío</h3>
			</div>
		</div>
		<form>
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="" class="form-control" id="nombre" placeholder="Tu nombre" name="nombre">

			</div>
			<div class="form-group">
				<label for="">Apellidos</label>
				<input type="" class="form-control" id="apellidos" placeholder="Tus apellidos" name="apellidos">

			</div>
			<div class="form-group">
				<label for="">Dirección</label>
				<input type="" class="form-control" id="direccion" placeholder="Tu direccion" name="direccion">

			</div>
			<div class="form-group">
				<label for="">Complemento de direccion</label>
				<input type="" class="form-control" id="complemento" placeholder="" name="complemento">

			</div>
			<label for="">País</label>
			<select class="form-control">
                <option value="">Tu país</option>
                <option value="el_salvador">El Salvador</option>
                <option value="guatemala">Guatemala</option>
                <option value="honduras">Honduras</option>
                <option value="nicaragua">Nicaragua</option>
	        </select><br>
	        <label for="">Departamento</label>
			<select class="form-control">
                <option value="">Tu departamento</option>
                <option value="el_salvador">San Miguel</option>
                <option value="guatemala">San Salvador</option>
                <option value="honduras">Santa Ana</option>
                <option value="nicaragua">Chalatenango</option>
	        </select><br>
	        <div class="row">
	        	<div class="col-xs-12 well">
	        	</div>
	        </div>
	        <div class="form-group">
				<label for="">Teléfono casa</label>
				<input type="" class="form-control" id="telcasa" placeholder="" name="telcasa">

			</div>
			<div class="form-group">
				<label for="">Teléfono móvil</label>
				<input type="" class="form-control" id="telmovil" placeholder="" name="telmovil">

			</div>
			<div class="form-group">
				<label for="">Teléfono oficina</label>
				<input type="" class="form-control" id="teloficina" placeholder="" name="teloficina">

			</div>
			<div class="row">
				<div class="col-xs-12 well">
					<p align="center"><button type="button" class="btn btn-primary">CONFIRMAR</button></p>
				</div>
			</div>

		</form>
	</div>
	
</body>

<footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; undead nightmare studios 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Politicas de privacidad</a>
                        </li>
                        <li><a href="#">Terminos de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>