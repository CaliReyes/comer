<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Protector</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
</head>
<body>
<?php include('barraMenu.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<h2>Wide dos</h2>
		</div>
	</div>
	<div class="row">

            <img id="contenido1" src="img/portafolio/wide2-preview.png" class="img-responsive" alt="">
            
            <img  class="oculto img-responsive" id="contenido2" src="img/portafolio/wide2-preview2.png" alt="" />
        	
	</div>
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 well">
			   <img type="button" onclick="mostrar('contenido1') & ocultar('contenido2')" src="img/portafolio/wide2-s1.png" class="img-thumbnail">
			   <img type="button" onclick="mostrar('contenido2') & ocultar('contenido1')" src="img/portafolio/wide2-s2.png" class="img-thumbnail"><br><br><br>
		
	            <select class="form-control">
                <option value="">Selecciona una talla</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
	            </select><br><br>
	            <h2 align="center">$90</h2>
				<p align="center">Envío GRATIS</p><br>
				<p align="center"><button type="button" class="btn btn-primary btn-block">AÑADIR A LA CESTA</button></p>
		</div>
	</div>
	<div class="row" >
		<div class="col-xs-offset-1 col-xs-5 well">
			<p class="text-muted">Tipo </p>
			<p class="text-muted">Temporada </p>
			<p class="text-muted">Altura tacón </p>
			<p class="text-muted">Exterior </p>
			<p class="text-muted">Forro </p>
			<p class="text-muted">Suela interior </p>
			<p class="text-muted">Suela exterior </p>
			<p class="text-muted">Referencia </p>
		</div>
		<div class="col-xs-5 well">
			<p>Protector </p>
			<p>Otoño/Primavera </p>
			<p>7.5 cm </p>
			<p>Goma </p>
			<p>Goma </p>
			<p>Goma </p>
			<p>Goma </p>
			<p>38 </p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 well">
			<h2 align="center">Opiniones</h2>
			<p align="center">Aqui podrás dejar tus opiniones</p>
			<p align="center"><button type="button" class="btn btn-primary">DANOS TU OPINION</button></p>
		</div>
	</div>
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



	<script>

      function mostrar(id)
		{var objeto=document.getElementById(id)
		objeto.style.display="block"; }

      function ocultar(id)
		{var objeto=document.getElementById(id)
		objeto.style.display="none";}
	</script>

</html>