<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administración</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
 
 
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
		<?php
 
			$email = $_POST["email"];
			$pass = $_POST["password"];
 
			if($email == "admin@hotmail.com" && $pass == "123"){
				header('Location: index.php');
			?>
				
			<?php	
			}
			else{
			?>	
				<div class="alert alert-danger">El Email o contraseña son incorrectos <a href="login.php">Volver</a></div>
				
			<?php	
 
				}
 
		?>
			</div>
		</div>
	</div>
 
 
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>