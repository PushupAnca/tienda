<?php 

// session_start();

if (isset($_COOKIE['color'])) {
	$color = htmlspecialchars($_COOKIE['color']);  // La function htmlspecialchars() es para proteccion 
} else {
	$color = '#6b7477';
}

$_SESSION['nombre'] = '';

if ($_SESSION) { // las sesiones son variables que podemos utilizar en diferentes paginas y mantener su valor en cada una de ellas.
	$nombre = $_SESSION['nombre'];
} else {
	echo "No has iniciado sesion";
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Magazine</title>
	<meta meta="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="css/estilosPaginacion.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link src="js/jquery.min.js">
    <script src="js/jquery.js"></script>
    <style type="text/css">
    	p{
    		color: <?php echo $color?>;
    	}

    	.carousel-inner>.item>a>img, .carousel-inner>.item>img{
    		width: 100%;
    	}
    	.container .right{
    		background: transparent;
    	}
    </style>
</head>
<body>

<header>
<nav class="header navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="magazine.php">Magazine</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>

     <div class=" navbar-right">
	    <ul class="pager">
		  	<li><a href="iniciar-sesion.php">Iniciar sesion</a></li>
		  	<li><a href="registro.php">Registrate</a></li>
	  </ul>
</div>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>


</header>
<main>

     <section class="fondo">
		<div class="textoFondo">
			<h1>Tu &laquo;tienda on &raquo; line</h1>
			<p>Lorem ipsum dolore nisi occaecat laborum tempor sed anim sit dolor reprehenderit pariatur cupidatat cupidatat consectetur laborum velit anim.</p>
		</div>
		<div class="opacity"></div>
	</section>

	<section class="firstColumnFlex col-lg-12">
				<div class="img">
					<img src="../img/crema.jpg">
					 <p>Descripción del producto. Magna eu in proident magna cillum cupidatat velit pariatur quis nisi quis do.
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="../img/crema.jpg">
					<p>Descripción del producto. Magna eu in proident magna cillum cupidatat velit pariatur quis nisi quis do.
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="../img/crema.jpg">
					<p>Descripción del producto. Magna eu in proident magna cillum cupidatat velit pariatur quis nisi quis do.
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="../img/crema.jpg">
					<p>Descripción del producto. Magna eu in proident magna cillum cupidatat velit pariatur quis nisi quis do.
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
		</section>
	<div class="container principal col-lg-12">
		<section class="left sidebar col-lg-2">
			<div class="">
				  <div class="list-group">
				    <a href="#" class="list-group-item">Pantalones slim</a>
				    <a href="#" class="list-group-item">Camisas mujer</a>
				    <a href="#" class="list-group-item">corbatas</a>
				     <a href="#" class="list-group-item">Corbatas para mujer</a>
				    <a href="#" class="list-group-item">Complementos mujer</a>
				    <a href="#" class="list-group-item">Faldas</a>
				     <a href="#" class="list-group-item">Vestidos</a>
				  </div>
            </div>
		</section>
		<section class="contenido flexboxColumn col-lg-8">
			<div class=" flexbox">
				<div class="img">
					<img src="../img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/crema.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/gestion.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/Global.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
			</div>
			<div class=" flexbox">
				<div class="img">
					<img src="../img/provedor.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/solar.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/usuarios.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
			</div>
			<div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../img/4e.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Productos</h3>
        <p>La mejor marca</p>
      </div>
    </div>

    <div class="item">
      <img src="../img/comprar.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Productos</h3>
        <p>Thank you, Productos!</p>
      </div>
    </div>

    <div class="item">
      <img src="../img/zakupy.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Productos</h3>
        <p>La mejor marca</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>


			<div class=" flexbox">
				<div class="img">
					<img src="../img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="../img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
			</div>
			
		





		</section>
		<section class="right flexboxColumn col-lg-2">
				<div class="img">
					<img src="../img/img2.jpg">
					 <p>Productos relacionados
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="../img/img2.jpg">
					<p>Productos relacionados
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="../img/img2.jpg">
					<p>Productos relacionados
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="../img/img2.jpg">
					<p>Descripción del producto
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
		</section>
	</div>

	<div class="contenedor">
		<h1>Articulos</h1>
		<section class="articulos">
			<ul>
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id']  ?></li>
				<?php endforeach; ?>
			</ul>
		</section>

		<section class="paginacion">
			<ul>
				<!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
				<?php if ($pagina == 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
				<?php endif; ?>

				<!-- Ejecutamos un ciclo para mostrar las paginas -->
				<?php 
				for ($i=1; $i <= $numeroPaginas ; $i++) { 
					if ($pagina == $i) {
						echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
					} else {
						echo "<li><a href='?pagina=$i'>$i</a></li>";
					}
				}
				?>

				<!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
				<!-- $pagina == $numeroPaginas SIGNIFICA QUE ESTAMOS EN LA ULTIMA PAGINA -->
				<?php if ($pagina == $numeroPaginas): ?>
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
				<?php endif; ?>
			</ul>
		</section>
	</div>








</main>






<script type="text/javascript" src="js/.js"></script>
</body>
</html>