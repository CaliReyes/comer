<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">

	<style>
 
body {
  padding-bottom: 40px;
  
}
 
.login {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
 
}
 
#sha{
	max-width: 340px;
    -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    -moz-box-shadow:    0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    box-shadow:         0px 0px 18px 0px rgba(48, 50, 50, 0.48);
    border-radius: 6%;
  }
   #avatar{
width: 76px;
height: 76px;
margin: 0px auto 10px;
display: block;
border-radius: 50%;
 } 
 
</style>

</head>
<body>
<?php include('barraMenu.php'); ?>
<div class="container well" id="sha">
	<div class="row">
		<div class="col-xs-12">
			<img src="img/avatar.png" class="img-responsive" id="avatar">
		</div>
	</div>
	<form class="login" action="check.php" method="POST">
		<div class="form-group">
			<input type="email" class="form-control" placeholder="Correo electronico" name="email" required autofocus>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" placeholder="Contraseña" name="password" required>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Inicia sesión</button>
		<div class="checkbox">
		<p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a></p>
		</div>
	</form>
</div>
	
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>