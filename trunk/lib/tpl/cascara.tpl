<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>{{s_titulo}}</title>
	
	<link rel="stylesheet" href="{{urlbase}}css/bootstrap.min.css" media="screen" />
	<link rel="stylesheet" href="{{urlbase}}css/style.css" media="screen" />
	<link rel="shortcut icon" href="{{urlbase}}img/r-kiss.png" />
</head>

<body>
	<header>
	<div class="container">	
			<h1><img src="img/r-kiss.png" />{{s_titulo}} <small>{{s_subtitulo}}</small></h1>
	</div>
	</header>
	
	<nav>
	<div class="container">
		<h5><a href="{{urlbase}}">Inicio</a> | <a href="{{urlbase}}?get=about">Información</a></h5>
	</div>
	</nav>
	
	<section>
	<div class="container contenido">
		<hr/>
		{{s_contenido}}
		<hr/>
	</div>
	</section>
	
	<footer>
	<div class="container pie">
		<h6>&copy; 2015 <a target='_blank' href="http://www.twitter.com/mdemouch">MdeMoUcH</a> <a target='_blank' href="http://www.lagranm.com/">lagranm.com</a></h6>
	</div>
	</footer>
	
	<script type="text/javascript" src="{{urlbase}}js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="{{urlbase}}js/sha1.js"></script>
	<script type="text/javascript" src="{{urlbase}}js/main.js"></script>
	
</body>
</html>

